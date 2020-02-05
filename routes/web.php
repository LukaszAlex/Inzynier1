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

Route::get('/', function () {
    return view('welcome');
});

//Strona główna
Route::get('/strona', 'GlownaController@glowna')->name('stronaG');
//Galeria
Route::get('/galeria', 'GaleriaController@galeria')->name('galeria');
//Rezerwacja
Route::get('/rezerwacja', 'RezerwacjaKlController@rezerwacja')->name('rezerwacja');
//Kontakt
Route::get('/kontakt', 'KontaktController@kontakt')->name('kontakt');


//--------------------------------------------------------------------------------------------------

//Strona główna
Route::get('/stronaA', 'RezerwacjaAController@listaR')->name('listaR');
//Routing do pokoju
Route::get('/pokoje', 'PokojeAController@listaP')->name('listaP');

Route::post('/stronaA',[

    'uses' => 'RezerwacjaAController@listaR',
    'as' => 'rezerwacja.'
]);

//Routing dodany do przekierowaniu po usunięciu.
Route::get('/listaR',[

    'uses' => 'RezerwacjaAController@listaR',
    'as' => 'sites.listaR'
]);

//Routingi do Rezerwacji
Route::get('/addRe', 'RezerwacjaAController@addRe')->name('addR');


Route::post('/addRe',[

    'uses' => 'RezerwacjaAController@addRe',
    'as'=> 'rezerwacja.addRe'
]);

Route::post('/saveRe',[

    'uses' => 'RezerwacjaAController@saveRe',
    'as' => 'rezerwacja.saveRe'
]);

//Routingi do klienta
Route::get('/listaK','KlientController@listaK')->name('listaK');
Route::get('/addKl','KlientController@addKl')->name('addK');
Route::post('/save',[

    'uses' => 'KlientController@save',
    'as' => 'klient.save'
]);

//Routing do pojedyńczej wartości.
Route::get('/wartosc/{site}', [

    'uses' => 'RezerwacjaAController@show',
    'as' => 'rezerwacja.show'
]);

//Routing dla edycji////////////////////////
Route::get('/sites/edit/{rezerwacja}', [

    'uses' => 'RezerwacjaAController@edit',
    'as' => 'sites.edit'
]);

Route::put('sites/{rezerwacja}', [

    'uses' => 'RezerwacjaAController@update',
    'as' => 'sites.update'
]);

///////////////////////////////////////

//Routing dla usuwania
Route::delete('sites/{rezerwacja}', [

    'uses' => 'RezerwacjaAController@destroy',
    'as' => 'sites.delete'
]);



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
