
# Projeto Sistema de Usuários

Este projeto é um sistema de gerenciamento de usuários desenvolvido em PHP, utilizando o padrão **MVC (Model-View-Controller)** para organizar a estrutura do código.

## Tecnologias Utilizadas

- **PHP**: Linguagem principal do projeto
- **PDO**: Para conexão segura ao banco de dados
- **HTML5/CSS3**: Estrutura e design das páginas
- **MySQL**: Banco de dados para armazenar informações dos usuários

## Estrutura do Projeto

O projeto segue a arquitetura **MVC** para separar a lógica de negócio, a interface do usuário e o gerenciamento de dados. As pastas principais são:

- **Models**: Contém as classes responsáveis pela manipulação dos dados.
- **Controllers**: Lida com as requisições HTTP e aciona os métodos dos Models.
- **Views**: Arquivos HTML responsáveis pela interface com o usuário.

### Diretórios

- **models/**: Contém o arquivo `user.php` que define a classe `User` e manipula as operações no banco de dados.
- **controllers/**: Inclui os arquivos `AuthController.php` e `UserController.php`, responsáveis pela lógica de autenticação e de gerenciamento de usuários.
- **views/**: Contém arquivos HTML para as páginas de login, cadastro e outras funcionalidades.

## Instalação

1. Clone este repositório:

   ```bash
   git clone https://github.com/seuusuario/projeto-sistema-usuarios.git
   ```

2. Crie o banco de dados:

   ```sql
   CREATE DATABASE sistema_usuarios;
   ```

3. Configure as credenciais de acesso ao banco no arquivo `Database.php` localizado em `models/Database.php`.

   ```php
   $host = 'localhost';
   $db = 'sistema_usuarios';
   $user = 'root';
   $password = '';
   ```

4. Execute as migrações ou importe o script SQL para criar as tabelas necessárias.

## Funcionalidades

### Cadastro de Usuário

Na página de cadastro (`views/register.php`), o usuário pode preencher um formulário com nome, e-mail, senha e perfil. O controlador `UserController.php` lida com a criação do novo usuário no banco de dados, utilizando o método `register`.

### Login

A página de login (`views/login.php`) permite que usuários já cadastrados acessem suas contas. A autenticação é feita pelo controlador `AuthController.php`, utilizando o método `login`.

### Perfis de Usuário

Os perfis disponíveis são:
- **Admin**: Tem acesso a todas as funcionalidades do sistema.
- **Gestor**: Gerencia usuários e suas informações.
- **Colaborador**: Acesso limitado às suas informações pessoais.

## Padrão de Projeto

O projeto segue o padrão **MVC** (Model-View-Controller), que permite a separação das responsabilidades em três camadas:

- **Model (Modelo)**: Manipula os dados e interage com o banco de dados.
- **View (Visão)**: Exibe as informações para o usuário.
- **Controller (Controlador)**: Controla o fluxo de dados entre o Model e a View, além de lidar com as requisições HTTP.

## Rotas

As rotas do sistema são configuradas no arquivo `routes.php`, que redireciona as requisições para o controlador adequado, com base na ação definida na URL.
