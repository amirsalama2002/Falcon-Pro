<?php



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PrintChequeController;
use App\Http\Controllers\ContactsNameController;
use App\Http\Controllers\ChequeListReportController;
use App\Http\Controllers\ContractListReportController;
use App\Http\Controllers\IssuedChequeReportController;
use App\Http\Controllers\PropertyManaqementController;
use App\Http\Controllers\LssueChequeFromBankController;
use App\Http\Controllers\CommisionDatesReportController;
use App\Http\Controllers\PropertDetailsReportController;
use App\Http\Controllers\ContractsEndDatesReportController;


// login
Route::get('/home',function(){
    return redirect()->route('contacts.index');
});

Route::get('/',function(){
    return redirect()->route('contacts.index');
});
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
// Cheque List Report
Route::resource('ChequeListReport',ChequeListReportController::class);
//  Issued Cheque Report
Route::resource('IssuedChequeReport',IssuedChequeReportController::class);
// Propert Details Report
Route::resource('PropertDetailsReport',PropertDetailsReportController::class);
//  Contract List Report
Route::resource('ContractListReport',ContractListReportController::class);
//  ContractsEndDatesReport
Route::resource('ContractsEndDatesReport',ContractsEndDatesReportController::class);
// CommisionDatesReport
Route::resource('CommisionDatesReport',CommisionDatesReportController::class);

Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
