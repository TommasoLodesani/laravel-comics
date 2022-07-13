<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $arrComics = config('comics');

    return view('home', [
        'arrComics' => $arrComics,

    ]);
})->name('home');

Route::get('/prodotto/{id}', function ($id) {
    $arrComics = config('comics');
    $comic = null;
    foreach ($arrComics as $value) {
        if($value['id'] == $id){
            $comic = $value;
            break;
        }
    }

    if($comic){
        return view('comic', [
            'pageTitle' => 'Comic - DC Comics',
            'comic' => $comic
        ]);
    } else{
        abort(404);
    }
})->name('prodotto');
