<?php
namespace Core\Service\Server
{
    use InvalidArgumentException;

    class Server extends App
    {
        public function RunApp($routers = array())
        {
            if(is_array($routers))
            {
                foreach($routers as $router)
                {
                    if(!$router instanceof IRouter)
                    {
                        throw new InvalidArgumentException("Wrong type of route");
                        return;
                    }
                    else
                        continue;
                }
                $this->Routers = $routers;                
            }

            $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            if(isset($uri))
            {
                $method = $_SERVER['REQUEST_METHOD'];
                foreach($this->Routers as $router)
                {
                    $router->HandleRequest($method,$uri);
                }
            }
        } 
    }

}



