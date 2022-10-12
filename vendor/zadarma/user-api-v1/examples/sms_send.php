<?php

include_once 'include.php';
include_once '/PATH/TO/vendor/autoload.php'; 
$params = array(
    'number' => '+919320863928',
    'message' => 'Hello from Zadarma API',
    'caller_id' => '+16179821805'
);

$zd = new \Zadarma_API\Client(KEY, SECRET);
$answer = $zd->call('/v1/sms/send/', $params, 'post');

$answerObject = json_decode($answer);

if ($answerObject->status == 'success') {
    echo 'Messages: ' . $answerObject->messages . '<br/>';
    echo 'Cost: ' . $answerObject->cost . ' ' . $answerObject->currency .  '<br/>';
} else {
    echo $answerObject->message;
}
