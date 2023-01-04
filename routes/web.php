<?php

use App\Http\Controllers\RegisteredTenantController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;


use App\Http\Controllers\TenantController;



use App\Http\Controllers\CompanyController;
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

Route::get('/register-tenant', [RegisteredTenantController::class, 'create' ])->name('tenant.register');
Route::post('/register-tenant', [RegisteredTenantController::class, 'store' ]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




    // Route::get('/register-tenant', [RegisteredTenantController::class, 'create' ])->name('tenant.register');
    // Route::post('/register-tenant', [RegisteredTenantController::class, 'store' ]);

    Route::get('/show_tenant', [TenantController::class,'show_tenant'])->name('tenants.show_tenant');

//company
    Route::resource('companies', CompanyController::class);
});

require __DIR__.'/auth.php';
