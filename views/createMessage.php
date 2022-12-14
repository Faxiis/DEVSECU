<?php require('../actions/users/securityAction.php');
require('../actions/subjects/addMessage.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/app.css">
    <script src="../js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            invalid_elements: 'onclick, script, scr, onload',
        });
    </script>
</head>

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