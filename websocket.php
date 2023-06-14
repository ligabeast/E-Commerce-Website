<?php

use Illuminate\Session\SessionManager;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

// Make sure composer dependencies have been installed
require __DIR__ . '/vendor/autoload.php';

/**
 * chat.php
 * Send any incoming messages to all connected clients (except sender)
 */


class MyChat implements MessageComponentInterface {
    protected $clients;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
        echo "Starting Websocket\n";
    }

    public function onOpen(ConnectionInterface $conn) {
        $this->clients->attach($conn);
        // Create a new session handler for this client
        $session = (new SessionManager(App::getInstance()))->driver();
        // Get the cookies
        $cookies = $conn->WebSocket->request->getCookies();
        // Get the laravel's one
        $laravelCookie = urldecode($cookies[Config::get('session.cookie')]);
        // get the user session id from it
        $idSession = Crypt::decrypt($laravelCookie);
        // Set the session id to the session handler
        $session->setId($idSession);
        // Bind the session handler to the client connection
        $conn->session = $session;
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        echo "Received Message:".$msg."\n";
        // start the session when the user send a message
        // (refreshing it to be sure that we have access to the current state of the session)
        $from->session->send('hello');
    }

    public function onClose(ConnectionInterface $conn) {
        echo "Client leaved\n";
        $this->clients->detach($conn);
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        $conn->close();
    }
}

// Run the server application through the WebSocket protocol on port 8080
$app = new Ratchet\App('localhost', 8080);
$app->route('/demo-1', new MyChat, array('*'));
$app->route('/abalo', new MyChat, array('*'));
$app->run();
