<?php

require_once __DIR__.'/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/Templates');

$twig = new \Twig\Environment($loader);