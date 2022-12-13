<?php
session_start();
require('actions/db.php');

if (isset($_POST['validate'])) {
    if (!empty($_POST['identifiant']) and !empty($_POST['password'])) {

        $identifiant = htmlspecialchars($_POST['identifiant']);
        $password = htmlspecialchars($_POST['password']);

        $checkIfUserExist = $bdd->prepare('SELECT * FROM utilisateur WHERE username = ?');
        $checkIfUserExist->execute(array($identifiant));

        $userInfos = $checkIfUserExist->fetch();
        if ($checkIfUserExist->rowCount() > 0) {
            if (password_verify($password, $userInfos['password'])) {
                $getInfoForSession = $bdd->prepare('SELECT * FROM utilisateur WHERE username = ?');
                $getInfoForSession->execute(array($identifiant));

                $userInfos = $getInfoForSession->fetch();

                $_SESSION['auth'] = true;
                $_SESSION['id'] = $userInfos['Id_User'];
                $_SESSION['username'] = $userInfos['username'];
                $_SESSION['role'] = $userInfos['role'];
                $_SESSION['inscriptionDate'] = $userInfos['inscriptionDate'];

                header('Location: /views/home.php');
            } else {
                $errorMsg = 'Votre mot de passe est incorrect';
            }
        } else {
            $errorMsg = 'Votre identifiant est incorrect';
        }
    } else {
        $errorMsg = 'Veuillez compléter tous les champs';
    }
}
