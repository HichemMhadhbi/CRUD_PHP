<?php
    include "connexion.php";
    $Code = $_POST['Code'];
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $Adresse = $_POST['Adresse'];
    $Classe = $_POST['Classe'];

    $requete = " INSERT INTO etudiant values ('$Code', '$Nom', '$Prenom', '$Adresse', '$Classe')";
    $result = $bdd->exec($requete);
    
    if($result) {
        echo "Insert effectuee";
    }
    else{
        echo "Insert echouee";
    }
?>