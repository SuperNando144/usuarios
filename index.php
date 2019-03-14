<?php

require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get(
    '/',
    function () {

        require_once("view/index.php");
        
    }
);

$app->get(
    '/home',
    function () {

        require_once("view/index.php");
        
    }
);

$app->get(
    '/emails',
    function () {

        require_once("view/emails.php");
        
    }
);

$app->get(
    '/samantha',
    function () {

        require_once("view/samantha.php");
        
    }
);

$app->get(
    '/sul',
    function () {

        require_once("view/sul.php");
        
    }
);


$app->run();
