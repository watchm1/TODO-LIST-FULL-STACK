<?php


class Response {
    private array $data = array();
    private int $status = 200;
    private array $responseHeaders = array();
    private array $cookies = array();

    public function SetData(array $data = array()):Response {
        $this->data = $data;
        return $this;
    }
    public function SetHeader($headers):Response {
        $this->responseHeaders = $headers;
        return $this;
    }
    public function SetStatus($status): Response {
        $this->status = $status;
        return $this;
    }
    public function SetCookie($name, $value="", $expires_or_options=0, $path="", $domain="", $secure=false, $httponly=false):void
    {
        $this->cookies[] = array(
            'name' => $name,
            'value' => $value,
            'maxAge' => $expires_or_options,
            'path' => $path,
            'domain' => $domain,
            'secure' => $secure,
            'httpOnly' => $httponly
        );
    }
    public function Send():void
    {

        http_response_code($this->status);

        foreach ($this->responseHeaders as $name => $value)
        {
            header("$name: $value");
        }
        foreach ($this->cookies as $cookie)
        {
            setcookie(
                $cookie['name'],
                $cookie['value'],
                time() + $cookie['maxAge'],
                $cookie['path'],
                $cookie['secure'],
                $cookie['httpOnly']
            );
        }
        echo json_encode($this->data);
    }
}