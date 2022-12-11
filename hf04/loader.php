<?php

spl_autoload_register(function ($cN) {
    $file = $cN . ".php";
    if (file_exists($file)) {
        include $file;
    }
})

?>