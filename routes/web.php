<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Home\PageController;
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
//     return view('home.index');
// });

Route::get('/', [PageController::class, 'home']);

Route::get('/about', [PageController::class, 'about']);
Route::get('/about/history', [PageController::class, 'history']);
Route::get('/about/management', [PageController::class, 'management']);
Route::get('/career', [PageController::class, 'career']);
Route::get('/careers', [PageController::class, 'careers']);
Route::get('/brands', [PageController::class, 'brands']);
Route::get('/brandsTest', [PageController::class, 'brandsTest']); //Test
Route::get('/brands/{id}', [PageController::class, 'brands_show']);
Route::get('/branch-companies', [PageController::class, 'branch']);
Route::get('/branch-companies/{id}', [PageController::class, 'branch_show']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/storelocation', [PageController::class, 'storelocation']);
Route::get('/news/{id}', [PageController::class, 'news']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/posts', PostController::class);
    Route::resource('/companies', CompanyController::class);
    Route::resource('/brands', BrandController::class);
});

require __DIR__.'/auth.php';
