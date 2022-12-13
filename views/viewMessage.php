<?php require('../actions/subjects/displayMessage.php');
require('../actions/users/securityAction.php');
require('../actions/subjects/displaySubject.php'); ?>

<!DOCTYPE html>
<html lang="en">
<?php include('../includes/Head.php') ?>

<body>
    <?php include '../includes/Navbar.php' ?>
    <div class="container">
        <?php
        while ($libelle = $getLibelle->fetch()) {
        ?>
            <div class="mb-5 mt-3">
                <div class="card card-body">
                    <h2 class="card-text">
                        <?= $libelle['libelle']; ?>
                    </h2>
                </div>
            </div>
        <?php
        }
        ?>
        <a href="createMessage.php?id=<?php echo htmlspecialchars($id); ?>"><button class="btn btn-dark mb-3">Répondre</button></a>
        <?php
        while ($message = $getAllMessages->fetch()) {
        ?>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        <?= $message['contenu_message']; ?>
                    </p>
                </div>
                <div class="card-footer">
                    <p class="card-text">
                        <?php
                        $id = $message['Id_Createur'];
                        $getPhotoProfil = $bdd->prepare('SELECT photoProfil FROM utilisateur WHERE Id_User = ?');
                        $getPhotoProfil->execute(array($id));
                        $PP = $getPhotoProfil->fetch(PDO::FETCH_ASSOC); ?>
                        <img src="photoProfil/<?php echo $PP['photoProfil'] ?>" width="50" alt="" />
                        Publié par
                        <?= $message['expediteur']; ?> le <?= $message['date_Creation']; ?>
                    </p>
                </div>
            </div>
            <br>
        <?php
        }
        ?>
    </div>
</body>

</html>