<?php
/**
 * Usuario: Lucas
 * Date: 15/11/2021
 */

Route::group([
    'prefix'     => 'modules/controllers',
    'namespace'  => 'App\Modules\Controllers',

], function (){

    Route::get('marcas', [
        'as'      => 'modules/controllers.marcas',
        'uses'    => 'MarcasController@getMarcas'
    ]);
});
