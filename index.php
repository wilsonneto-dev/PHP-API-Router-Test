<?php

require_once "./simple-router/Autoload.php";
require_once "./modules/classes/api/classes-routes-register.php";

$classesApiRouter = new Router();
ClassesRoutesRegister::register($classesApiRouter);

$classesApiRouter->route($_GET["path"]);

?>