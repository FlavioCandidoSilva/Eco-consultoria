<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


// AUTENTICAÇÃO

Route::middleware(['auth'])->group(function () {

    Route::get('/', [App\Http\Controllers\TaskController::class, 'index'])->name('home');
    Route::get('/sair', [App\Http\Controllers\LoginController::class, 'sair'])->name('sair');
});

// LOGIN E REGISTRO

Route::get('/login/{erro?}', [LoginController::class, 'showIndex'])->name('login.login');
Route::post('/login', [LoginController::class, 'autenticar']);

Route::get('/register', [LoginController::class, 'create'])->name('register.register');
Route::post('/register', [LoginController::class, 'store']);

//LOGOUT

Route::get('/logout', [LoginController::class, 'sair'])->name('logout.logout');

// CLIENTES

Route::middleware(['auth'])->group(function () {

    //TAREFAS

    Route::get('/Task/create', [App\Http\Controllers\TaskController::class, 'createTask'])->name('task.create');
    Route::post('/Task/create', [App\Http\Controllers\TaskController::class, 'storeTask'])->name('task.store');
    Route::get('/Task/edit/{id}', [App\Http\Controllers\TaskController::class, 'editTask'])->name('task.edit');
    Route::post('/Task/update/{id}', [App\Http\Controllers\TaskController::class, 'updateTask'])->name('task.update');
    Route::post('/Task/delete/{id}', [App\Http\Controllers\TaskController::class, 'deleteTask'])->name('task.delete');

    //AUDITORIA
    Route::get('/auditoria', [App\Http\Controllers\AuditoriaController::class, 'index'])->name('auditoria.show');
    Route::get('/auditoria/detalhes/{id}', [App\Http\Controllers\AuditoriaController::class, 'showAudit'])->name('auditoria.detalhes');

    //USUÁRIOS
    Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('usuarios.show');
    Route::post('/usuarios/activate/{id}', [App\Http\Controllers\UserController::class, 'restore'])->name('usuarios.activate');
    Route::post('/usuarios/delete/{id}', [App\Http\Controllers\UserController::class, 'deleteUser'])->name('usuarios.delete');
    Route::get('/usuarios/edit/{id}', [App\Http\Controllers\UserController::class, 'editUser'])->name('usuarios.edit');
    Route::get('/usuarios/inactive', [App\Http\Controllers\UserController::class, 'inactiveUser'])->name('usuarios.inactive');

});
