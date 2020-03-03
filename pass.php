<?php

use Symfony\Component\ErrorHandler\ErrorHandler;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\VarDumper\VarDumper;

require __DIR__ . '/vendor/autoload.php';

ErrorHandler::register();

$client = HttpClient::create();
$response = $client->request('HEAD', 'https://httpbin.org/status/400');

VarDumper::dump($response->getHeaders(false));
