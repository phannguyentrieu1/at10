<?php

use App\Http\Controllers\FoodController;
use App\Models\Food;
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
    $hoaQua = Food::where('category_id', 1)->get();
    $huuCo = Food::where('category_id', 2)->get();
    $thucPhamKho = Food::where('category_id', 3)->get();
    return view('index', [
        'hoaQua' => $hoaQua,
        'huuCo' => $huuCo,
        'thucPhamKho' => $thucPhamKho
    ]);
});

Route::resource('foods', FoodController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
