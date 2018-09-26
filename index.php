<?php
/*AUTOLOAD*/

//autoload
require_once "./vendor/autoload.php";
//controlelr
require_once "controller/publicController.php";
// models
require_once "model/nosModels.php";
//use publicController

use Controller\publicController as PC;




// route content twig's files

$loader = new Twig_Loader_Filesystem('./views');

// we create a twig Environment

$twig = new Twig_Environment($loader, array(

    //routing for cache

    // for dev, cache on comment 'cache' => 'cache',
));

//navigate in the namespace PC (publicController) and call welcomeAction
if(!isset($_GET['content'])) {
    PC::welcomeAction($twig);
}else{
    // if isset $_GET['content']
    switch($_GET['content']){
        case "contact":
            PC::contactAction($twig);
            break;
        case "map":
            break;
        default:
            PC::welcomeAction($twig);
    }
}