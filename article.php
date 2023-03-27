<?php
    $DB_NAME = 'articles';
    $DB_USER = 'root';
    $DB_PASS = 'ReyzekThunder2017';

    // connection à la Base De Données

    echo('
        <form action="" method="POST" class="form_articles">

            <input type="text" name="nom_article">

            <input type="text" name="contenu_article">

            <input type="submit" name="Ajoutez">

        </form>
    ');

    if(isset($_POST['nom_article']) && isset($_POST['contenue_article'])){

        $nom = $_POST['nom_article'];

        $contenue = $_POST['contenue_article'];

        echo "Mon article est : $nom $contenue";

    };

    $bdd = new PDO('mysql:host=localhost;dbname=' . $DB_NAME, $DB_USER, $DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    try {

        $article = $bdd->query('INSERT INTO article VALUE ("$nom", "$contenue")');

    } catch(Exception $e) {

        die('Erreur : ' .$e->getMessage());

    };
    
?>
