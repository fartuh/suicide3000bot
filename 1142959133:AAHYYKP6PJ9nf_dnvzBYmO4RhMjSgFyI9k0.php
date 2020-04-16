<?php

define('URL', "https://api.telegram.org/botHereIsTheToken/");
require('classes/Bot.php');

$json = file_get_contents('php://input');
$data = json_decode($json); 

$bot = new Bot(URL);
if(isset($data->message->text) && $data->message->text != '/start'){
    $chat_id = $data->message->chat->id;
    $bot->do('sendMessage', "chat_id=$chat_id&text=Привет");
}
