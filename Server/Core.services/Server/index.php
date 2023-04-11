<?php
use Base\Service\Router\Concrete\Route;
use Base\Service\Router\Concrete\Router;
$adminRouter = new Router();

$loginRoute = new Route("POST", "/api/v1/admin/login", function(){});
$loginRoute->AddMiddleware(function(){echo "first middleware";});
$loginRoute->RegisterToRouter($adminRouter);


$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
echo $url;