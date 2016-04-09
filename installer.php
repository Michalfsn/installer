#! /usr/bin/env php

<?php

use Acme\SayHelloCommand;
use Acme\NewCommand;
use Acme\RenderCommand;
use Symfony\Component\Console\Application;
use GuzzleHttp\Client;

require 'vendor/autoload.php';

$app = new Application('Laracast Demo', '1.0');

$app->add(new SayHelloCommand);

$app->add(new NewCommand(new Client));

$app->add(new RenderCommand);

$app->run();

