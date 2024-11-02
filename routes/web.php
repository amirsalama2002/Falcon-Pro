<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ContactsNameController;
use App\Http\Controllers\LssueChequeFromBankController;
use App\Http\Controllers\PrintChequeController;
use App\Http\Controllers\PropertyManaqementController;

// contacts
Route::resource('contacts', ContactsController::class );
// PropertyManaqementController
Route::resource('PropertyManaqement',PropertyManaqementController::class);
// ContactsName
Route::resource('ContactsName', ContactsNameController::class);
// PrintCheque
Route::resource('PrintCheque' , PrintChequeController::class);
// lssueChequeFromBank
Route::resource('lssueChequeFromBank', LssueChequeFromBankController::class);