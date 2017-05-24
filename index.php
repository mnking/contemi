<?php

require 'vendor/autoload.php';

function dd($t)
{
    echo '<pre>';
    print_r($t);
    echo '</pre>';
    exit;
}


$translator = new \Symfony\Component\Translation\Translator('fr_FR');
$translator->addLoader('array', new \Symfony\Component\Translation\Loader\ArrayLoader());
$translator->addResource('array', array(
    'Hello World!' => 'Bonjour',
    'Hello!' => 'asdsa',
), 'fr_FR');

echo $translator->trans('Hello World!');
