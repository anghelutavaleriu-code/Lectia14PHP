<?php

use App\Controllers\HomeController;
use App\Controllers\ReportsController;

$app->get("/", [HomeController::class, 'index']);

$app->get('/reports', [ReportsController::class, 'index']);
$app->get('/reports/create', [ReportsController::class, 'create']);
$app->post('/reports', [ReportsController::class, 'store']);
