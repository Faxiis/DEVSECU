<?php require('../actions/admin/securityAction.php');
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
        <table class="table m">
            <thead>
                <tr>
                    <th>Créateur</th>
                    <th>Date de publication</th>
                    <th>Sujet</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $getAllSubjects->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                        <td><?php
                            $id = $row['Id_Createur'];
                            $getPhotoProfil = $bdd->prepare('SELECT photoProfil FROM utilisateur WHERE Id_User = ?');
                            $getPhotoProfil->execute(array($id));
                            $PP = $getPhotoProfil->fetch(PDO::FETCH_ASSOC); ?>
                            <img src="photoProfil/<?php echo $PP['photoProfil'] ?>" width="50" alt="" />
                            <?= $row['createur'] ?>
                        </td>
                        <td><?= $row['date_Creation'] ?></td>
                        <td><a href="viewMessage.php?id=<?php echo htmlspecialchars($row['Id_sujet']); ?>"><?= $row['libelle'] ?></a></td>
                        <td><a href="../actions/admin/deleteSujet.php?id=<?php echo htmlspecialchars($row['Id_sujet']) ?>" class="btn btn-dark">Supprimer</a></td>

                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>