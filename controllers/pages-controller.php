<?php
    require_once(__DIR__.'/../config/functions.php');
    //Sport global
    $rssFeedGlobal = new SimpleXMLElement(file_get_contents("https://rmcsport.bfmtv.com/rss/fil-sport/"));
    //RSS Basket
    $rssFeedBasket = new SimpleXMLElement(file_get_contents("https://rmcsport.bfmtv.com/rss/basket/"));
    //RSS football
    $rssFeedFoot = new SimpleXMLElement(file_get_contents("https://rmcsport.bfmtv.com/rss/football/"));
    //RSS Rugby
    $rssFeedRugby = new SimpleXMLElement(file_get_contents("https://rmcsport.bfmtv.com/rss/rugby/"));
    //RSS tennis
    $rssFeedTennis = new SimpleXMLElement(file_get_contents("https://rmcsport.bfmtv.com/rss/tennis/"));
    
    //Création des tableaux de data
    $arrayGlobal = array();
    $arrayBasket = array();
    $arrayFoot = array();
    $arrayRugby = array();
    $arrayTennis = array();
    //agrégation de toute les autres arrays dans un mega array
    $megaArray = array();

    foreach ($rssFeedGlobal->channel->item as $value) {
        array_push($arrayGlobal, [$value->pubDate, $value->title, $value->description, $value->link]);
    }
    foreach ($rssFeedBasket->channel->item as $value) {
        array_push($arrayBasket, [$value->pubDate, $value->title, $value->description, $value->link]);
    }
    foreach ($rssFeedFoot->channel->item as $value) {
        array_push($arrayFoot, [$value->pubDate, $value->title, $value->description, $value->link]);
    }
    foreach ($rssFeedRugby->channel->item as $value) {
        array_push($arrayRugby, [$value->pubDate, $value->title, $value->description, $value->link]);
    }
    foreach ($rssFeedTennis->channel->item as $value) {
        array_push($arrayTennis, [$value->pubDate, $value->title, $value->description, $value->link]);
    }
    array_push($megaArray, $arrayBasket, $arrayFoot, $arrayRugby, $arrayTennis, $arrayGlobal);

    $defautArray = defaultRSSArray($arrayFoot, $arrayBasket, $arrayTennis);
    
    foreach ($defautArray as $value) {
        echo '<p>'.$value[0].'</p>';
        echo '<p>'.$value[1].'</p>';
        echo '<p>'.$value[2].'</p>';
        echo '<p>'.$value[3].'</p>';
    }

    $cat = 'foot';
    $oneCat = onlyOneFlux($cat, $megaArray);
    // foreach ($oneCat as $key => $value) {
    //     echo '<p>'.$value[0].'</p>';
    //     echo '<p>'.$value[1].'</p>';
    //     echo '<p>'.$value[2].'</p>';
    //     echo '<p>'.$value[3].'</p>';
    // }

    $customizedArray = customizedRSSArray($megaArray, 12, 2, 0, 1);
    // foreach ($customizedArray as $key => $value) {
    //     echo '<p>'.$value[0].'</p>';
    //     echo '<p>'.$value[1].'</p>';
    //     echo '<p>'.$value[2].'</p>';
    //     echo '<p>'.$value[3].'</p>';
    // }

    include(__DIR__.'/../views/header.php');
    include(__DIR__.'/../views/home.php');
    include(__DIR__.'/../views/pages.php');

    include(__DIR__.'/../views/footer.php');
    
?>