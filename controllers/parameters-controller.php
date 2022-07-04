<!-- Récupération des préférences users -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $darkMode = filter_input(INPUT_GET, 'darkMode', FILTER_SANITIZE_NUMBER_INT);
    if (is_numeric($darkMode)) {
        $resultDarkMode = filter_var($darkMode, FILTER_VALIDATE_BOOLEAN);
        if (!$resultDarkMode) {
            $errorMsg["darkMode"] = 'Erreur de thème';
        }
    }
    $categories = array();

    (!empty($_GET['generalNews'])) ? array_push($categories, 'Actualités générales') : '';
    (!empty($_GET['football'])) ? array_push($categories, 'Football') : '';
    (!empty($_GET['tennis'])) ? array_push($categories, 'Tennis') : '';
    (!empty($_GET['rugby'])) ? array_push($categories, 'Rugby') : '';
    (!empty($_GET['basket'])) ? array_push($categories, 'Basket') : '';

    $newsDisplay = intval(filter_input(INPUT_GET, 'newsDisplay', FILTER_SANITIZE_NUMBER_INT));
    if (is_numeric($newsDisplay)) {
        $resultnewsDisplay = filter_var($newsDisplay, FILTER_VALIDATE_INT);
        if (!$resultNewsDisplay) {
            $errorMsg["newsDisplay"] = 'Merci de choisir uniquement une des propositions';
        }
    }
}

// <!-- Gestion des cookiess -->


// $checkBoxArray = array();
// if (!empty($_POST['idInput'])) {
//     $checkBoxArray = array_push($_POST['idInput']);

//     setcookie('id', $idUser, time() + (60*60*24*30), "/"); // 30 jours
//     setcookie('pw', $pwUser, time() + (60*60*24*30), "/");
// }
?>