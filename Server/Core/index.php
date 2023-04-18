<?php

include_once './Router/Concrete/Router.php';
include_once './Router/Concrete/Route.php';
include_once './Utils/HTTP/Request.php';
include_once './Utils/HTTP/Response.php';
include_once './Middlewares/BaseMiddleware.php';
include_once './Config/EnvConfiguration.php';
include_once './Controllers/BaseController.php';
include_once './Utils/Constants/globals.php';
use Core\Router\Concrete\Route as Route;
use Core\Router\Concrete\Router as Router;
use Core\Utils\HTTP\Request as Request;
use Core\Utils\HTTP\Response as Response;
use Core\Utils\Constants as constants;
/*
function handle():void
{
    $request = new Request();
    $response = new Response();
    $response->SetData(array(
        'message' => 'success',
        'status-code' => 200,

    ))->SetStatus(200)->SetHeader(array(
        'Content-Type' => 'application/json',
        'Access-Control-Allow-Origin' => '*',
    ))->Send();
}

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if(isset($url))
{


    $adminRouter = new Router();
    $loginRoute = new Route("POST", "/api/v1/admin/login", 'handle');
    $loginRoute->AddMiddleware(function() {});
    $loginRoute->RegisterToRouter($adminRouter);
    //$adminRouter->HandleRequest($_SERVER['REQUEST_METHOD'], $url);
}
*/

