# Soft-app 

## Descrição do Projeto
<p align="center">Aplicação Desenvolvido utilizando a linguagem PHP em conjunto do framework Laravel e Banco de dados Sqlite</p>

## Objetivo
Criar uma aplicação web em PHP com acesso restrito, que exiba uma listagem de livros com as opções de ver os detalhes, editar, deletar e criar um livro, e também exiba o clima atual da sua região.

### Features

- [x] Tela de Login
- [x] Crud de Livros
- [x] Clima da Região


### 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [Laravel](https://laravel.com/)
- [Bootstrap](https://getbootstrap.com/)
- [MySql](https://www.mysql.com/)

###  Demonstração

1) Criar Banco
<p>Com o sqlite basta criar um arquivo chamado database.sqlite na pasta database</p>

2) Instalar as dependências do composer
```bash
composer install
```

3) Instalar dependências npm
```bash
npm install
```

4) Faça uma cópia do env.example
```bash
cp .env.example .env
```

5) Adicione as configurações do banco de dados no arquivo .env
```bash
DB_CONNECTION=sqlite
```

6)  Gerar chave de encriptação do aplicativo
```bash
php artisan key:generate 
```

7)  Migre seu banco de dados
```bash
php artisan migrate 
```

8)Realize a migração do bando
```bash
php artisan migrate 
```

9) Realize o seeder do banco
```bash
php artisan db:seed
```

### Usuário para testes
usuário => teste@gmail.com
senha => password
