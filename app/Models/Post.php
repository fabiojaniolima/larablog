<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'titulo', 'conteudo', 'user_id', 'capa', 'status'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
