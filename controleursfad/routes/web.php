<?php

use App\Http\Controllers\pagesController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\StagiaireController;
use Illuminate\Support\Facades\Route;

use function App\Http\Controllers\DetailsProduit;

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

Route::get('/login', function () {
    return view('login');
})->name("login");

Route::get(
    '/produits',
    [ProduitController::class, "liste"]
);

Route::get('/produits/{id}', [ProduitController::class, "DetailsProduit"]);

Route::resource("Stagiaires", StagiaireController::class);

Route::get("Stagiaires/{id}/delete", function ($id) {
    return view("stagiaires.supprimer")->with("id", $id);
})->name("stagiaires.supprimer");
// Route::get("/{page}", pagesController::class)
//     ->whereIn("page", ["home", "contact", "apropos"]);
