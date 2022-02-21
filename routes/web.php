<?php

use App\Http\Controllers\PokemonController;
use App\Models\Pokemon;
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
    $pokemons = Pokemon::all();
    return view('pages.welcome', compact('pokemons'));
});

Route::get('/create', [PokemonController::class, 'create']);

Route::post('/store', [PokemonController::class, 'store']);
