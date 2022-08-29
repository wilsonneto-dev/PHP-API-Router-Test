<?php

class ClassesRoutesRegister
{
    public static function register(Router $router)
    {
        $router->get("classes", function() {
            return Array( "response" => "get no classes" );
        });
        
        $router->post("classes", function() {
            return Array( "response" => "post no classes" );
        });
    }
}
