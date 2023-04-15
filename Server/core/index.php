<?php
include './router/virtual/IRouter.php';
include './router/virtual/IRoute.php';
include './utils/HTTP/Request.php';
include './utils/HTTP/Response.php';
include './router/concrete/Router.php';
include './router/concrete/Route.php';






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
    $adminRouter->HandleRequest($_SERVER['REQUEST_METHOD'], $url);
}

