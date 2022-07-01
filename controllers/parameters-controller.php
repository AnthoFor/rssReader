<!-- Récupération des préférences users -->

<!-- Gestion des cookiess -->
<?php

$checkBoxArray = array();
if (!empty($_POST['idInput'])) {
    $checkBoxArray = array_push($_POST['idInput']);

    setcookie('id', $idUser, time() + (60*60*24*30), "/"); // 30 jours
    setcookie('pw', $pwUser, time() + (60*60*24*30), "/");
}
?>