<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Notifications\NotificarTrocaSenha;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Utiliza uma instância de App\Notifications\ResetPassword para enviar
     * um link de redefinição de senha
     * 
     * @param string $token
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new NotificarTrocaSenha($token));
    }
}
