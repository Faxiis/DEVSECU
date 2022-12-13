<?php

require('../actions/db.php');

if (isset($_POST['validate'])) {
    if (!empty($_POST['username'])) {
        $username = $_POST['username'];

        $editUser = $bdd->prepare('UPDATE utilisateur SET username = :username WHERE Id_User = :idUser');
        $editUser->execute(array(
            ':username' => (empty($_POST['username']) ? NULL : htmlspecialchars($_POST['username'])),
            ':idUser' => htmlspecialchars($_SESSION['id'])
        ));
        $_SESSION['username'] = $_POST['username'];
        header('Location: myProfil.php');
    } else {
        $errorMsg = 'Veuillez compléter le champ ci-dessous';
    }
}
