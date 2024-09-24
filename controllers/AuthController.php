<?php
//Requer o arquivo user que contem o model user com as funções de manupulação de dados de usuarios
require_once 'models/user.php';
 
class AuthController
{
   // Função responsavel para processo de login
   public function login()
   {
      // Verifica se a requesição HHTTP é do tipo POST, ou seja, se o formulario foi enviado
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {

      // Obter os valores do formulário
      $email = $_POST['email'];

      $senha = $_POST['senha'];

      // Chama o método de model para encontrar o usuário pelo email
      $user = User ::findByemail($email);
      if($user && password_verify($senha, $user['senha'])){ // Verifica se a senha corresponde a um hash]
         session_start();

         //Armazena na sessão o ID do usuário que está logado e seu perfil

      $_SESSION['usuario_id'] = $user['id'];
      $_SESSION['perfil'] = $user['perfil'];
      header('');
      }
      }
   }


}

?>
 