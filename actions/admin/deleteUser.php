<?php
require('../db.php');

if (isset($_GET['id']) and !empty($_GET['id'])) {
    $getId = $_GET['id'];
    $recupUser = $bdd->prepare('SELECT * FROM utilisateur WHERE Id_User = ?');
    $recupUser->execute(array($getId));
    if ($recupUser->rowCount() > 0) {
        $supUser = $bdd->prepare('DELETE FROM utilisateur WHERE Id_User = ?');
        $supUser->execute(array($getId));

        header('Location: ../../admin/users.php');
    } else {
        echo "Aucun utilisateur trouvé";
    }
} else {
    echo "Aucun utilisateur";
}
