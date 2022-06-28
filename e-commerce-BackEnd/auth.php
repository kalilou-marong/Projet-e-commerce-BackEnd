<?php

function connexion(){
    try{
        $mysqlConnexion = new PDO(
            'mysql:host=localhost;dbname=e-commerce;charset-utf8mb4' ,
            'root' ,
            'bakalil'
);
    } catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
}
?>