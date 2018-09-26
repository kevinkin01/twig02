<?php



require_once "./vendor/autoload.php";

// route content twig's files
$loader = new Twig_Loader_Filesystem('/path/to/templates');

// we create a twig Environment
$twig = new Twig_Environment($loader, array(
    //routing for cache
    'cache' => '/cache',
));

//controlelr
require_once "controller/publicController.php";