<?php

use App\Http\Controllers\SiteController;
use App\Livewire\Contador;
use App\Livewire\OlaMundo;
use App\Livewire\Saudacao;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home']);

Route::get('/saudacao', Saudacao::class);
Route::get('/ola-mundo/{mensagem}', OlaMundo::class);

Route::get('/contador', Contador::class);