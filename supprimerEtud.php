<?php
    include "connexion.php";

    $codeSaisie = $_POST['code1'];
    $requete = "delete from etudiant where CodeEtudiant = '$codeSaisie'";

    $result = $bdd->exec($requete);

    if($result) {
        echo "Bien";
    }
    else{
        echo "Tester votre code !";
    }
?>