<?php
$categories = array();
//Tableau d'erreur
$errorMsg[] = '';

require_once(__DIR__.'/../controllers/global-controller.php');
//=========== Récupération des data des cookies si y en a =======================
    // ->> darkMode
if (!empty($_COOKIE['darkMode'])) {
    $darkMode = $_COOKIE['darkMode'];
} else {
    $darkMode = NULL;
}

// ->> Catégorie
if (!empty($_COOKIE['categories'])) {
    $intermediate = json_decode($_COOKIE['categories']);
    
    foreach ($intermediate as $value) {
        array_push($categories, $value);
    }
}

// ->> newsDisplay ( nombre de flux to draw)
if (!empty($_COOKIE['newsDisplay'])) {
    // var_dump($_COOKIE['newsDisplay']);
    if ($_COOKIE['newsDisplay'] == 6 || $_COOKIE['newsDisplay'] == 9 || $_COOKIE['newsDisplay'] == 12) {
        $newsDisplay = intval($_COOKIE['newsDisplay']);
    } else {
        $errorMsg["newsDisplay"] = 'Merci de choisir 6, 9 ou 12';
    }
}



// initiation méthode POST + cookies
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //Choix du thème light/dark mode
    $darkMode = intval(filter_input(INPUT_POST, 'darkMode', FILTER_SANITIZE_NUMBER_INT));
    if ($darkMode != 0 && $darkMode != 1) {
        $errorMsg["darkMode"] = 'Erreur lors de la séléction du thème';
    } else {
        setcookie('darkMode', $darkMode, time() + (60*60*24*30));
    }


    // choix des catégories à filter par l'utilisateur
    $categories = filter_input(INPUT_POST, 'categories', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
    if(!empty($categories)) {
        setcookie('categories', json_encode($categories), time() + (60*60*24*30));
    } elseif (!$categories) {
        $errorMsg["categories"] = 'Merci de séléctionner une catégorie parmi celles proposées';
    }

    
    // Choix utilisateur d'articles à afficher sur la page
    $newsDisplay = intval(filter_input(INPUT_POST, 'newsDisplay', FILTER_SANITIZE_NUMBER_INT));
    if ($newsDisplay != 6 && $newsDisplay != 9 && $newsDisplay != 12) {
        $errorMsg["newsDisplay"] = 'Merci de choisir parmi les options proposées';
    } else {
        setcookie('newsDisplay', $newsDisplay, time() + (60*60*24*30));
    }
    header("Refresh: 0 url=pages-controller.php");
}
include(__DIR__ . '/../views/header.php');
include(__DIR__ . '/../views/parameters.php');
include(__DIR__ . '/../views/footer.php');
?>