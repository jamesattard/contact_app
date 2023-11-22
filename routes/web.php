<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Display all contacts
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// Display create contact form
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

// Create new contact (POST Request)
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

// Show contact details
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');

// Display edit contact form
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');