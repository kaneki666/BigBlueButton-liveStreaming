<?php

if(!empty($_POST)) {
    $message = $_POST['message'];
    $redis = new Redis();
    $redis->pconnect('redis'); // REDIS_HOST hast to be the same as in BBB_REDIS_HOST
    $redis->publish('chat', $message); // REDIS_CHANNEL hast to be the same as in BBB_REDIS_CHANNEL
    echo "Message published\n";
