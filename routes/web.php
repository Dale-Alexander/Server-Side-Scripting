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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// 1. MIŻJUD SEMICOLON (;) FL-AĦĦAR TA' DIN IR-ROUTE
Route::get('/contacts/create',[ContactController::class, 'create'] )->name('contacts.create');

// 2. IRRANĠAT L-ISEM TAL-MODELL GĦAL 'Contact' (b'C kapitali)
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');
    //what the above means is that $contact, which is a JSON object, will be converted to an associative array via the compact() method
    //An associate array is basically like a dictionary. Below there is a commented block that shows what it would look like more or else


// $data = [
//     'var'=>'something'
//      'var2'=>something
// ]

