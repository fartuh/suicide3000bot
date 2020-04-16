<?php

define('TOKEN', "1142959133:AAHYYKP6PJ9nf_dnvzBYmO4RhMjSgFyI9k0");
define('URL', "https://api.telegram.org/bot1142959133:AAHYYKP6PJ9nf_dnvzBYmO4RhMjSgFyI9k0/");

exit();
$json = file_get_contents('php://input');
$data = json_decode($json); 

$bot = new Bot(URL);

if(isset($data->message->text) && $data->message->text != '/start'){
    $chat_id = $data->message->chat->id;
    $bot->do('SendMessage', "chat_id=$chat_id&text=Пошел ты нахуй мусор");
}
