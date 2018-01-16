<?php
Route::group([
    'namespace'     =>  'AccessManager\Routers\Http\Controllers',
    'prefix'        =>  'network',
    'middleware'    =>      'auth',
], function(){
    Route::group([
        'prefix'    =>  'routers'
    ], function(){
        Route::get('/', [
            'as'    =>  'routers.index',
            'uses'  =>  'RoutersController@getIndex',
        ]);

        Route::get('add', [
            'as'    =>  'routers.add',
            'uses'  =>  'RoutersController@getAdd',
        ]);

        Route::post('add', [
            'as'    =>  'routers.add.post',
            'uses'  =>  'RoutersController@postAdd',
        ]);

        Route::get('edit/{id}', [
            'as'    =>  'routers.edit',
            'uses'  =>  'RoutersController@getEdit',
        ]);

        Route::post('edit', [
            'as'    =>  'routers.edit.post',
            'uses'  =>  'RoutersController@postEdit',
        ]);

        Route::post('delete', [
            'as'    =>  'routers.delete',
            'uses'  =>  'RoutersController@postDelete',
        ]);
    });

    Route::group([
        'prefix'    =>  'subnet',
    ], function(){
        Route::get('/', [
            'as'    =>  'subnet.index',
            'uses'  =>  'SubnetController@getIndex',
        ]);

        Route::get('/add', [
            'as'    =>  'subnet.add',
            'uses'  =>  'SubnetController@getAdd',
        ]);

        Route::post('/add', [
            'as'    =>  'subnet.add.post',
            'uses'  =>  'SubnetController@postAdd',
        ]);

        Route::post('/delete', [
            'as'    =>  'subnet.delete',
            'uses'  =>  'SubnetController@postDelete',
        ]);
    });
});