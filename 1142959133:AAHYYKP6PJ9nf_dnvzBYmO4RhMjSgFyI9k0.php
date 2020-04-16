<?php

define('URL', "https://api.telegram.org/bot1142959133:AAHYYKP6PJ9nf_dnvzBYmO4RhMjSgFyI9k0/");
require('classes/Bot.php');

$json = file_get_contents('php://input');
$data = json_decode($json); 
$triggers = require('triggers.php');
$answers = require('answers.php');

$bot = new Bot(URL, $triggers, $answers);
//if(isset($data->message->text)){
    $trigger = $bot->checkTrigger($data->message->text);
    if($trigger){
        $text = $bot->getAnswer();

        $chat_id = $data->message->chat->id;
        $message_id = $data->message->message_id;
        $bot->do('sendMessage', "chat_id=$chat_id&text=$text&reply_to_message_id=$message_id");
    }
//}
