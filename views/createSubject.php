<?php require('../actions/users/securityAction.php');
require('../actions/subjects/addSubject.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/Head.php' ?>

<body>
    <?php include '../includes/Navbar.php' ?>
    <form method=POST class="container">
        <h1 class="display-5 d-flex justify-content-center ">Ajouter un sujet</h1>
        <div class="mb-3">
            <label for="" class="form-label">Titre du sujet :</label>
            <textarea type="text" id="mytextarea" class="form-control" name="title"></textarea>
        </div>
        <button type="submit" class="btn btn-dark" name="validate">Ajouter</button>
    </form>

</body>

</html>


</html>