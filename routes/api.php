<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
 */
Route::any('/get-tables', \Trapzpro\ResourceGenerator\Http\Controllers\ResourceGeneratorController::class.'@getTables');
Route::any('/get-columns', \Trapzpro\ResourceGenerator\Http\Controllers\ResourceGeneratorController::class.'@getColumns');
Route::post('/check-file', \Trapzpro\ResourceGenerator\Http\Controllers\ResourceGeneratorController::class.'@checkFile');
Route::post('/generate-resource', \Trapzpro\ResourceGenerator\Http\Controllers\ResourceGeneratorController::class.'@generateFile');

Route::get('/settings-get', \Trapzpro\ResourceGenerator\Http\Controllers\ResourceGeneratorOptionsController::class.'@getSettings');
Route::post('/settings-set', \Trapzpro\ResourceGenerator\Http\Controllers\ResourceGeneratorOptionsController::class.'@setSettings');
Route::post('/settings-reset', \Trapzpro\ResourceGenerator\Http\Controllers\ResourceGeneratorOptionsController::class.'@resetDefault');
