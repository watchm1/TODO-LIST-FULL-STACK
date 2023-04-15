<?php

namespace Core\Utils\HTTP\Request;

class Request {
    private array $data = array();
    private array $cookies = array();
    public function __construct()
    {
        $this->data['method'] = $_SERVER['REQUEST_METHOD'];
        $this->data['path'] = parse_url($_SERVER['REQUEST_URI']);
        $this->data['query'] = $_GET;
        $this->data['body'] = json_decode(file_get_contents('php://input'), true);
        $this->cookies = $_COOKIE;
    }

    /**
     * Getting Request method
     */
    public function GetMethod()
    {
        // Returning method name
        return $this->data['method'];
    }

    /**
     * Returning request uri
     */
    public function GetPath()
    {
        return $this->data['path'];
    }

    /**
     * returning request query
     */
    public function GetQuery()
    {
        return $this->data['query'];
    }
    public function GetCookie($name)
    {
       if(isset($this->cookies[$name]))
       {
           return $this->cookies[$name];
       }
       return null;
    }
    /**
     * Returning request body
     */
    public function GetBody()
    {
        return $this->data['body'];
    }
}