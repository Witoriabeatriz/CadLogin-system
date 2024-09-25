<?php
 
class UserController{
 
    public function register(){
       //verifica se a requisição HTTP é do tipo POST (se o formulario foi enviado)
       if($_SERVER['REQUEST_METHOD']== 'POST'){
        //coleta os dados enviado pelo o formulario e organiza em uma array
        $data = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT), //criptografa a senha
            'perfil' => $_POST['perfil']
        ];
 
        //Chama o metodo create do model User para criar p novo usuario no BD
        user::create($data);
 
        header('Location: index.php');
 
       }else{
        include 'views/register.php';
       }
    }
}
?>