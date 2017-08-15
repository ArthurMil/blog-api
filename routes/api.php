<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
 * CREATING POSTS
 */

Route::post('/quote', [
    'uses' => 'QuoteController@postQuote'
]);
Route::get('/quotes', [
    'uses' => 'QuoteController@getQuotes'
]);
Route::put('/quote/{id}', [
    'uses' => 'QuoteController@putQuote'
]);
Route::delete('/quote/{id}', [
    'uses' => 'QuoteController@deleteQuote'
]);

/*
 * REGISTRATION
 */
Route::post('/user', [
    'uses' => 'UserController@signUp'
]);
Route::post('/user/signin', [
    'uses' => 'UserController@signIn'
]);

