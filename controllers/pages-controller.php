<?php
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

    echo '<p>'.$arrayGlobal[0][0].'</p>';
    echo '<p>'.$arrayGlobal[0][1].'</p>';
    echo '<p>'.$arrayGlobal[0][2].'</p>';
    echo '<p>'.$arrayGlobal[0][3].'</p>';
    echo '<p>'.$arrayGlobal[1][0].'</p>';
    echo '<p>'.$arrayGlobal[1][1].'</p>';
    echo '<p>'.$arrayGlobal[1][2].'</p>';
    echo '<p>'.$arrayGlobal[1][3].'</p>';

    echo '<p>'.$arrayBasket[0][0].'</p>';
    echo '<p>'.$arrayBasket[0][1].'</p>';
    echo '<p>'.$arrayBasket[0][2].'</p>';
    echo '<p>'.$arrayBasket[0][3].'</p>';
    echo '<p>'.$arrayBasket[1][0].'</p>';
    echo '<p>'.$arrayBasket[1][1].'</p>';
    echo '<p>'.$arrayBasket[1][2].'</p>';
    echo '<p>'.$arrayBasket[1][3].'</p>';

    echo '<p>'.$arrayFoot[0][0].'</p>';
    echo '<p>'.$arrayFoot[0][1].'</p>';
    echo '<p>'.$arrayFoot[0][2].'</p>';
    echo '<p>'.$arrayFoot[0][3].'</p>';
    echo '<p>'.$arrayFoot[1][0].'</p>';
    echo '<p>'.$arrayFoot[1][1].'</p>';
    echo '<p>'.$arrayFoot[1][2].'</p>';
    echo '<p>'.$arrayFoot[1][3].'</p>';
    
    echo '<p>'.$arrayRugby[0][0].'</p>';
    echo '<p>'.$arrayRugby[0][1].'</p>';
    echo '<p>'.$arrayRugby[0][2].'</p>';
    echo '<p>'.$arrayRugby[0][3].'</p>';
    echo '<p>'.$arrayRugby[1][0].'</p>';
    echo '<p>'.$arrayRugby[1][1].'</p>';
    echo '<p>'.$arrayRugby[1][2].'</p>';
    echo '<p>'.$arrayRugby[1][3].'</p>';

    echo '<p>'.$arrayTennis[0][0].'</p>';
    echo '<p>'.$arrayTennis[0][1].'</p>';
    echo '<p>'.$arrayTennis[0][2].'</p>';
    echo '<p>'.$arrayTennis[0][3].'</p>';
    echo '<p>'.$arrayTennis[1][0].'</p>';
    echo '<p>'.$arrayTennis[1][1].'</p>';
    echo '<p>'.$arrayTennis[1][2].'</p>';
    echo '<p>'.$arrayTennis[1][3].'</p>';

    include(__DIR__.'/../views/header.php');
    include(__DIR__.'/../views/pages.php');
    include(__DIR__.'/../views/footer.php');
?>