<?php

require_once "./simple-router/Autoload.php";
require_once "./modules/classes/api/classes-routes-register.php";

$router = new Router();
ClassesRoutesRegister::register($router);

$router->route($_GET["path"]);

?>
