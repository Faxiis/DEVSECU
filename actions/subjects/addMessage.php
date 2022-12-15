<?php

require('../actions/db.php');

if (isset($_POST['validate'])) {
    if (!empty($_POST['content'])) {

        $idOfSubject = $_GET['id'];

        $checkIfSubjectExist = $bdd->prepare('SELECT Id_Sujet FROM sujet WHERE Id_Sujet = ?');
        $checkIfSubjectExist->execute(array($idOfSubject));

        if ($checkIfSubjectExist->rowCount() > 0) {
            $message_content = $_POST['content'];
            $message_date = date('Y-m-d H:i:s');
            $message_author = $_SESSION['username'];

            $insertMessage = $bdd->prepare('INSERT INTO message(contenu_message, date_Creation, expediteur, Id_Sujet, Id_Createur) VALUES(?, ?, ?, ?, ?)');
            $insertMessage->execute(array($message_content, $message_date, $message_author, $idOfSubject, $_SESSION['id']));

            header("Location: home.php");
        }
    }
}
