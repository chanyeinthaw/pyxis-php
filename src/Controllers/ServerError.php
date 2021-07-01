<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ServerError implements RequestHandlerInterface {
    private $error;
    public function __construct($error) {
        $this->error = $error;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface {
        return response()->createJsonResponse(500, [
            'message' => $this->error->getMessage(), 
            'trace' => $this->error->getTrace()
        ]);
    }
}