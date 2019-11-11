<?php

require '../vendor/autoload.php';

$products = ['croissants', 'chocolatine', 'brioche', 'tresse', 'beignet'];

$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);

echo $twig->render('index.html.twig',['products' => $products]);