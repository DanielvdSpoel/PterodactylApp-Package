<?php

use Pterodactyl\Http\Middleware\Api\Client\AuthenticateClientAccess;

/*
|--------------------------------------------------------------------------
| Client Control API
|--------------------------------------------------------------------------
|
| Endpoint: /api/client/app
|
*/
Route::get('/api/client/app', 'ApiController@index')->name('api.client.app.index');

/*
|--------------------------------------------------------------------------
| Client Control API
|--------------------------------------------------------------------------
|
| Endpoint: /api/client/servers/{server}
|
*/
Route::group(['prefix' => 'api/client/servers/{server}', 'middleware' => [AuthenticateClientAccess::class]], function () {
    Route::get('/console', 'ApiController@console')->name('api.client.servers.console');
    
});