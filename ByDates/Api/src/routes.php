<?php

use Middlewares\TrailingSlash;
use Slim\Routing\RouteCollectorProxy;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// https://slimframework.com/docs/v4/cookbook/route-patterns.html
$app->add(new TrailingSlash(FALSE));

$app->get('/', function(Request $request, Response $response) {
	$response->getBody()->write(file_get_contents(ROOT_PATH . '/views/index.html'));

	return $response;
});

// https://www.slimframework.com/docs/v4/objects/routing.html#container-resolution
$app->get('/json', \App\Controllers\JsonController::class . ':someRandomResponse');

$app->get('/api/documentation', function (Request $request, Response $response) {
    $response->getBody()->write(file_get_contents(ROOT_PATH . '/views/api/documentation.html'));

	return $response;
});

$app->group('/api/v1', function (RouteCollectorProxy $group) {
    $group->group('/store', function (RouteCollectorProxy $group) {
        $group->post('/order', '\App\Controllers\Api\V1\StoreController:placeOrder');
        $group->get('/order/{orderId}', '\App\Controllers\Api\V1\StoreController:getOrder');
        $group->delete('/order/{orderId}', '\App\Controllers\Api\V1\StoreController:deleteOrder');
    });

    $group->group('/user', function (RouteCollectorProxy $group) {
        $group->post('', '\App\Controllers\Api\V1\UserController:store');

        $group->get('/{username}', '\App\Controllers\Api\V1\UserController:find');
        $group->put('/{username}', '\App\Controllers\Api\V1\UserController:update');
        $group->delete('/{username}', '\App\Controllers\Api\V1\UserController:delete');
    });
});