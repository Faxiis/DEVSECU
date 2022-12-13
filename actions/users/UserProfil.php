<?php
require('../actions/db.php');

if (isset($_FILES['photoProfil']) and !empty($_FILES['photoProfil']['name'])) {
    $tailleMax = 2097152;
    $enxtensionsValides = array('jpg', 'jpeg', 'gif', 'png');
    if ($_FILES['photoProfil']['size'] <= $tailleMax) {
        $extensionUpload = strtolower(substr(strrchr($_FILES['photoProfil']['name'], '.'), 1));
        if (in_array($extensionUpload, $enxtensionsValides)) {
            $chemin = "photoProfil/" . $_SESSION['id'] . "." . $extensionUpload;
            $resultat = move_uploaded_file($_FILES['photoProfil']['tmp_name'], $chemin);
            if ($resultat) {
                $UpdatePhotoProfil = $bdd->prepare('UPDATE utilisateur SET photoProfil = :photoProfil WHERE Id_User = :id');
                $UpdatePhotoProfil->execute(array(
                    'photoProfil' => $_SESSION['id'] . "." . $extensionUpload,
                    'id' => $_SESSION['id']
                ));
                header('Location: ../views/myProfil.php');
            } else {
                $errorMsg = "L'importation de la photo de profil a échoué";
            }
        } else {
            $errorMsg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
        }
    } else {
        $msgError = "Votre photo de profil ne doit pas dépasser 2Mo";
    }
}

$getPP = $bdd->prepare('SELECT * FROM utilisateur WHERE Id_User = ?');
$getPP->execute(array($_SESSION['id']));
$userInfos = $getPP->fetch();
