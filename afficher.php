<?php 
    include "connexion.php";
    $reqete = "select* from etudiant";
    $result = $bdd->query($requete);
    $cle = $result->fetchAll();
    echo "Liste des etudiants";
    echo    "<th>code</th>
            <th>nom</th>
            <th>prenom</th>
            <th>adresse</th>
            <th>classe</th>";
    foreach($cle as $value){  
        echo $L['codeetudiant']." ".$L['nom']." ".$L['prenom']." ".$L['adress'].$L['class'];
    }
?>