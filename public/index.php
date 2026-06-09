<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$yamlFilePath = dirname(__DIR__) . '/data/cv.yaml';
$data = Yaml::parseFile($yamlFilePath);

$loader = new FilesystemLoader(dirname(__DIR__) . '/templates');
$twig = new Environment($loader, [
    'cache' => false,
    'debug' => true,
]);

echo $twig->render('cv/index.html.twig', $data);