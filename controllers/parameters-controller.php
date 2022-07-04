<!-- Récupération des préférences users -->
<<<<<<< HEAD



























<!-- Gestion des cookiess -->
=======
>>>>>>> origin/retrieveData
<?php

if (!empty($_COOKIE['darkMode'])) {
    $darkMode = $_COOKIE['darkMode'];
} else {
    $darkMode = NULL;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $darkMode = intval(filter_input(INPUT_POST, 'darkMode', FILTER_SANITIZE_NUMBER_INT));
    if ($darkMode != 0 && $darkMode != 1) {
        $errorMsgDarkMode["darkMode"] = 'Erreur lors de la séléction du thème';
    } else {
        setcookie('darkMode', $darkMode, time() + (60*60*24*30));
    }

    $categories = filter_input(INPUT_POST, 'categories', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
    var_dump($categories);
    if(!empty($categories)) {
        setcookie('categories', serialize($categories), time() + (60*60*24*30));

    }
    // $categoriesArray = array();
    // if (count($categories) > 0 && count($categories) <= 3) {
    //     foreach ($categories as $categorie) {
    //         array_push($categoriesArray, $categories);
    //     }
    //     for ($i= 0; $i < count($categoriesArray); $i++) {
    //         setcookie($i, $categoriesArray[$i][1], time() + (60*60*24*30)); 
    //     }
    //     var_dump($categoriesArray);
    // } else {
    //     $errorMsgCategories["categories"] = 'Vous ne pouvez séléctionner que 3 catégories';
    // }

    $newsDisplay = intval(filter_input(INPUT_POST, 'newsDisplay', FILTER_SANITIZE_NUMBER_INT));
    if (is_numeric($newsDisplay)) {
        $resultNewsDisplay = filter_var($newsDisplay, FILTER_VALIDATE_INT);
        if (!$resultNewsDisplay) {
            $errorMsgNewsDisplay["newsDisplay"] = 'Merci de choisir uniquement une des propositions';
        }
    }
}
// Gestion des cookies


include(__DIR__ . '/../views/header.php');
include(__DIR__ . '/../views/parameters.php');
?>