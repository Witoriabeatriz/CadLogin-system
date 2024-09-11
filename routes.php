<?php
//Inclui arquivos de controlador necessarios para lidar com diferentes ações
require 'controllers/AuthController.php'; //inclui o controlador de autenticação
require 'controllers/UserController.php'; //inclui o controlador de usuários
require 'controllers/DashboardController.php'; //inclui o controlador de dashboard

// Cria instâncias dos controladores para utilizar seus metodos
$authController = new AuthController(); // Instancia controlador de autenticação
$userController = new UserController(); // Instancia controlador de usuário
$dashboardController = new DashboardController(); // Instancia controlador de dashboard


?>