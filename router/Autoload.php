<?php

spl_autoload_register(function ($className) {
    if (file_exists('router/' . $className . '.php')) 
        require_once 'router/' . $className . '.php'; 
	if (file_exists('controllers/' . $className . '.php'))
        require_once 'controllers/' . $className . '.php'; 
});

?>