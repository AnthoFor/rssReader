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
    
    var_dump($rssFeedTennis);
    die;
    foreach ($sportNews->channel->item as $value) {
        echo "<h1>$value->title</h1>";
        echo "<p>$value->description</p>";
    }

    include(__DIR__.'/../views/header.php');
    include(__DIR__.'/../views/pages.php');
    include(__DIR__.'/../views/footer.php');
?>