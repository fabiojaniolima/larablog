<?php

namespace App\Http\Controllers\Site;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'Ativo')
                        ->orderBy('created_at', 'desc')
                        ->paginate(10);
        
        return view('site.index', compact('posts'));
    }

    public function mostrar($id)
    {
        $post = Post::find($id);
        
        return view('site.post.mostrar', compact('post'));
    }
}
