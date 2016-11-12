# LaraBlog (em desenvolvimento)

Este é um exemplo (beta) de blog escrito com ajuda do Framework **Laravel 5.3**

## Objetivo

A lista abaixo representa os objetivos imediatos, porém, ao longo do projeto novas funcionalidades serão adicionadas ao LaraBlog.

- Site (área pública)
    - [x] Listagem de posts com paginação e botão **Leia mais** (rota => /)
    - [x] Página de apresentação de post (rota => /post/{id})
    - [ ] Link para o perfil do autor
- Painel (área restrita)
    - [x] Sistema de autenticação (rota => /painel)
    - [ ] Dashboard (rota => /painel) 
    - [x] Envio de email de boas vindas para novos usuários (rota => /register)
    - [x] Solicitar email de redefinição de senha (rota => /painel/password/reset)
    - Usuário
        - [x] Alterar e-mail (rota => /painel/usuario/alterar-email)
        - [x] Alterar senha (rota => /painel/usuario/alterar-senha)
        - [ ] Preferências tais como editor de texto, cor do painel etc
    - Post
        - [x] Adicionar novo post (rota => /painel/post/adicionar)
        - [x] Atualizar post (rota => /painel/post/atualizar)
        - [x] Excluir post (rota => /painel/post/excluir/{id})
        - [x] Listar posts (rota => /painel/posts)

Obs: O editor de texto utilizado para criar e editar posts é o Ckeditor (http://ckeditor.com)

## Após download dos fontes

Acesse o diretório descarregado e execute o comando abaixo para descarregar as dependências necessárias:

```
composer install
```

Crie o arquivo de configuração do Laravel e posteriormente gere uma chave:

```
cp .env.example .env
php artisan key:generate
```

O arquivo .env é onde você configura os dados de acesso ao banco de dados.

Posteriormente a configuração do banco execute:
```
php artisan migrate
php artisan db:seed
```

Você pode editar o arquivo **database/seeds/UsersTableSeed.php** para definir as informações de login do administrador.

Pronto, agora abra o navegador e acessa sua aplicação. No canto esquerdo terá o menu para efetuar login na tela administrativa.

## Licença
Essa iniciativa segue a licença MIT confira [clicando aqui](license)
