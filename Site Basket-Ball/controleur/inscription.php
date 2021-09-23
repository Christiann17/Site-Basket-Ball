<?php
// Chargement des fichiers modèles fonctions enregistrement_membre($pseudo, $pass_hash, $email) et check_bdd($pseudo)
include "modele/bd.utilisateur.inc.php";
include "modele/authentification.inc.php";
include "modele/bd.equipes.php";

$Equipe = getEquipe();
$Club = getClub();


if (isset($_POST['inscription'])) {
    $pass = $_POST['motdepasse'];
    $hash = password_hash($pass, PASSWORD_BCRYPT);
    insertArbitre(
        $_POST['nomArbitre'],
        $_POST['prenomArbitre'],
        $_POST['adrArbitre'],
        $_POST['cpArbitre'],
        $_POST['villeArbitre'],
        $_POST['datenaissArbitre'],
        $_POST['telfixeArbitre'],
        $_POST['telportArbitre'],
        $_POST['mail_arbitre'],
        $_POST['listeClub'],
        $_POST['listeEquipe'],
        $hash
    );
    include "vue/vueHello.php";
    // On rend inoffensif les données de l'utilisateur
} else {

    include "vue/entete.html.php";
    include "vue/vueInscription.php";
    include "vue/pied.html.php";
}