<?php

use Core\Router\Concrete\Route\Route as Route;
use Core\Router\Concrete\Router\Router as Router;
include_once "./Router/Virtual/IRouter.php";
include_once "./Router/Virtual/IRoute.php";
include_once "./Router/Concrete/Router.php";
include_once "./Router/Concrete/Route.php";

$adminRouter = new Router();

$loginRoute = new Route("GET", "/api/v1/admin/login", function(){echo "endpoint running"; http_response_code(200);});
$loginRoute->AddMiddleware(function(){echo "first middleware";});
$loginRoute->RegisterToRouter($adminRouter);


$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
if(isset($url))
{
    $method_name = $_SERVER["REQUEST_METHOD"];
    $adminRouter->HandleRequest($method_name, $url);
}
