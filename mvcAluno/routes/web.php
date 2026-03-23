<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aluno/listar',[AlunoContoller::class, 'listar'])
->name('aluno.listar');

Route::get('/aluno/cadastrar', function () {
    return view('cadastro');
})->name('aluno.cadastro');


Route::post('/aluno/salvar',[AlunoContoller::class, 'add'])
->name('aluno.salvar');