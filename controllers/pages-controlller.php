<?php
    $rssfeed = file_get_contents("https://rmcsport.bfmtv.com/rss/fil-sport/");  
    $sportNews = new SimpleXMLElement($rssfeed);
    var_dump($sportNews);
    die;
    foreach ($sportNews->channel->item as $value) {
        echo "<h1>$value->title</h1>";
        echo "<p>$value->description</p>";
    }
?>