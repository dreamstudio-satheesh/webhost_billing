<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\HostingPackageController;
use App\Http\Controllers\ClientServiceController;
use App\Http\Controllers\ClientPackageController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoiceItemController;
use App\Http\Controllers\PaymentController;

Route::resource('clients', ClientController::class);
Route::resource('services', ServiceController::class);
Route::resource('domains', DomainController::class);
Route::resource('hosting-packages', HostingPackageController::class);
Route::resource('client-services', ClientServiceController::class);
Route::resource('client-packages', ClientPackageController::class);
Route::resource('invoices', InvoiceController::class);
Route::resource('invoice-items', InvoiceItemController::class);
Route::resource('payments', PaymentController::class);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
