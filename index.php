<?php

require_once("vendor/autoload.php");

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response) {

	//$response->getBody()->write("OK");

	$sql = new Hcode\DB\Sql();

	$results = $sql-> select("SELECT * FROM tb_users");

	echo json_encode($results);

	return $response;
});

$app->run();
