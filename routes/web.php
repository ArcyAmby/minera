<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/accounts', [App\Http\Controllers\UserController::class, 'index'])->name('accounts.index');

    Route::get('/accounts-list', [App\Http\Controllers\UserController::class, 'usersTable'])->name('accounts-list');

    Route::get('/accounts/{account}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('accounts.edit');
    
    Route::put('/accounts/{account}/update', [App\Http\Controllers\UserController::class, 'update'])->name('accounts.update');

    Route::delete('/accounts/{account}', [App\Http\Controllers\UserController::class, 'destroy'])->name('accounts.destroy');

    Route::get('/accounts/store', [App\Http\Controllers\UserController::class, 'store'])->name('accounts.store');

    Route::post('/accounts/create', [App\Http\Controllers\UserController::class, 'create'])->name('accounts.create');

    // INVENTORY ROUTE

    Route::get('/inventories', [App\Http\Controllers\InventoryController::class, 'index'])->name('inventories.index');

    Route::get('/inventories-list', [App\Http\Controllers\InventoryController::class, 'inventoryTable'])->name('inventories-list');

    Route::get('/inventories/{inventory}/edit', [App\Http\Controllers\InventoryController::class, 'edit'])->name('inventories.edit');
    
    Route::put('/inventories/{inventory}/update', [App\Http\Controllers\InventoryController::class, 'update'])->name('inventories.update');

    Route::delete('/inventories/{inventory}', [App\Http\Controllers\InventoryController::class, 'destroy'])->name('inventories.destroy');

    Route::get('/inventories/store', [App\Http\Controllers\InventoryController::class, 'store'])->name('inventories.store');

    Route::post('/inventories/create', [App\Http\Controllers\InventoryController::class, 'create'])->name('inventories.create');
});

// Route::middleware(['auth'])->group(function () {

//     // USER ACCOUNTS

    

//     // USER INFORMATION (CLIENT INFORMATION)

//     Route::get('/clients', [App\Http\Controllers\ClientController::class, 'index'])->name('clients.index');

//     Route::get('/clients-list', [App\Http\Controllers\ClientController::class, 'clientTable'])->name('clients-list');

//     Route::delete('/clients/{client}', [App\Http\Controllers\ClientController::class, 'destroy'])->name('clients.destroy');

//     Route::get('/clients/{client}/edit', [App\Http\Controllers\ClientController::class, 'edit'])->name('clients.edit');
    
//     Route::put('/clients/{client}/update', [App\Http\Controllers\ClientController::class, 'update'])->name('clients.update');

//     Route::post('/clients/store', [App\Http\Controllers\ClientController::class, 'store'])->name('clients.store');


//     // SCHEDULING
    
//     Route::get('/schedule', \App\Http\Controllers\Schedule\ScheduleController::class)->name('schedule.index'); 

//     // PET INFORMATION

//     Route::get('/pets', [App\Http\Controllers\PetController::class, 'index'])->name('pets.index');

//     Route::get('/pets-list', [App\Http\Controllers\PetController::class, 'petTable'])->name('pets-list');

//     Route::post('/pets/store', [App\Http\Controllers\PetController::class, 'store'])->name('pets.store');

//     Route::delete('/pets/{pet}', [App\Http\Controllers\PetController::class, 'destroy'])->name('pets.destroy');

//     Route::get('/pets/{pet}/edit', [App\Http\Controllers\PetController::class, 'edit'])->name('pets.edit');
    
//     Route::put('/pets/{pet}/update', [App\Http\Controllers\PetController::class, 'update'])->name('pets.update');

//     Route::post('/pets/create', [App\Http\Controllers\PetController::class, 'create'])->name('pets.create');

//     // Route::get('/pets/{pet}/view', [App\Http\Controllers\PetController::class, 'view'])->name('pets.view');

//     Route::get('/clients/{client}/pets', [App\Http\Controllers\PetController::class, 'view'])->name('pets.view');

    
// });

require __DIR__.'/auth.php';
