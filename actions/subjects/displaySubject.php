<?php

require('../actions/db.php');

$getAllSubjects = $bdd->prepare('SELECT * FROM sujet');
$getAllSubjects->execute();


