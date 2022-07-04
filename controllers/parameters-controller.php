<?php
require_once(__DIR__.'/../controllers/global-controller.php');
if (!empty($_COOKIE['darkMode'])) {
    $darkMode = $_COOKIE['darkMode'];
} else {
    $darkMode = NULL;
}

$errorMsg[] = '';

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
        setcookie('categories', serialize($categories), time() + (60*60*24*30));
    } elseif (!$categories) {
        $errorMsg["categories"] = 'Merci de séléctionner une catégorie parmi celles proposées';
    }

    
    // Choix utilisateur d'articles à afficher sur la page
    $newsDisplay = intval(filter_input(INPUT_POST, 'newsDisplay', FILTER_SANITIZE_NUMBER_INT));
    if ($newsDisplay != 6 && $newsDisplay != 9 && $newsDisplay != 12) {
        $errorMsgnewsDisplay["newsDisplay"] = 'Merci de choisir parmi les options proposées';
    } else {
        setcookie('newsDisplay', $newsDisplay, time() + (60*60*24*30));
    }
    header("Refresh: 0 url=pages-controller.php");




//     // un peu de UX pour les radios
//     function newsDisplay() {
//         if (isset($_POST['newsDisplay'])) {
//             $displayNews = $_POST['newsDisplay'];
//             if ($displayNews == 6) {
//                 return '6';
//             } elseif ($displayNews == 9) {
//                 return '9';
//             } elseif ($displayNews == 12) {
//                 return '12';
//             }
//         } else {
//             return '';
//         }
// }

//     // fonction pour la prise en compte des paramètres de l'utilisateur
//     function saveSettings() {
//         if (isset($_POST['submit']) && empty($errorMsg)) {
//             return 'Paramètres enregistrés';
//         }
//     }

    // header("Refresh:0");
}


include(__DIR__ . '/../views/header.php');
include(__DIR__ . '/../views/parameters.php');
include(__DIR__ . '/../views/footer.php');
?>