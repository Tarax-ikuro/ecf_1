<?php
session_start();
include("./lesboss/header.php");
require 'config.php';
include_once("./inscription_traitement.php");

?>
<!--  utilisation d'article> destiné à être distribué ou réutiliser de manière independante -->

<article class="mb-3" style="width: 18rem;">

    <!-- Ajout de h2 pour dimensionner une taille de police équivalent à un tritre  -->
    <h2>Inscription</h2>

    <!-- utilisation de l'élément form afin de créer un formulaire contenant des ibtréractions permettant à l'admin de fournir des informations -->


    <form action="inscription_traitement.php" method="POST">


        <!-- utilistion de <div> pour diviser du contenu -->
        <div>

            <!-- Utilisation d'<input> permettant à l'admin de saisr des données dpeendant de la valeur indiquée dans son attribut type  -->
            <input type="text" name="prenom" placeholder="Prenom" class="form-label">
            <div>
                <input type="text" name="nom" placeholder="Nom" class="form-label">
            </div>

            <input type="email" name="email" placeholder="Email" class="form-label">

            <input type="password" name="mdp" placeholder="Mot de passe" class="form-label">

            <input type="text" name="adresse" placeholder="Adresse" class="form-label">

            <input type="text" name="ville" placholder="ville" class="form-label">

            <input type="text" name="cp" placeholder="Code Postal" class="form-label">

            <!-- <input type="text" name="type" placeholder="Type" class="form-label"> -->

            <input type="text" name="pseudo" placeholder="Pseudo" class="form label">

            <!-- <input type="text" name="status" placeholder="Status"> -->

        </div>
        <!-- l'utilisation de <button> permettant de soumettre des formulaires n'importe ou ou n'importe ou dans le document -->

        <button class="submit" class="btn btn-outline-primary">Inscription</button>



    </form>
    </div>
</article>


<?php
include("./lesboss/footer.php");
?>