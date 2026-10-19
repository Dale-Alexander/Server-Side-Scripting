<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/contacts', function () {
    return "<h1>All Contacts </h1>";
})->name('contacts.index');

// 1. MIŻJUD SEMICOLON (;) FL-AĦĦAR TA' DIN IR-ROUTE
Route::get('/contacts/create', function () {
    return "<h1>Add new contact</h1>"; 
})->name('contacts.create');

// 2. IRRANĠAT L-ISEM TAL-MODELL GĦAL 'Contact' (b'C kapitali)
Route::get('/contacts/{id}', function ($id) {
    return App\Models\Contact::find($id);
})->name('contacts.show');

