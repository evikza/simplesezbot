<?php

$botToken = "1167269062:AAHX7Nvh3SkhnRmEf-69IPN_DAN-9d1D5o0"; 

$website = "https://api.telegram.org/bot" . $botToken; 

$update = json_decode(file_get_contents("php://input"), TRUE);

$chatId = $update["message"]["chat"]["id"];
// $message = $update["message"]["text"];

file_get_contents($website . '/sendMessage?chat_id=' . $chatId . '&text=' . json_encode($update));
