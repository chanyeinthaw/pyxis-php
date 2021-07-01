<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class IndexController implements RequestHandlerInterface {
    public function handle(ServerRequestInterface $request): ResponseInterface {
        dump($request);
        return response()->createJsonResponse(200, ['status' => 'hello']);
    }
}