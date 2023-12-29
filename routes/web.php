<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::get('/success-checkout', function () {
    return view('checkout.success');
})->name('success-checkout');

Route::get('/sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('/auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');



//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

//    Dashboard
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::prefix('admin/dashboard')->namespace('Admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function (){
        Route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');

        Route::post('checkout/{checkout}', [AdminCheckout::class, 'update'])->name('checkout.update');

    });

    Route::middleware('ensureUserRole:user')->group(function (){
        Route::prefix('user/dashboard')->namespace('User')->name('user.')->group(function (){
            Route::get('/', [UserDashboard::class, 'index'])->name('dashboard');
        });

        Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
        Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout.create');
        Route::post('checkout/{camp}', [CheckoutController::class, 'store'])->name('checkout.store');
    });
});

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';
