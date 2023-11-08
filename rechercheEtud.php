<?php
    include "connexion.php";
    $s = $_POST['slct'];
    $v = $_POST['v'];

    $requete = "select * from Etudiant where $slct = '$v' ";
    $result = $bdd->query($requete);
    $d = $result->fetchAll();
    if(count ($d)>0) {
        "Etudiant cherché dans la base";
    }

    else{
        echo "N'existe pas";
    }
?>