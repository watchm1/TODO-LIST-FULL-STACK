<?php
include './router/virtual/IRouter.php';
include './router/virtual/IRoute.php';
include './utils/HTTP/Request.php';
include './utils/HTTP/Response.php';
include './router/concrete/Router.php';
include './router/concrete/Route.php';






function handle()
{
    $request = new Request();
    $response = new Response();
    $response->SetData(json_encode($request->GetBody()))->SetHeader(array('Content-Type' => 'application/json'))->SetStatus(200)->Send();
}
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if(isset($url))
{

    $adminRouter = new Router();
    $loginRoute = new Route("POST", "/api/v1/admin/login", function(){echo "valid function";});
    $loginRoute->AddMiddleware(function() {});
    $loginRoute->RegisterToRouter($adminRouter);
    $adminRouter->HandleRequest($_SERVER['REQUEST_METHOD'], $url);
}

