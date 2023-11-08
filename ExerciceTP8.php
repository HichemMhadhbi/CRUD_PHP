<?php
    try{
        $bdd = new PDO ('mysql: host = localhost; dbname = biblio', 'root', '');
        echo "Connexion etablie avec succes"; echo "<br>";
    }

    catch (Exception $e) {
        die ("erreur : " .$e->getMessage());
    }

    
?>