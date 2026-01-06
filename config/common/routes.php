<?php

declare(strict_types=1);

use App\Api;
use App\Api\Controllers\TestController;
use Yiisoft\Router\Route;
use Yiisoft\Router\Group;

/**
 * @var array $params
 */

return [
    Route::get('/')->action(Api\IndexAction::class)->name('app/index'),
    Group::create('/api')->routes(
        Route::get('/test[/{id}]')->action([TestController::class, 'index'])
    ),
];
