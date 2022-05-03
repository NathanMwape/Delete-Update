<?php
    include_once("data.php");
    $sup = $conn->prepare("DELETE FROM personne WHERE id=? LIMIT 1");

    $execute = $sup->execute(array($_GET['numsup']));
    if ($execute) {
        include("index.php");
    }else {
        echo 'Echec de suppression';
    }
?>