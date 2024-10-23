<?php
// Define classe Database, responsável por gerenciar conexão com banco de dados
class Database{
    // Padrão singleton, cujo objetivo é garantir que apenas uma única instância de classe seja criada durante a execução do programa, e que essa instância seja reutilizada sempre que necessário
    private static $instance = null;
    public static function getConnection(){
        if(!self::$instance){
            //configuração de conexão com BD
            $host        = 'localhost';
            $db          = 'sistema_usuarios';
            $user        = 'root';
            $password    = '';

            // A conexão usa o driver Mysqli (mysql:) e as informações de host e BD
            self::$instance = new PDO("mysql:host=$host;dbname=$db", $user, $password);
           // Define o modo de erro para exeções, facilitando a depuração e tratamento de erro
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}



?>