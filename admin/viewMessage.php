<?php require('../actions/subjects/displayMessage.php');
require('../actions/admin/securityAction.php');
require('../actions/subjects/displaySubject.php'); ?>

<!DOCTYPE html>
<html lang="en">
<?php include('../includes/Head.php') ?>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Forum</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="users.php">Utilisateurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../actions/users/logoutAction.php">Déconnection</a>
                </li>
            </ul>
        </div>
    </nav>
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
                        <br>
                        <a href="../actions/admin/deleteMessage.php?id=<?php echo htmlspecialchars($message['Id_Message']) ?>" class="btn btn-dark">Supprimer</a>
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