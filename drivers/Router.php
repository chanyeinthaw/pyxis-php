<?php

namespace Driver;

use App\Controllers\NotFoundController;
use App\Controllers\ServerError;
use Psr\Http\Server\RequestHandlerInterface;
use Sunrise\Http\Router\Exception\RouteNotFoundException;
use Sunrise\Http\Router\Loader\CollectableFileLoader;
use Sunrise\Http\Router\RouteCollector;
use Sunrise\Http\Router\Router as SuniseRouter;
use Sunrise\Http\ServerRequest\ServerRequestFactory;

use function Sunrise\Http\Router\emit;

final class Router {
    public static function setup(string $routesDirectory) {
        $loader = new CollectableFileLoader;
        $loader->attach($routesDirectory);

        $router = new SuniseRouter;
        $router->load($loader);

        $request = ServerRequestFactory::fromGlobals();

        try {
            $response = $router->handle($request);
        } catch(RouteNotFoundException $error) {
            $response = (new NotFoundController)->handle($request);
        } catch(\Error $error) {
            $response = (new ServerError($error))->handle($request);
        }

        emit($response);
    }
}