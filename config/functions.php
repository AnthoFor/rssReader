<?php
function defaultRSSArray() {
    //faire un tableau qui regroupe 2 flux global, 2 flux tennis et 2 flux foot et retourne ces flux sous forme de tableau.
    //les flux doivent comporter le titre, la date, la description avec l'image ainsi que l'url pour rediriger vers la news.
    
    //{
    //['titre', 'date', 'description', 'url'],
    //['titre2', 'date2', 'description2', 'url2']
    //}
    
    
    
    return;
}

/**
 * [Description for customizedRSSArray]
 *
 * @param object $preference1 fait référence au type de flux (global, foot, basket, tennis)
 * @param object $preference2 fait référence au type de flux (global, foot, basket, tennis)
 * @param object $preference3 fait référence au type de flux (global, foot, basket, tennis)
 * @param int $nbFluxToShow fait référence au type de flux (6, 9 ou 12)
 * 
 * @return array
 * 
 */
function customizedRSSArray(object $preference1, object $preference2, object $preference3, int $nbFluxToShow) {
    //faire un tableau qui regroupe les flux en fonction des préférences utilisateurs ( type de flux et nombre)
    //Les flux doivent contenir comme pour le tableau par défaut 4 éléments : le titre, la date, la description ( qui inclu l'image) ainsi que l'url.
    
    //{
    //['titre', 'date', 'description', 'url'],
    //['titre2', 'date2', 'description2', 'url2']
    
    //}





    return;
}


/**
 * [Description for onlyOneFlux]
 *
 * @param string $categorie
 * 
 * @return array
 * 
 */
function onlyOneFlux(string $categorie) {
    //En fonction de quel sport l'utilisateur choisi, faire un foreach de la $var concernée ($rssFeedBasket,$rssFeedFoot, $rssFeedRugby, $rssFeedTennis, ...)




    

    return;
}

?>