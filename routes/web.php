<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;

Route::get('/', function () {
    return view('index');
});

Route::prefix('/app')->group(function () {
   
    //Clientes
    Route::get('/clients', [ClientController::class, 'index'])->name('app.clients.index');
    Route::get('/clients/{id}/show/', [ClientController::class, 'show'])->name('app.clients.show');
    Route::get('/clients/create', [ClientController::class, 'create'])->name('app.clients.create');
    Route::post('/clients', [ClientController::class, 'store'])->name('app.clients.store');
    Route::get('/clients/{id}/edit/', [ClientController::class, 'edit'])->name('app.clients.edit');
    Route::put('/clients/{id}', [ClientController::class, 'update'])->name('app.clients.update');
    Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('app.clients.destroy');    

    //Produtos
    Route::get('/products', [ProductController::class, 'index'])->name('app.products.index');
    Route::get('/products/{id}/show/', [ProductController::class, 'show'])->name('app.products.show');
    Route::get('/products/create', [ProductController::class, 'create'])->name('app.products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('app.products.store');
    Route::get('/products/{id}/edit/', [ProductController::class, 'edit'])->name('app.products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('app.products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('app.products.destroy');
    
    //Faturas 
    Route::get('/invoices', [InvoiceController::class, 'index'])->name('app.invoices.index');
    Route::get('/invoices/{id}/show/', [InvoiceController::class, 'show'])->name('app.invoices.show');
    Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('app.invoices.create');
    Route::post('/invoices', [InvoiceController::class, 'store'])->name('app.invoices.store');
    Route::get('/invoices/{id}/edit/', [InvoiceController::class, 'edit'])->name('app.invoices.edit');
    Route::put('/invoices/{id}', [InvoiceController::class, 'update'])->name('app.invoices.update');
    Route::delete('/invoices/{id}', [InvoiceController::class, 'destroy'])->name('app.invoices.destroy');    
});


