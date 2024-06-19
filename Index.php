<?php
include('views/includes/Header.php');
include('Autoload.php');
include('views/includes/NavBar.php');
$gestionPages = [
    'gestion-employes', 'employe-create', 'employe-edit', 'employe-delete',  'employe-profile', 'employe-change-password', 'employe-logout',
    'ptmo-ppmo', 
    'ptmo-activite1', 'ptmo-activite2', 'ptmo-activite3', 'ptmo-activite4', 'ptmo-activite5',
    'ppmo-activite1', 'ppmo-activite2',
    'ptmo-quiz', 'ptmo-activite1-quiz', 'ptmo-activite2-quiz', 'ptmo-activite3-quiz', 'ptmo-activite4-quiz', 'ptmo-activite5-quiz',
    'ppmo-activite1-quiz', 'ppmo-activite2-quiz',
    'gestion-quiz',
    'rams',
    'rams-activite1', 'rams-activite2', 'rams-activite3',
    'rams-activite1-quiz', 'rams-activite2-quiz', 'rams-activite3-quiz',
    'retours-consultans',
];
$visiteurPages = [

    'employe-login',

];
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "true") {
    if (isset($_GET['page'])) {
        if (in_array($_GET['page'], $gestionPages)) {
            include('views/' . $_GET['page'] . '.php');
        } else {
            include('views/includes/404.php');
        }
    }
} elseif (isset($_GET['page'])) {
    if (in_array($_GET['page'], $visiteurPages)) {
        include('views/' . $_GET['page'] . '.php');
    } else {
        include('views/includes/404.php');
    }
}
include('views/includes/Footer.php');
