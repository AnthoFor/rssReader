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
//Si get['cat'] est pas vide, alors affiche le mono tableau
if (!empty($_GET['cat'])) {
    $cat = $_GET['cat'];
    $oneCat = onlyOneFlux($cat, $megaArray);
    foreach ($oneCat as $key => $value) {
        echo '<p>'.$value[0].'</p>';
        echo '<p>'.$value[1].'</p>';
        echo '<p>'.$value[2].'</p>';
        echo '<p>'.$value[3].'</p>';
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