<?php

$botToken = "1167269062:AAHX7Nvh3SkhnRmEf-69IPN_DAN-9d1D5o0"; 

$website = "https://api.telegram.org/bot" . $botToken; 

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);

var_dump($update);
