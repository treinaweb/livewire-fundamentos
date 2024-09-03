<?php

use App\Http\Controllers\SiteController;
use App\Livewire\Client\Create;
use App\Livewire\Client\Edit;
use App\Livewire\Client\Index;
use App\Livewire\Contador;
use App\Livewire\OlaMundo;
use App\Livewire\Saudacao;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home']);

Route::get('/saudacao', Saudacao::class);
Route::get('/ola-mundo/{mensagem}', OlaMundo::class);

Route::get('/contador', Contador::class);

Route::get('/clients', Index::class)->name('clients.index');
Route::get('/clients/create', Create::class);
Route::get('/clients/{client}/edit', Edit::class);