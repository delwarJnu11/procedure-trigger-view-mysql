<?php
include_once "routes.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function controll_routes($routes, $uri)
{
    include_once __DIR__."/views/shared/header.view.php";
    if(array_key_exists($uri, $routes)){
        include_once $routes[$uri];
    }else{
        echo "Page Not Found!";
    }
    include_once __DIR__."/views/shared/footer.view.php";
}
controll_routes($routes, $uri);