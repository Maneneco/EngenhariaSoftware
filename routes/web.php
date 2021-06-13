<?php

use App\Http\Controllers\FrontendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/',[FrontendController::class, 'index']);
Route::get('/comprar',[FrontendController::class, 'comprar'])->name('comprar');
Route::get('/arrendar',[FrontendController::class, 'arrendar'])->name('arrendar');
Route::get('/welcome',[FrontendController::class, 'welcome'])->name('welcome');
Route::get('/ambos',[FrontendController::class, 'ambos'])->name('ambos');
Route::get('/contactenos',[FrontendController::class, 'contactenos'])->name('contactenos');
Route::get('/casa/{house}',[FrontendController::class, 'vercasa'])->name('vercasa');

Route::get('filterByCity/{city?}',[FrontendController::class, 'filterByCity'])->name('filterByCity');

Route::get('contact', 'FrontendController@contact');
Route::post('/submitform',[FrontendController::class, 'contactPost'])->name('contactPost');
