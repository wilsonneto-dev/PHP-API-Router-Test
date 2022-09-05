<?php

class ClassesRoutesRegister
{
    public static function register(Router $router)
    {
        $router->get("classes/:id/details", function(Request $req, Response $res) {
            $res->response(Array("request" => (Array) $req));
        });

        $router->post("classes/:id/details", function(Request $req, Response $res) {
            $res->status(201)->response(Array("request" => (Array) $req));
        });
        
        $router->get("classes", function(Request $req, Response $res) {
            $res->response(Array("request" => (Array) $req));
        });
    }
}
