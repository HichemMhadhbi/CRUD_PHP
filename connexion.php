<?php
    try{
        $bdd = new PDO ('mysql: host = localhost; dbname = biblio', 'root', '');
    }

    catch (Exception $e) {
        die ("erreur : " .$e->getMessage());
    }
?>