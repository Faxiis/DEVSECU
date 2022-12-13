<?php require('../actions/users/securityAction.php');
require('../actions/subjects/displaySubject.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php include '../includes/Head.php' ?>

<body>
    <?php include '../includes/Navbar.php' ?>
    <div class="container">
        <a href="createSubject.php" class="btn btn-dark mt-3">Ajouter un sujet</a>
        <table class="table m">
            <thead>
                <tr>
                    <th>Créateur</th>
                    <th>Date de publication</th>
                    <th>Sujet</th>
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

                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>