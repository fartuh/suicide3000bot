<?php

class Bot
{
    private url;

    public function __construct($url){
        $this->url = $url;
    }

    public function do($method, $params = ""){
        $result = file_get_contents($this->url . $method . "?" . $params);
        return $result;
    }
}
