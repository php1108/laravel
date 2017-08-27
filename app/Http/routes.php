<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
if(BrowserDetect::isMobile()){
    echo 1;
}else{
    echo BrowserDetect::browserFamily();
}
Route::get('/', function () {
    return view('welcome');
});
Route::any('/upload','UploadController@upload');
Route::any('/mall','AdminArticleController@mall');
Route::get('/mail/send','MailController@send');
Route::get('/mail/sendtext','MailController@sendtext');
Route::get('/mail/sendimg','MailController@sendimg');
Route::get('/mail/sendimg2','MailController@sendimg2');
Route::get('/mail/sendFile','MailController@sendFile');


Route::get('/queue','MailController@queue');
Route::get('/excel','ExcelController@export');
Route::get('/excel1','ExcelController@export1');

Route::get('/str','TestController@index');
Route::get('/url','TestController@getUrl');
