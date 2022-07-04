<?php
if (!empty($_COOKIE['darkMode'])) {
    $txtClass = 'text-light';
    $bgClass = "bg-dark";
} else {
    $txtClass = 'text-dark';
    $bgClass = "bg-light";
}