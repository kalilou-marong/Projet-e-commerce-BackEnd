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


$sqlQuery = 'SELECT * FROM utilisateur';
$recipesStatement = $mysqlClonnexion->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

foreach ($recipes as $recipe) {
?>
    <p><?php echo $recipe['author']; ?></p>
<?php
}
?>