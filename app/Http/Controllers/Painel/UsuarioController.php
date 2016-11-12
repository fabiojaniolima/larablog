<?php

namespace App\Http\Controllers\Painel;

use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Painel\AlterarEmail;
use App\Http\Requests\Painel\AlterarSenha;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = Auth::user();
        
        return view('painel.usuario.perfil', compact('usuario'));
    }
    
    public function formAlterarSenha()
    {
        return view('painel.usuario.alterarSenha');
    }
    
    public function alterarSenha(AlterarSenha $request)
    {                               
        if (!Hash::check($request->senha_atual, Auth::user()->password))
        {
            return back()->withErrors(['senha_atual' => 'Senha incorreta!'])->withInput();
        }
        
        $resultado = Auth::user()->fill(['password' => Hash::make($request->nova_senha)]);        

        if($resultado->save())
        {
            return redirect('/painel/usuario')->with(['status' => 'success', 'mensagem' => 'Senha alterada com sucesso!']);
        }
        
        return redirect('/painel/usuario')->with(['status' => 'danger', 'mensagem' => 'Ocorreu um erro inesperado!']);
    }
    
    public function formAlterarEmail()
    {
        return view('painel.usuario.alterarEmail');
    }
    
    public function alterarEmail(AlterarEmail $request)
    {
        if (!Hash::check($request->senha, Auth::user()->password))
        {
            return back()->withErrors(['senha' => 'Senha incorreta!'])->withInput();
        }
        
        $resultado = Auth::user()->fill(['email' => $request->email]);
        
        if($resultado->save())
        {
            return redirect('/painel/usuario')->with(['status' => 'success', 'mensagem' => 'E-mail alterada com sucesso!']);
        }
        
        return redirect('/painel/usuario')->with(['status' => 'danger', 'mensagem' => 'Ocorreu um erro inesperado!']);
    }
}
