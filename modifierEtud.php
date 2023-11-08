<?php
    include "connexion.php";

    $Code = $_POST['cd'];
    $Nm = $_POST['n'];
    $Pre = $_POST['p'];
    $Adres = $_POST['adrs'];
    $Clas = $_POST['cls'];

    $requete = "update etudiant set Nom = '$Nm', Prenom = '$Pre', Adresse = '$Adres', Classe = '$Clas' where CodeEtudiant = '$Code' where $Nm = 'hichem' and $Pre = 'mhadhbi' ";
    $result = $bdd->exec($requete);
    if($result) {
        echo "Modification affectuee !";
    }
    else{
        echo "Verifier votre parametre !";
    }

?>