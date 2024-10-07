<?php
class DashboardController
{
    // Inicia uma sessão para verificar se o usuário está autenticado
    public function index(){
        session_start();
        if(!isset($_SESSION['usuario_id'])){
            
        }
    }

}
?>