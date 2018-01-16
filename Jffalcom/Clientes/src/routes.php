<?php
Route::group(['middleware' => ['web']], function () {
    Route::group(["prefix" => 'cliente'], function () {
        Route::get("/delete/{id}", ["as" => "clienteDelete", "uses" => "Jffalcom\Clientes\Controllers\ClienteController@delete"]);
        Route::get("/edit/{id}", ["as" => "clienteEdit", "uses" => "Jffalcom\Clientes\Controllers\ClienteController@edit"]);
        Route::post("/update/{id}", ["as" => "clienteUpdate", "uses" => "Jffalcom\Clientes\Controllers\ClienteController@update"]);
        Route::get("/create", ["as" => "clienteCreate", "uses" => "Jffalcom\Clientes\Controllers\ClienteController@create"]);
        Route::post("", ["as" => "clienteStore", "uses" => "Jffalcom\Clientes\Controllers\ClienteController@store"]);
        Route::get("", ["as" => "clienteIndex", "uses" => "Jffalcom\Clientes\Controllers\ClienteController@index"]);
    });
});
