<?php

require __DIR__ . '/vendor/autoload.php';

\Ratchet\Client\connect('ws://localhost:8080/demo-1')->then(function($conn) {
    $conn->on('message', function($msg) use ($conn) {
        echo "Received: {$msg}\n";
        $conn->close();
    });
    $conn->send('{"data":"HelloWorld", "id": 1}');
}, function ($e) {
    echo "Could not connect: {$e->getMessage()}\n";
});
