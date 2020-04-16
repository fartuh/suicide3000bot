<?php

define('URL', "https://api.telegram.org/bot1142959133:AAHYYKP6PJ9nf_dnvzBYmO4RhMjSgFyI9k0/");
require('classes/Bot.php');

$json = file_get_contents('php://input');
$data = json_decode($json); 
$triggers = require('triggers.php');
$answers = require('answers.php');

$bot = new Bot(URL);
foreach($triggers as $trigger){
    if(isset($data->message->text) && $data->message->text != '/start' && $data->message->text == $trigger){
        $chat_id = $data->message->chat->id;
        $text = $answers[rand(0,3)];
        $bot->do('sendMessage', "chat_id=$chat_id&text=$text");
    }
}
