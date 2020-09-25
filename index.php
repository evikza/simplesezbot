<?php

$botToken = "1167269062:AAHX7Nvh3SkhnRmEf-69IPN_DAN-9d1D5o0"; 

$website = "https://api.telegram.org/bot" . $botToken; 

$update = file_get_contents('php://input');
$update = json_encode($update, TRUE);

$chatId = $update["result"][0]["message"]["chat"]["id"]; 

file_get_contents("https://api.telegram.org/bot1167269062:AAHX7Nvh3SkhnRmEf-69IPN_DAN-9d1D5o0/sendMessage?chat_id=179897095&text=dfg123" . $chatId ?? 'NOT');
