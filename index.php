<?php

require __DIR__ . '/src/api/templates/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__. '/src/api/templates/');
$twig = new Environment($loader);

echo $twig->render('index.twig');

?>