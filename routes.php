<?php
//Inclui arquivos de controlador necessarios para lidar com diferentes ações
require 'controllers/AuthController.php'; //inclui o controlador de autenticação
require 'controllers/UserController.php'; //inclui o controlador de usuários
require 'controllers/DashboardController.php'; //inclui o controlador de dashboard

//Cria instâncias dos controladores para utilizar seus métodos
$authController = new AuthController(); // Instancia controlador de autenticação
$userController = new UserController(); // Instancia controlador de usuário
$dashboardController = new DashboardController(); // Instancia controlador de dashboard

//Coleta a ação de URL, senão houver ação definida, usa 'login' como padrão
$action = $_GET['action'] ?? 'login'; //Usa operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente

switch($action){
    case 'login' :
        $authController->login(); // Chama o método de login do controlador de autenticação
        break;
     case 'register':
        $userController->register();
        break;
    default:
        $authController->login();
        break;
    }



?>