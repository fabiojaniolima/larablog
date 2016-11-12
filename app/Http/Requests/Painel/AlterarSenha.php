<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class AlterarSenha extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'senha_atual' => 'required|max:255',
            'nova_senha' => 'required|min:8|max:255|different:senha_atual',
            'confirmar_nova_senha' => 'same:nova_senha',
        ];
    }
    
    public function messages()
    {
        return [
            'senha_atual.required' => 'Campo obrigatório!',
            'nova_senha.required' => 'Campo obrigatório!',
            'confirmar_nova_senha.same' => 'Deve ser igual a nova senha',
        ];
    }
}
