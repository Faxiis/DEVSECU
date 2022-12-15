<?php
require('../db.php');

if (isset($_GET['id']) and !empty($_GET['id'])) {
    $getId = $_GET['id'];
    $recupMessage = $bdd->prepare('SELECT * FROM message WHERE Id_Message = ?');
    $recupMessage->execute(array($getId));
    if ($recupMessage->rowCount() > 0) {
        $supMessage = $bdd->prepare('DELETE FROM message WHERE Id_Message = ?');
        $supMessage->execute(array($getId));

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        echo "Aucun message trouvé";
    }
} else {
    echo "Aucun message";
}
