<?php

// Define classe Database, responsável por gerenciar a conexão com o banco de dados
class Database
{
    // Padrão Singleton, cujo objetivo é garantir que apenas uma única instância de classe seja criada durante a execução do programa, e que essa instância seja reutiliazda sempre que necessário
    private static $instance = null;

    public static function getConnection() {
        if (!self::$instance) {
            // Configurações de conexão com o BD
            $host = "localhost";
            $db   = "sistema_usuarios";
            $user = "root";
            $pass = "";

            // A conexão usa o driver MySQL (mysql:) e as informações de host e BD
            self::$instance = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            
            // Define o modo de erro para exceções, facilitando a depuração e tratamento do erro
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$instance;
    }
}

?>
