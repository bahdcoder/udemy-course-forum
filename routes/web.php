<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/discuss', function () {
    return view('discuss');
});

Auth::routes();

Route::get('/forum', [
    'uses' => 'ForumsController@index',
    'as' => 'forum'
]);

Route::get('{provider}/auth', [
    'uses' => 'SocialsController@auth',
    'as' => 'social.auth'
]);

Route::get('/{provider}/redirect', [
    'uses' => 'SocialsController@auth_callback',
    'as' => 'social.callback'
]);

Route::get('discussion/{slug}', [
    'uses' => 'DiscussionsController@show',
    'as' => 'discussion'
]);

Route::group(['middleware' => 'auth'], function(){
    Route::resource('channels', 'ChannelsController');

    Route::get('discussion/create', [
        'uses' => 'DiscussionsController@create',
        'as' => 'discussions.create'
    ]);

    Route::post('discussions/store', [
        'uses' => 'DiscussionsController@store',
        'as' => 'discussions.store'
    ]);

    Route::post('/discussion/reply/{id}', [
        'uses' => 'DiscussionsController@reply',
        'as' => 'discussion.reply' 
    ]);

    Route::get('/reply/like/{id}', [
        'uses' => 'RepliesController@like',
        'as' => 'reply.like'
    ]);

    Route::get('/reply/unlike/{id}', [
        'uses' => 'RepliesController@unlike',
        'as' => 'reply.unlike'
    ]);


});
