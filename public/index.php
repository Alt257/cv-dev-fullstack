<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use League\CommonMark\Environment\Environment as CommonMarkEnvironment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\MarkdownConverter;
use Symfony\Component\Yaml\Yaml;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\Markup;
use Twig\TwigFilter;

$yamlFilePath = dirname(__DIR__) . '/data/cv.yaml';
$data = Yaml::parseFile($yamlFilePath);

$loader = new FilesystemLoader(dirname(__DIR__) . '/templates');
$twig = new Environment($loader, [
    'cache' => false,
    'debug' => true,
]);

$commonMarkEnvironment = new CommonMarkEnvironment([
    'html_input' => 'escape',
    'allow_unsafe_links' => false,
    'renderer' => [
        'soft_break' => '<br />',
    ],
]);

$commonMarkEnvironment->addExtension(new CommonMarkCoreExtension());

$markdownConverter = new MarkdownConverter($commonMarkEnvironment);

$twig->addFilter(new TwigFilter('markdown', static function (?string $text) use ($markdownConverter): Markup {
    if ($text === null) {
        return new Markup('', 'UTF-8');
    }

    $html = $markdownConverter->convert($text)->getContent();

    return new Markup($html, 'UTF-8');
}));

echo $twig->render('cv/index.html.twig', $data);