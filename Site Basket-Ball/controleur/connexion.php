<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "modele/authentification.inc.php";

// recuperation des donnees GET, POST, et SESSION
if (!isset($_POST["mailU"]) || !isset($_POST["mdpU"])) {
    // on affiche le formulaire de connexion
    $titre = "authentification";
    include "vue/entete.html.php";
    include "vue/vueAuthentification.php";
    include "vue/pied.html.php";
} else {

    $mailU = $_POST["mailU"];
    $mdpU = $_POST["mdpU"];

    loginArbitre($mailU, $mdpU);

    if (isLoggedOnArbitre()) {
        $titre = "confirmation";
        include "vue/vueHello.php";
    } else {
        $titre = "authentification";
        include "vue/entete.html.php";
        include "vue/vueAuthentification.php";
        include "vue/pied.html.php";
    }
}
