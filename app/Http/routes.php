<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$api = app('Dingo\Api\Routing\Router');

$needAuth = false;

$app->get('/', function () use ($app) {
    return $app->version();
});

$apiSettings = [
    'version' => 'v1',
    'prefix' => '',
    'protected' => false
];

$api->version("v2", function ($api) {
    $api->post('moments/myMoments_v2', ['as' => 'myMoments_v2', 'uses' => 'App\Http\Controllers\MomentsController@myMoments_v2']);
    $api->get('test', ['as' => 'test', function() {return 1;}]);
});

//Route::api($apiSettings, function() {
//    Route::get('test', function() {return 1;});
//});