<?php

$t = "1167269062:AAHX7Nvh3SkhnRmEf-69IPN_DAN-9d1D5o0"; 

// $website = "https://api.telegram.org/bot" . $botToken; 

// $update = file_get_contents($website . "/getUpdates"); 
// $updateArray = json_decode($update, TRUE); 

// $chatId = $updateArray["result"][0]["message"]["chat"]["id"]; 

$response = file_get_contents('https://api.telegram.org/bot/' . $t . '/getUpdates');

echo json_encode($response, 0);
