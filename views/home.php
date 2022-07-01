<?php
//Si get est empty, gogo tableau par défaut ( foot + basket + tennis)
if (empty($_GET)) {
    $defautArray = defaultRSSArray($arrayFoot, $arrayBasket, $arrayTennis);
    foreach ($defautArray as $value) {
    echo '<p>'.$value[0].'</p>';
    echo '<p>'.$value[1].'</p>';
    echo '<p>'.$value[2].'</p>';
    echo '<p>'.$value[3].'</p>';
    }
}

//Si get['cat'] est pas vide ET valide alors affiche le mono tableau, sinon affiche le tableau par défaut
if (!empty($_GET['cat'])) {
    $cat = trim(filter_input(INPUT_GET, 'cat', FILTER_SANITIZE_SPECIAL_CHARS));
    if ($cat != 'global' && $cat != 'tennis' && $cat !='foot' && $cat !='basket' && $cat !='rugby' ){
        $defautArray = defaultRSSArray($arrayFoot, $arrayBasket, $arrayTennis);
        foreach ($defautArray as $value) {
        echo '<p>'.$value[0].'</p>';
        echo '<p>'.$value[1].'</p>';
        echo '<p>'.$value[2].'</p>';
        echo '<p>'.$value[3].'</p>';
        }
    } else {
        $oneCat = onlyOneFlux($cat, $megaArray);
        foreach ($oneCat as $key => $value) {
        echo '<p>'.$value[0].'</p>';
        echo '<p>'.$value[1].'</p>';
        echo '<p>'.$value[2].'</p>';
        echo '<p>'.$value[3].'</p>';
        }
    }

}

$customizedArray = customizedRSSArray($megaArray, 12, 2, 0, 1);
// foreach ($customizedArray as $key => $value) {
//     echo '<p>'.$value[0].'</p>';
//     echo '<p>'.$value[1].'</p>';
//     echo '<p>'.$value[2].'</p>';
//     echo '<p>'.$value[3].'</p>';
// }

?>