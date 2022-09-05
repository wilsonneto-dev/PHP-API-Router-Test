<?php 

class Request {
    public ?Array $parameters = null;
    public ?Array $query = null;
    public ?Array $body = null;
    public string $route = "";
    public string $method = "";
}