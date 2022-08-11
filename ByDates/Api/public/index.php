<?php

define('ROOT_PATH', dirname(__DIR__));

require_once ROOT_PATH . '/vendor/autoload.php';

use App\Handlers;
use App\Repositories;

use DI\Container;

use Slim\Exception\HttpInternalServerErrorException;
use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;

// Set that to your needs
$displayErrorDetails = true;

// https://www.slimframework.com/docs/v4/concepts/di.html
// Create Container using PHP-DI
$container = new Container();

$container->set('storeOrderRepository', function () {
    return new Repositories\Store\OrderRepository;
});

$container->set('userRepository', function () {
    return new Repositories\UserRepository;
});

// Set container to create App with on AppFactory
AppFactory::setContainer($container);

$app = AppFactory::create();

$callableResolver = $app->getCallableResolver();
$responseFactory = $app->getResponseFactory();

$serverRequestCreator = ServerRequestCreatorFactory::create();
$request = $serverRequestCreator->createServerRequestFromGlobals();

// https://www.slimframework.com/docs/v4/middleware/error-handling.html
$errorHandler = new Handlers\HttpErrorHandler($callableResolver, $responseFactory);
$shutdownHandler = new Handlers\ShutdownHandler($request, $errorHandler, $displayErrorDetails);
register_shutdown_function($shutdownHandler);


// Add Error Handling Middleware
$errorMiddleware = $app->addErrorMiddleware($displayErrorDetails, false, false);
$errorMiddleware->setDefaultErrorHandler($errorHandler);

require_once ROOT_PATH . '/src/routes.php';

$app->run();