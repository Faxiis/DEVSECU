<?php
session_start();
require('../actions/db.php');

if (isset($_POST['validate'])) {
    if (!empty($_POST['identifiant']) and !empty($_POST['password']) and !empty($_POST['passwordVerification'])) {
        $role = 'utilisateur';
        $identifiant = htmlspecialchars($_POST['identifiant']);
        $password = htmlspecialchars($_POST['password']);
        $passwordVerification = htmlspecialchars($_POST['passwordVerification']);
        $inscriptionDate = date('Y-m-d H:i:s');

        $checkIfUserExist = $bdd->prepare('SELECT username FROM utilisateur WHERE username = ?');
        $checkIfUserExist->execute(array($identifiant));

        if ($checkIfUserExist->rowCount() == 0) {
            if ($password === $passwordVerification) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $update = $bdd->prepare('INSERT INTO utilisateur(role, username, password, inscriptionDate) VALUES (?, ?, ?, ?)');
                $update->execute(array(
                    $role,
                    $identifiant,
                    $password,
                    $inscriptionDate
                ));

                $getInfoOfUser = $bdd->prepare('SELECT Id_User, username, role, inscriptionDate FROM utilisateur WHERE username = ? AND role = ? AND inscriptionDate = ?');
                $getInfoOfUser->execute(array(
                    $identifiant,
                    $role,
                    $inscriptionDate,
                ));

                $userInfos = $getInfoOfUser->fetch();

                $_SESSION['auth'] = true;
                $_SESSION['id'] = $userInfos['Id_User'];
                $_SESSION['username'] = $userInfos['username'];
                $_SESSION['role'] = $userInfos['role'];
                $_SESSION['inscriptionDate'] = $userInfos['inscriptionDate'];

                header('Location: ../views/home.php');
            }
        } else {
            $errorMsg = "L'utilisateur existe déjà";
        }
    } else {
        $errorMsg = 'Veuillez compléter tous les champs';
    }
}
