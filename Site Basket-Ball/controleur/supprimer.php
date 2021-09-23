<?php
include "./modele/bd.equipes.php";
// recuperation des donnees GET, POST, et SESSION
if (isset($_POST['supprimer'])) {
    $numEquipe = $_POST['numEquipe'];
    deleteEquipe($numEquipe);

    header('Location: ?action=equipes');
}



// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$Equipe = getEquipe();
$Club = getClub();
$Championnat = getChampionnat();


// traitement si necessaire des donnees recuperees

include "./vue/entete.html.php";
include "./vue/vueModifier.php";
include "./vue/pied.html.php";