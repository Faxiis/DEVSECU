<?php
require('../db.php');

if (isset($_GET['id']) and !empty($_GET['id'])) {
    $getId = $_GET['id'];
    $recupSujet = $bdd->prepare('SELECT * FROM sujet WHERE Id_sujet = ?');
    $recupSujet->execute(array($getId));
    if ($recupSujet->rowCount() > 0) {
        $supSujet = $bdd->prepare('DELETE FROM sujet WHERE Id_sujet = ?');
        $supSujet->execute(array($getId));

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        echo "Aucun sujet trouvé";
    }
} else {
    echo "Aucun sujet";
}
