<?php

use Illuminate\Support\Facades\Route;


//  nome del controller  nome della public fun del controller -> name('name della pub fun del controller') questa rotta si collega al controller e ci ridà la pagina selezionata.

// il get è il metodo come post delete ecc
Route::get('/', 'PaganteController@index') -> name('index');
