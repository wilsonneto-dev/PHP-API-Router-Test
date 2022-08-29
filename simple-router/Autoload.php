<?php

spl_autoload_register(function ($className) {
    if (file_exists('simple-router/' . $className . '.php')) 
        require_once 'simple-router/' . $className . '.php'; 
});

?>