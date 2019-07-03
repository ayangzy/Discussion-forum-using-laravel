<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[
    'uses' => 'ForumsController@index',
    'as' => 'forum'
]);

Route::get('/discuss', function () {
    return view('discuss');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/forum',[
    'uses' => 'ForumsController@index',
    'as' => 'forum'
]);

Route::post('/discussions/reply/{id}',[
    'uses' => 'DiscussionsController@reply',
    'as' => 'discussions.reply'
]);

Route::get('/discussion/{id}',[
    'uses' => 'DiscussionsController@show',
    'as' => 'discussion'
]);

Route::get('/channel/{id}',[
    'uses' => 'ForumsController@channel',
    'as' => 'channel'
]);



Route::group(['middleware'=>'auth'], function(){
    
    Route::resource('channels', 'ChannelsController');




    Route::get('/channels/destroy/{id}',[
        'uses' => 'ChannelsController@destroy',
        'as'  => 'channels.destroy'
    ]);
    
    Route::get('/channels/edit/{id}', [
        'uses' => 'ChannelsController@edit',
        'as' => 'channels.edit'
    ]);
    
    Route::post('/channels/update/{id}',[
        'uses' => 'ChannelsController@update',
        'as' => 'channels.update'
    ]);

    Route::get('/discussions/create',[
        'uses' => 'DiscussionsController@create',
        'as' => 'discussions.create'
    ]);
    

    Route::post('/discussions/store',[
        'uses' => 'DiscussionsController@store',
        'as' => 'discussion.store'
    ]);

    Route::get('/reply/like/{id}',[
        'uses' => 'RepliesController@like',
        'as' => 'reply.like'
    ]);

    Route::get('/reply/unlike/{id}',[
        'uses' => 'RepliesController@unlike',
        'as' => 'reply.unlike'
    ]);

    
});









