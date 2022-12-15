<?php
session_start();
require('../actions/users/UserProfil.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/Head.php' ?>

<body>
    <?php include '../includes/Navbar.php' ?>
    <?php if (isset($errorMsg)) {
        echo "<p>$errorMsg.</p>";
    } ?>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header mb-3">
                <form action="" method="POST" enctype="multipart/form-data">
                    <h4 class="form-label">Photo de profil</h4>
                    <?php if (!empty($userInfos['photoProfil'])) {
                    ?>
                        <img src="photoProfil/<?php echo $userInfos['photoProfil'] ?>" width="150" alt="" />
                    <?php
                    } ?>
                    <br>
                    <br>
                    <input type="file" class="form-control" name="photoProfil">
                    <button type="submit" class="btn btn-dark mt-3" name="validate">Valider</button>
                </form>
            </div>
            <div class="card-body">
                <h4> Pseudonyme : <?= $_SESSION['username'] ?></h4><br>
                <a href="./editUsername.php"><button class="btn btn-dark">Modifier votre pseudonyme</button></a>
            </div>
            <div class="card-footer">
                <p> Rôle : <?= $_SESSION['role'] ?><br>
                    Inscrit le : <?= $_SESSION['inscriptionDate'] ?></p>
            </div>
        </div>
    </div>

</body>

</html>