<?php require('../actions/users/securityAction.php');
require('../actions/subjects/addMessage.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/Head.php' ?>

<body>
    <?php include '../includes/Navbar.php' ?>
    <?php if (isset($errorMsg)) {
        echo "<p>$errorMsg.</p>";
    } else {
    ?>
        <form method=POST class="container">
            <h1 class="display-5 d-flex justify-content-center ">Ajouter un message à votre sujet</h1>
            <div class="mb-3">
                <label for="" class="form-label">Message :</label>
                <textarea type="text" id="mytextarea" class="form-control" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-dark" name="validate">Ajouter</button>
        </form>
    <?php
    } ?>

</body>

</html>