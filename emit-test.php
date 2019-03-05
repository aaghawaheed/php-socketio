<?php
include 'vendor/autoload.php';

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;


$version = new Version2X('http://localhost:3000');

$client = new Client($version);
$client->initialize();
$client->emit('new-event', ['Hello' => 'Hello']);
$client->close();