<?php

Route::get('/', 'Site\PostController@index');
Route::get('/post/{id}', 'Site\PostController@mostrar');

Auth::routes();

Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function() {
    
    Route::get('/', 'Painel\HomeController@index');
    
    Route::get('/posts', 'Painel\PostController@index');
    Route::get('/post/adicionar', 'Painel\PostController@formCadEdit');
    Route::get('/post/{id}/editar', 'Painel\PostController@formCadEdit')->where('id', '[0-9]+');
    Route::get('/post/{id}/excluir/{excluir?}', 'Painel\PostController@excluir');
    Route::post('/post/adicionar', 'Painel\PostController@adicionar');
    Route::post('/post/atualizar', 'Painel\PostController@atualizar');
    
    Route::get('/usuario', 'Painel\UsuarioController@index');
    Route::get('/usuario/alterar-senha', 'Painel\UsuarioController@formAlterarSenha');
    Route::get('/usuario/alterar-email', 'Painel\UsuarioController@formAlterarEmail');
    Route::post('/usuario/alterar-senha', 'Painel\UsuarioController@alterarSenha');
    Route::post('/usuario/alterar-email', 'Painel\UsuarioController@alterarEmail');
    
    
});