<?php
require_once 'config.php';

if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['adresse']) && isset($_POST['ville']) && isset($_POST['cp']) && isset($_POST['pseudo'])) {

    // mise en place des specialchars convertissants des caractères spéciaux en php 
    // Transmission des infos du formulaire de manière masquée avec $_POST
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $ville = htmlspecialchars($_POST['ville']);
    $cp = htmlspecialchars($_POST['cp']);
    // $type = htmlspecialchars($_POST['type']);
    $pseudo = htmlspecialchars($_POST['pseudo']);



    $option = ['cost' => 12,];
    // UTILISATION DE SYSTEME DE HACHAGE POUR CRYPTER LE MOT DE PASSE 
    $hash = password_hash($mdp, PASSWORD_BCRYPT, $option);


    // prepare la requete 
    $requete = $dbname->prepare('SELECT prenom,nom,email,mdp,adresse,ville,cp,type,pseudo FROM users WHERE users = :email');
    //execute la requete 
    $requete->execute(['email' => $email]);

    //transforme le retour en tableau 
    $reponse = $requete->fetchAll();
    //verifiation du mot de pase en variable 
    $verifUser = count($reponse);

    if ($verifUser == 0) {
        // verification si l'utilisateur existe 
        //Utilisation de la requete INSERT afin de récuprer les données remplis precedemment

        $requeteInscription = "INSERT INTO users(prenom,nom,email,mdp,adresse,ville,cp,type,pseudo) VALUES (:prenom, :nom, :email, :mdp, :adresse, :ville, :cp, DEFAULT, :pseudo)";
        // $array = array(
        //     'nom' => $nom,
        //     'prenom' => $prenom,
        //     'adresse' => $adresse,
        //     'cp' => $cp,
        //     'ville' => $ville,
        //     'mail' => $mail,
        //     'pseudo' => $pseudo,
        //     'mdp' => $hash,
        //     'status' => $status



        // );
        //TEST 
        $requete = $dbname->prepare($requeteInscription);

        // SI SUCCES ALORS LOGIN 
        $_SESSION['login'] = 1;
        $requete->execute([
            'prenom' => $prenom,
            'nom' => $nom,
            'email' => $email,
            'mdp' => $hash,
            'adresse' => $adresse,
            'ville' => $ville,
            'cp' => $cp,
            // 'type' => $type,
            'pseudo' => $pseudo
        ]);
        $test = $requete->errorInfo();
        header('location:connexion.php?succes');
    } else {
        // SI NON FAIL 
        $_SESSION['erreur'] = 2;
        header('location:inscription.php.?erreur3');
    }
}
