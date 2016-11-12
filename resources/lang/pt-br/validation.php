<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':Attribute deve ser aceito.',
    'active_url'           => ':Attribute não é uma URL válida.',
    'after'                => ':Attribute deve ser uma data depois de :date.',
    'alpha'                => ':Attribute deve conter somente letras.',
    'alpha_dash'           => ':Attribute deve conter letras, números e traços.',
    'alpha_num'            => ':Attribute deve conter somente letras e números.',
    'array'                => ':Attribute deve ser um array.',
    'before'               => ':Attribute deve ser uma data antes de :date.',
    'between'              => [
        'numeric' => ':Attribute deve estar entre :min e :max.',
        'file'    => ':Attribute deve estar entre :min e :max kilobytes.',
        'string'  => ':Attribute deve estar entre :min e :max caracteres.',
        'array'   => ':Attribute deve ter entre :min e :max itens.',
    ],
    'boolean'              => ':Attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmação de :attribute não confere.',
    'date'                 => ':Attribute não é uma data válida.',
    'date_format'          => ':Attribute não confere com o formato :format.',
    'different'            => ':Attribute e :other devem ser diferentes.',
    'digits'               => ':Attribute deve ter :digits dígitos.',
    'digits_between'       => ':Attribute deve ter entre :min e :max dígitos.',
    'dimensions'           => ':Attribute tem dimensões inválidas para uma imagem.',
    'distinct'             => ':Attribute tem um campo com valor duplicado.',
    'email'                => ':Attribute deve ser um endereço de e-mail válido.',
    'exists'               => 'A seleção :attribute é inválida.',
    'file'                 => ':Attribute deve ser um arquivo.',
    'filled'               => ':Attribute é um campo obrigatório.',
    'image'                => ':Attribute deve ser uma imagem.',
    'in'                   => 'A seleção :attribute é inválida.',
    'in_array'             => ':Attribute não existe em :other.',
    'integer'              => ':Attribute deve ser um inteiro.',
    'ip'                   => ':Attribute deve ser um IP válido.',
    'json'                 => ':Attribute deve ser uma string JSON válido.',
    'max'                  => [
        'numeric' => ':Attribute não pode ser superior a :max.',
        'file'    => ':Attribute não pode ser superior a :max kilobytes.',
        'string'  => ':Attribute não pode ser superior a :max caracteres.',
        'array'   => ':Attribute não pode ser superior a :max itens.',
    ],
    'mimes'                => ':Attribute deve ser um arquivo do tipo: :values.',
    'mimetypes'            => ':Attribute deve ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => ':Attribute deve ser igual ou maior que :min.',
        'file'    => ':Attribute deve ter pelo menos :min kilobytes.',
        'string'  => ':Attribute deve ter pelo menos :min caracteres.',
        'array'   => ':Attribute deve ter pelo menos :min itens.',
    ],
    'not_in'               => 'A seleção :attribute é inválida.',
    'numeric'              => ':Attribute deve ser um número.',
    'present'              => ':Attribute deve estar presente.',
    'regex'                => ':Attribute com formato inválido.',
    'required'             => ':Attribute é um campo obrigatório.',
    'required_if'          => ':Attribute é obrigatório quando :other é :value.',
    'required_unless'      => ':Attribute é obrigatório a menos que :other esteja em :values.',
    'required_with'        => ':Attribute é obrigatório quando :values está presente.',
    'required_with_all'    => ':Attribute é obrigatório quando :values estão presentes.',
    'required_without'     => ':Attribute é obrigatório quando :values não está presente.',
    'required_without_all' => ':Attribute é obrigatório quando nenhum dos valores :values estão presentes.',
    'same'                 => ':Attribute e :other devem ser iguais.',
    'size'                 => [
        'numeric' => ':Attribute deve ser igual a :size.',
        'file'    => ':Attribute deve ter :size kilobytes.',
        'string'  => ':Attribute deve ter :size caracteres.',
        'array'   => ':Attribute deve conter :size itens.',
    ],
    'string'               => ':Attribute deve ser uma string.',
    'timezone'             => ':Attribute deve ser um timezone válido.',
    'unique'               => ':Attribute já existe.',
    'uploaded'             => ':Attribute falha no upload.',
    'url'                  => ':Attribute com formato inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
