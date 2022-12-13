<?php require('actions/users/connexionAction.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include('includes/Head.php') ?>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Forum</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""></a>
                </li>
            </ul>
        </div>
    </nav>
    <div>
        <!-- zone de connexion -->
        <h1 class="position-absolute top-4 start-50 translate-middle">Se connecter</h1>
        <form method="POST" class="container mt-5 ">
            <?php if (isset($errorMsg)) {
                echo "<p>$errorMsg.</p>";
            } ?>
            <div class="form-group">
                <label for="Email">Identifiant</label>
                <input type="text" class="form-control" required name="identifiant" placeholder="Rentrez votre identifiant">
            </div>
            <div class="form-group">
                <label for="Password">Mot de passe</label>
                <input type="password" class="form-control" required name="password" placeholder="Rentrez votre mot de passe">
            </div>
            <button type="submit" class="btn btn-primary mt-3" name="validate">Connexion</button><br>
            <a href="/views/register.php">Inscrivez vous !</a>
        </form>
    </div>

</body>

</html>