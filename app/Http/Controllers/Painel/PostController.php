<?php

namespace App\Http\Controllers\Painel;

use Auth;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Painel\CadEditPost;

class PostController extends Controller
{
    /**
     * Retorna uma instância de View
     * 
     * @return Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        
        return view('painel.post.listar', compact('posts'));
    }
    
    public function formCadEdit($id = null)
    {
        if($post = Post::find($id))
        {
            // Reescreve o sinal de > (&amp;) para que o editor html consiga mostrar o mesmo
            $post->conteudo = str_replace('&', '&amp;', $post->conteudo);
            return view('painel.post.cad-edit', compact('post'));
        }
        
        return view('painel.post.cad-edit');
    }
    
    public function adicionar(CadEditPost $request)
    {        
        $request->merge(['user_id' => Auth::user()->id]);
        
        if(Post::create($request->all()))
        {
            return redirect('/painel/posts')
                    ->with(['status' => 'success', 'mensagem' => 'Post adicionado com sucesso!']);
        }
        
        return redirect('/painel/posts')
                ->with(['status' => 'error', 'mensagem' => 'Ocorreu um erro ao tentar adicionar o post!']);
    }
    
    public function atualizar(CadEditPost $request)
    {                
        $status = Post::find($request->id)
                            ->update($request->all());
        
        if($status)
        {
            return redirect('/painel/posts')
                    ->with(['status' => 'success', 'mensagem' => 'Post atualizado com sucesso!']);
        }
    }

    public function excluir($id, $excluir = false)
    {        
       if(!$excluir)
        {
            $post = Post::find($id);
            return view('painel.post.excluir', compact('post'));
        }
        
        if(Post::where('id', $id)->delete())
        {
            return redirect('/painel/posts')
                     ->with(['status' => 'success', 'mensagem' => 'Post excluido com sucesso!']);
        }
    }
}
