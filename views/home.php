<?php
$intermediate = json_decode($_COOKIE['categories']);
var_dump($intermediate);
die;
if (!empty($_COOKIE['categories'])) {   
    $preference1 = json_decode($_COOKIE['categories'][0]);
    $preference2 = json_decode($_COOKIE['categories'][1]);
    if (!empty(json_decode($_COOKIE['categories'][2]))) {
        $preference3 = json_decode($_COOKIE['categories'][2]);
    } else { $preference3 = null;}
    $customizedArray = customizedRSSArray($megaArray, 12, $preference1, $preference2, $preference3);
    // foreach ($customizedArray as $key => $value) {
    //     echo '<p>'.$value[0].'</p>';
    //     echo '<p>'.$value[1].'</p>';
    //     echo '<p>'.$value[2].'</p>';
    //     echo '<p>'.$value[3].'</p>';
    // }
}
//Si get est empty, gogo tableau par défaut ( foot + basket + tennis)
if (empty($_GET)) {
    $defautArray = defaultRSSArray($arrayFoot, $arrayBasket, $arrayTennis);
    foreach ($defautArray as $value) {
    ?>
                <div class="card mx-auto my-3 bg-white cardSizes">
                <div class="card-body">
                    <!-- Image -->
                    <p class="card-text removeTxt"><?=$value[2]?></p>
                    <!-- le Titre -->
                    <h5 class="card-title">
                    <?=$value[1] ?>
                    </h5>
                    <!-- la date -->
                    <p>
                    <?=$value[0]?>
                    </p>
                    <!-- quick description -->
                    <p class="card-text removeImg align-self-stretch"><?=$value[2]?></p>
                    <!-- le bouton avec le lien vers l'article -->
                    <div class="position-relative">
                        <a href="<?=$value[3]?>" class="btn btn-primary position-absolute bottom-0 end-0" target="_blank">Voir article</a>
                    </div>
                    
                </div>
            </div>
<?php
    }
}

//Si get['cat'] est pas vide ET valide alors affiche le mono tableau, sinon affiche le tableau par défaut
if (!empty($_GET['cat'])) {
    $cat = trim(filter_input(INPUT_GET, 'cat', FILTER_SANITIZE_SPECIAL_CHARS));
    if ($cat != 'global' && $cat != 'tennis' && $cat !='foot' && $cat !='basket' && $cat !='rugby' ){
        $defautArray = defaultRSSArray($arrayFoot, $arrayBasket, $arrayTennis);
        foreach ($defautArray as $value) {
        ?>
        <div class="card mx-auto my-3 bg-white cardSizes" >
    <div class="card-body">
        <!-- Image -->
        <p class="card-text removeTxt"><?=$value[2]?></p>
        <!-- le Titre -->
        <h5 class="card-title">
        <?=$value[1] ?>
        </h5>
        <!-- la date -->
        <p>
        <?=$value[0]?>
        </p>
        <!-- quick description -->
        <p class="card-text removeImg"><?=$value[2]?></p>
        <!-- le bouton avec le lien vers l'article -->
        <a href="<?=$value[3]?>" class="btn btn-primary" target="_blank">Voir article</a>
    </div>
</div><?php
        }
    } else {
        $oneCat = onlyOneFlux($cat, $megaArray);
        foreach ($oneCat as $key => $value) {
            ?>
        <div class="card mx-auto my-3 bg-white cardSizes">
        <div class="card-body">
        <!-- Image -->
        <p class="card-text removeTxt"><?=$value[2]?></p>
        <!-- le Titre -->
        <h5 class="card-title">
        <?=$value[1] ?>
        </h5>
        <!-- la date -->
        <p>
        <?=$value[0]?>
        </p>
        <!-- quick description -->
        <p class="card-text removeImg"><?=$value[2]?></p>
        <!-- le bouton avec le lien vers l'article -->
        <a href="<?=$value[3]?>" class="btn btn-primary" target="_blank">Voir article</a>
    </div>
</div><?php
        }
    }
}






?>