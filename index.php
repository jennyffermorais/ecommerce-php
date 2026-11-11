<?php

require_once("vendor/autoload.php");

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

use \Hcode\Page;
use \Hcode\PageAdmin;

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response) {

    $page = new Page();
    $page->setTpl("index");
    return $response;
});

$app->get('/admin', function (Request $request, Response $response) {

    $page = new PageAdmin();
    $page->setTpl("index");
    return $response;
});

$app->run();
