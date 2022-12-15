<?php
require('../actions/users/securityAction.php');
require('../actions/users/UserProfil.php');
require('../actions/users/editUsername.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/Head.php' ?>

<body>
    <?php include '../includes/Navbar.php' ?>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header mb-3">
                <h4 class="form-label">Photo de profil</h4>
                <input type="file" class="form-control" name="photoProfil">
            </div>
            <div class="card-body">
                <h4> Pseudonyme : <?= $_SESSION['username'] ?></h4><br>
                <form method=POST>
                    <div class="mb-3">
                        <?php if (isset($errorMsg)) {
                            echo "<p>$errorMsg.</p>";
                        } ?>
                        <label for="" class="form-label">Taper votre nouveau pseudonyme : </label>
                        <input type="text" class="form-control" name="username">
                        <button type="submit" class="btn btn-dark mt-3" name="validate">Modifier</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <p> Rôle : <?= $_SESSION['role'] ?><br>
                    Inscrit le : <?= $_SESSION['inscriptionDate'] ?></p>
            </div>
        </div>
    </div>

</body>

</html>