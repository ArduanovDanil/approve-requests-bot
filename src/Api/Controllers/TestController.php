<?php

declare(strict_types=1);

namespace App\Api\Controllers;

use App\Api\Shared\ResponseFactory;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Yiisoft\Router\HydratorAttribute\RouteArgument;

final class TestController
{
    public function index(
        #[RouteArgument('id')]
        string $id = 'Hello!',
        ServerRequestInterface $request,
        ResponseFactory $responseFactory,
    ): ResponseInterface
    {
        dd($id, $request);
        return $responseFactory->success([
            'test1' => 'Test 1 value',
            'test2' => 'Test 2 value',
        ]);
    }

}