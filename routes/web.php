<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Auth;




// Guest Landing Page Route
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Login Route
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard Route
    Route::get('/dashboard', function () {
        $user = Auth::user();
        if ($user->usertype_id == 3) {
            return redirect()->route('user-dashboard.index');
        } else {
            return view('dashboard');
        }
    })->name('dashboard');

    // Admin Routes
    Route::middleware(['admin'])->group(function () {
        // Profile Routes
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        // Account Routes
        Route::get('/accounts', [UserController::class, 'index'])->name('accounts.index');
        Route::get('/accounts-list', [UserController::class, 'usersTable'])->name('accounts-list');
        Route::get('/accounts/{account}/edit', [UserController::class, 'edit'])->name('accounts.edit');
        Route::put('/accounts/{account}/update', [UserController::class, 'update'])->name('accounts.update');
        Route::delete('/accounts/{account}', [UserController::class, 'destroy'])->name('accounts.destroy');
        Route::get('/accounts/store', [UserController::class, 'store'])->name('accounts.store');
        Route::post('/accounts/create', [UserController::class, 'create'])->name('accounts.create');

        // Inventory Routes
        Route::get('/inventories', [InventoryController::class, 'index'])->name('inventories.index');
        Route::get('/inventories-list', [InventoryController::class, 'inventoryTable'])->name('inventories-list');
        Route::get('/inventories/{inventoryLogistic}/edit', [InventoryController::class, 'edit'])->name('inventories.edit');
        Route::put('/inventories/{inventoryLogistic}/update', [InventoryController::class, 'update'])->name('inventories.update');
        Route::delete('/inventories/{inventoryLogistic}', [InventoryController::class, 'destroy'])->name('inventories.destroy');
        Route::get('/inventories/store', [InventoryController::class, 'store'])->name('inventories.store');
        Route::post('/inventories/create', [InventoryController::class, 'create'])->name('inventories.create');

        // Product Routes
        Route::get('/products', [ProductController::class, 'index'])->name('products.index');
        Route::get('/products/fetch', [ProductController::class, 'fetch'])->name('products.products-list');
    });

    // User Dashboard Route
    Route::middleware(['user'])->group(function () {
        Route::get('/user-dashboard', [UserDashboardController::class, 'index'])->name('user-dashboard.index');
        Route::get('/user-profile', [UserProfileController::class, 'index'])->name('user-profile.index');
        Route::put('/user-profile/{user}/update', [UserProfileController::class, 'update'])->name('user-profile.update');
    });

});

// Home Route for Authenticated Users
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Include the auth.php routes file
require __DIR__.'/auth.php';
