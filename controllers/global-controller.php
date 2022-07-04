<?php
if (!empty($_COOKIE['darkMode'])) {
    $txtClass = 'text-light';
    $bgClass = "bg-dark";
    $btnClass = "bi bi-list text-light";
    $ballonClass = "balloonWhite";

} else {
    $txtClass = 'text-dark';
    $bgClass = "bg-light";
    $btnClass = "bi bi-list text-dark";
    $ballonClass = "ballonBlack";
}