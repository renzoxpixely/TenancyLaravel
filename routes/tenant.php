<?php
declare(strict_types=1);



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

use App\Http\Controllers\Tenant\CompanyController;
use App\Http\Controllers\Tenant\BranchController;
use App\Http\Controllers\Tenant\UserController;
use App\Http\Controllers\Tenant\ShoppingController;
use App\Http\Controllers\Tenant\SaleController;
use App\Http\Controllers\Tenant\DashboardController;
use App\Http\Controllers\Tenant\InventoryController;

// use App\Http\Controllers\Tenant\RegisteredTenantUserController;


use App\Http\Controllers\Tenant\ProductController;
use App\Http\Controllers\Tenant\ProviderController;


use App\Http\Controllers\Tenant\PurchaseController;

use App\Http\Controllers\Tenant\ClientController;

use App\Http\Controllers\Tenant\SunatController;
/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::group([
    'as' => 'tenant.',
    'middleware' => [
        'web',
        InitializeTenancyByDomain::class,
        PreventAccessFromCentralDomains::class,
    ]
], function () {

    // Obtén el nombre de la base de datos
$databaseName = DB::connection()->getPdo()->query('SELECT DATABASE()')->fetchColumn();


    Route::get('/', function () {
        return view('auth.login');
    });




    Route::get('/dashboard', function () {
        //valor por defecto
        $branch_id=1;
        return view('tenant.home.index', compact('branch_id'));
    })->middleware(['auth'])->name('dashboard');
 
    //auth
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest')
        ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'storeTenant'])
        ->middleware('guest');

    // Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    //     ->middleware('guest')
    //     ->name('password.request');

    // Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    //     ->middleware('guest')
    //     ->name('password.email');

    // Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    //     ->middleware('guest')
    //     ->name('password.reset');

    // Route::post('/reset-password', [NewPasswordController::class, 'store'])
    //     ->middleware('guest')
    //     ->name('password.update');

    // Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    //     ->middleware('auth')
    //     ->name('verification.notice');

    // Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    //     ->middleware(['auth', 'signed', 'throttle:6,1'])
    //     ->name('verification.verify');

    // Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    //     ->middleware(['auth', 'throttle:6,1'])
    //     ->name('verification.send');

    // Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
    //     ->middleware('auth')
    //     ->name('password.confirm');

    // Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
    //     ->middleware('auth');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth')
        ->name('logout');
    //end auth



//company
    //Route::resource('companies', CompanyController::class);
    Route::resource('companies', CompanyController::class);
//company
    //Route::resource('branches', CompanyController::class);
    Route::resource('branches', BranchController::class);
//company
    //Route::resource('branches', CompanyController::class);
    Route::resource('users', UserController::class);
//shopping
    Route::resource('branches.shoppings', ShoppingController::class);

//sale
Route::resource('branches.sales', SaleController::class);

 //dashboard
Route::resource('branches.dashboard', DashboardController::class);

//invnetory
Route::resource('branches.inventories', InventoryController::class);

//invnetory autocomplete
Route::resource('branches.inventories', InventoryController::class);
Route::get('branches.inventories', [InventoryController::class, 'autocompleteSearch']);


//purcharse
Route::resource('branches.purchases', PurchaseController::class);

Route::resource('/purchases', PurchaseController::class)->except([
    'edit', 'update', 'destroy','store'
]);


//clients
Route::resource('branches.clients', ClientController::class);


//consultar sunat
Route::post('/consultar-ruc', [SunatController::class, 'consultarRuc'] )->name('consultarRuc');
Route::post('/consultar-dni', [SunatController::class, 'consultarDni'] )->name('consultarDni');









//acceder a un inquilino desde su id
Route::get('/{databaseName}', function ($databaseName) {
    // Imprime el nombre de la base de datos
    // return "Nombre de la base de datos: $name";
    return redirect()->route('tenant.branches.index', ['uuid' => $databaseName]);
})->where('databaseName', '^tenant[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$');








//providers
Route::resource('branches.providers', ProviderController::class);






Route::get('get_products_by_barcode', [ProductController::class, 'get_products_by_barcode']);
Route::get('get_products_by_id', [ProductController::class, 'get_products_by_id']);


//prueba ruta
Route::get('/test', function () {
    return view('tenant.purchases.index');
});    


// Route::get('register', [RegisteredTenantUserController::class, 'create'])
// ->name('register');

// Route::post('register', [RegisteredTenantUserController::class, 'store']);
});
