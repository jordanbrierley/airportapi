<?php

Route::get('api/v1/airports', array('as' => 'airports.api.post', 'uses' => 'Jab\Airports\Api\Controllers\Airports@index'));

Route::post('api/v1/airports', array('as' => 'airports.api.post', 'uses' => 'Jab\Airports\Api\Controllers\Airports@index'));


?>