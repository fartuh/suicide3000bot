<?php

class Bot
{
    private $url, $triggers, $answers;

    function __construct($url, $triggers, $answers){
        $this->url = $url;
        $this->triggers = $triggers;
        $this->url = $answers;
    }

    public function do($method, $params = ""){
        $result = file_get_contents($this->url . $method . "?" . $params);
        return $result;
    }

    public function checkTrigger($message){
        foreach($this->triggers as $trigger){
            if($message == $trigger){
                return true;
            }    
        }
        return false;
    }

    public function getAnswer(){
        $maxKeyAnswers = max(array_keys($this->answers));
        $answer = $this->answers[rand(0, $maxKeyAnswers)];
        return $answer;
    }
}
