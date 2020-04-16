<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('TOKEN', "1142959133:AAHYYKP6PJ9nf_dnvzBYmO4RhMjSgFyI9k0");
define('URL', "https://api.telegram.org/bot1142959133:AAHYYKP6PJ9nf_dnvzBYmO4RhMjSgFyI9k0/");

$json = file_get_contents('php://input');
$data = json_decode($json);

$bot = new Bot(URL);

if(isset($data->message->text) && $data->message->text != '/start'){
    $bot->do('SendMessage')
}
