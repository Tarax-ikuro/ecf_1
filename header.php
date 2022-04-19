<?php

var_dump($_SESSION);
echo '<p>test session</p>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://<?= $b ?>/police/DIdot/DidotHTFL06LightItal.ttf">
    <link rel="stylesheet" href="http://<?= $b ?>/police/Metropolis-Light/Metropolis-Light.otf">
    <link rel="stylesheet" href="http://<?= $b ?>/police/Roboto/Roboto-Light.ttf">
    <link rel="stylesheet" href="http://<?= $b ?>/police/Futura-Light.otf">


</head>

<body>

    <header>
        <!-- Mise en place d'une balise <nav> representant une section d'une page ayant des liens vers d'autres pages  -->
        <nav>
            <!--Mise en place de la balise <ul> representant une liste d'élements   -->
            <ul>
                <!-- Utilisation de la balsie <li> representant un élément daans une liste -->
                <li><a href="index.php">ACCUEIL</a> </li>
                <li><a href="list.php">NOUVEAUTÉS</a> </li>
                <li><a href="about.php">GENRE</a> </li>
                <li><a href="catalogue.php">CATALOGUE</a> </li>
                <li><a href="inscription.php">INSCRIPTION</a> </li>
                <li><a href=<li><a href="logout.php">DECONNEXION</a> </li>
                <li><a href="tableauAdmin.php?id=<?php echo $requeteShow['idArticle'] ?>">ADMINISTRATION</a> </li>
                <li><a href="monespace.php?id=<?php echo $requeteShow['idusers'] ?>">MON ESPACE</a> </li>
            </ul>
        </nav>

        <!-- IUtlsition de la balise <div> representant une separation de cdontenu  -->
        <div>
            <!-- Utilisation de la balise <img> permettant d'intégrer une image dans un document  avec sa source de diffusion  -->
            <img class="olive" src="blog/img/logo.png">
            <!-- Utilisation de la balise <h1> representant les elements de titres de sections   -->
            <h1>MEDIATHQUE
        </div>

        <hr>

    </header>
    <main>