<?php require('../actions/admin/securityAction.php');
require('../actions/admin/showUser.php');
?>

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
                    <th>Identifiant</th>
                    <th>Pseudonyme</th>
                    <th>Rôle</th>
                    <th>Date d'inscription</th>
                    <th>Photo de profil</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($users = $user->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td><?= $users['Id_User'] ?></td>
                        <td><?= $users['username'] ?></td>
                        <td><?= $users['role'] ?></td>
                        <td><?= $users['inscriptionDate'] ?></td>
                        <td><img src="/views/photoProfil/<?php echo $users['photoProfil'] ?>" width="50" alt="" /></td>
                        <td><a href="../actions/admin/deleteUser.php?id=<?php echo htmlspecialchars($users['Id_User']) ?>" class="btn btn-dark">Bloquer</a></td>
                    </tr>
                <?php
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>