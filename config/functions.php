<?php
function defaultRSSArray($arrayFoot, $arrayBasket, $arrayTennis) {
    $defautArray = array();
    for ($i=0; $i < 6; $i++) {
        array_push($defautArray,[$arrayFoot[$i][0], $arrayFoot[$i][1], $arrayFoot[$i][2], $arrayFoot[$i][3]]);
        array_push($defautArray,[$arrayBasket[$i][0], $arrayBasket[$i][1], $arrayBasket[$i][2], $arrayBasket[$i][3]]); 
        array_push($defautArray,[$arrayTennis[$i][0], $arrayTennis[$i][1], $arrayTennis[$i][2], $arrayTennis[$i][3]]);
    }
    return $defautArray;
}

/**
 * [Description for customizedRSSArray]
 *
 * @param int $nbFluxToShowTotal $nbFluxToShowTotal fait référence au nombre de flux souhaité (6, 9 ou 12)
 * @param int $nbTheme $nbTheme fait référence au nombre de theme voulu par l'utilisateur ( 2 ou 3)
 * @param int $preference1 fait référence au type de flux (basket 0, foot 1, rugby 2, tennis 3, global 4)
 * @param int $preference2 fait référence au type de flux (basket 0, foot 1, rugby 2, tennis 3, global 4)
 * @param int $preference3 fait référence au type de flux (basket 0, foot 1, rugby 2, tennis 3, global 4)
 * 
 * @return [type]
 * 
 */

function customizedRSSArray ($megaArray, $nbFluxToShowTotal, int $nbTheme, int $preference1, int $preference2, int $preference3 = NULL) {
    //$nbTheme = nombre de theme choisi par l'utilisateur, 2 ou 3. ( si il en selectionne 1, go go fonction onlyOneFlux)
    //si 2 themes avec 9 flux, bah ca fera 4 et 4.
    $nbFluxUnity = round($nbFluxToShowTotal / $nbTheme, 0, PHP_ROUND_HALF_UP); 
    $customizedArray = array(); 
        //preference 1
    for ($i=0; $i < $nbFluxUnity; $i++) { 
        if ($preference1 == 0) {
            array_push($customizedArray, [$megaArray[0][$i][0], $megaArray[0][$i][1], $megaArray[0][$i][2], $megaArray[0][$i][3]]);
        } elseif ($preference1 == 1) {
            array_push($customizedArray, [$megaArray[1][$i][0], $megaArray[1][$i][1], $megaArray[1][$i][2], $megaArray[1][$i][3]]);
        } elseif ($preference1 == 2) {
            array_push($customizedArray, [$megaArray[2][$i][0], $megaArray[2][$i][1], $megaArray[2][$i][2], $megaArray[2][$i][3]]);
        } elseif ($preference1 == 3) {
            array_push($customizedArray, [$megaArray[3][$i][0], $megaArray[3][$i][1], $megaArray[3][$i][2], $megaArray[3][$i][3]]);
        } elseif ($preference1 == 4) {
            array_push($customizedArray, [$megaArray[4][$i][0], $megaArray[4][$i][1], $megaArray[4][$i][2], $megaArray[4][$i][3]]);
        }
    }
    //préférence 2
    for ($i=0; $i < $nbFluxUnity; $i++) {
        if ($preference2 == 0) {
            array_push($customizedArray, [$megaArray[0][$i][0], $megaArray[0][$i][1], $megaArray[0][$i][2], $megaArray[0][$i][3]]);
        } elseif ($preference2 == 1) {
            array_push($customizedArray, [$megaArray[1][$i][0], $megaArray[1][$i][1], $megaArray[1][$i][2], $megaArray[1][$i][3]]);
        } elseif ($preference2 == 2) {
            array_push($customizedArray, [$megaArray[2][$i][0], $megaArray[2][$i][1], $megaArray[2][$i][2], $megaArray[2][$i][3]]);
        } elseif ($preference2 == 3) {
            array_push($customizedArray, [$megaArray[3][$i][0], $megaArray[3][$i][1], $megaArray[3][$i][2], $megaArray[3][$i][3]]);
        } elseif ($preference2 == 4) {
            array_push($customizedArray, [$megaArray[4][$i][0], $megaArray[4][$i][1], $megaArray[4][$i][2], $megaArray[4][$i][3]]);
        }
    }
    //preference 3
    for ($i=0; $i < $nbFluxUnity; $i++) {
        if (!empty($preference3)) {
            if ($preference3 == 0) {
                array_push($customizedArray, [$megaArray[0][$i][0], $megaArray[0][$i][1], $megaArray[0][$i][2], $megaArray[0][$i][3]]);
            } elseif ($preference3 == 1) {
                array_push($customizedArray, [$megaArray[1][$i][0], $megaArray[1][$i][1], $megaArray[1][$i][2], $megaArray[1][$i][3]]);
            } elseif ($preference3 == 2) {
                array_push($customizedArray, [$megaArray[2][$i][0], $megaArray[2][$i][1], $megaArray[2][$i][2], $megaArray[2][$i][3]]);
            } elseif ($preference3 == 3) {
                array_push($customizedArray, [$megaArray[3][$i][0], $megaArray[3][$i][1], $megaArray[3][$i][2], $megaArray[3][$i][3]]);
            } elseif ($preference3 == 4) {
                array_push($customizedArray, [$megaArray[4][$i][0], $megaArray[4][$i][1], $megaArray[4][$i][2], $megaArray[4][$i][3]]);
            }
        }
    }
    return $customizedArray;
}

/**
 * [Description for onlyOneFlux]
 *
 * @param string $categorie
 * 
 * @return array
 * 
 */
function onlyOneFlux(string $categorie, $megaArray) {
    //En fonction de quel sport l'utilisateur choisi, faire un foreach de la $var concernée ($rssFeedBasket,$rssFeedFoot, $rssFeedRugby, $rssFeedTennis, ...)
    $oneCatArray = array();
    if ($categorie == 'foot') {
        for ($i=0; $i < 12; $i++) {   
            array_push($oneCatArray,[$megaArray[1][$i][0], $megaArray[1][$i][1], $megaArray[1][$i][2], $megaArray[1][$i][3]]);
        }
    } elseif ($categorie == 'basket') {
        for ($i=0; $i < 12; $i++) {  
            array_push($oneCatArray,[$megaArray[0][$i][0], $megaArray[0][$i][1], $megaArray[0][$i][2], $megaArray[0][$i][3]]);          
        }
    } elseif ($categorie == 'rugby') {
        for ($i=0; $i < 12; $i++) {       
            array_push($oneCatArray,[$megaArray[2][$i][0], $megaArray[2][$i][1], $megaArray[2][$i][2], $megaArray[2][$i][3]]);
        }
    } elseif ($categorie == 'tennis') {
        for ($i=0; $i < 12; $i++) {      
            array_push($oneCatArray,[$megaArray[3][$i][0], $megaArray[3][$i][1], $megaArray[3][$i][2], $megaArray[3][$i][3]]);       
        }
    } elseif ($categorie == 'global') {
        for ($i=0; $i < 12; $i++) {    
            array_push($oneCatArray,[$megaArray[4][$i][0], $megaArray[4][$i][1], $megaArray[4][$i][2], $megaArray[4][$i][3]]);
        }
    }
    return $oneCatArray;
}
?>