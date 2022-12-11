<?php

session_start();

if (!isset($_SESSION["random"])) {
    $_SESSION["random"] = rand(1, 10);
}

if (isset($_POST["talalgatas"])) {
    $fix = $_SESSION["random"];
    $try = $_POST["talalgatas"];
    if ($fix == $try) {
        echo "Eltalaltad. Új véletlenszerű szám legenerálódott.";
        $_SESSION["random"] = rand(1, 10);
    }
    else if ($try < $fix) {
        echo "Ennél nagyobb";
    }
    else {
        echo "Ennél kisebb";
    }
}

?>