<?php
require('../actions/db.php');

$user = $bdd->prepare('SELECT * FROM utilisateur');
$user->execute();
