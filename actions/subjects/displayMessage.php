<?php

require('../actions/db.php');

$id = (isset($_GET['id']) ? $_GET['id'] : '');

$getAllMessages = $bdd->prepare('SELECT * FROM message WHERE Id_Sujet = ?');
$getAllMessages->execute(array($id));

$getLibelle = $bdd->prepare('SELECT * FROM sujet WHERE Id_sujet = ?');
$getLibelle->execute(array($id));
