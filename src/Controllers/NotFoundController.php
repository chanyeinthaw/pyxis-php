<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class NotFoundController implements RequestHandlerInterface {
    public function handle(ServerRequestInterface $request): ResponseInterface {
        return response()->createJsonResponse(400, ['message' => 'Not Found']);
    }
}