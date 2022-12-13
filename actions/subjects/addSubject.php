<?php

require('../actions/db.php');

if (isset($_POST['validate'])) {
    if (!empty($_POST['title'])) {
        $subjet_title = htmlspecialchars($_POST['title']);
        $subject_date = date('Y-m-d H:i:s');
        $subject_author = $_SESSION['username'];

        $insertSubject = $bdd->prepare('INSERT INTO sujet(libelle, createur, date_Creation, Id_Createur) VALUES (?, ?, ?, ?)');
        $insertSubject->execute(array($subjet_title, $subject_author, $subject_date, $_SESSION['id']));

        header('Location: home.php');
    } else {
        $errorMsg = 'Veuillez compléter tous les champs';
    }
}
