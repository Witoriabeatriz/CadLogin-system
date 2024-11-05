<?php

class UserController
{
    public function register() {
        // Verifica se a requisição HTTP é do tipo POST (se o formulário foi enviado)
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Coleta os dados enviados pelo formulário e organiza em um array
            $data = [
                "nome"   => $_POST["nome"],
                "email"  => $_POST["email"],
                "senha"  => password_hash($_POST["senha"], PASSWORD_DEFAULT), // Criptografa a senha
                "perfil" => $_POST["perfil"]
            ];

            // Chama o método create do model User para criar o novo usuário no BD
            User::create($data);

            header("Location: index.php");
        } else {
            include "views/register.php";
        }
    }

    // Função para listar todos os usuários
    public function list() {
        $users = User::all();
        include "views/list_users.php";
    }
    public function edit($ID){
        session_start();
        if($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'){

            $user = User::find($ID);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $data = [
                    "nome"   => $_POST["nome"],
                    "email"  => $_POST["email"],
                    "perfil" => $_POST["perfil"]
                ];
                User::update($ID, $data);
                header('Location: index.php? action=list');
            } else{
                include 'views/edit_user.php';
            }
        }else{
            echo 'Você não tem permissão para editar usuários';
        }
            }
            public function delete($ID){
                User::delete($ID);
                header('Location: index.php?action=list');
            }
        }
?>