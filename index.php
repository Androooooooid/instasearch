<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'compilation_cache',
]);
$template = $twig->load('index.html');

echo $template->render(array());

$media = $instagram->getMediaById('1270593720437182847');

?>