<?php
require_once 'models/database.php';

class User {
    // Função para encontrar usuário pelo email
    public static function findByemail($email) {
        // Obter conexão com o banco de dados
        $conn = Database::getConnection();
        
        // Prepara consulta SQL para buscar usuários pelo email
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute(['email' => $email]);

        // Retorna dados do usuário encontrado como um array associativo
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Função que localiza usuário pelo ID
    public static function find($id) {
        // Obtém conexão com o banco de dados 
        $conn = Database::getConnection();
        
        // Prepara consulta SQL para buscar usuário pelo ID
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);

        // Retorna dados do usuário encontrado como um array associativo
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Função para criar o usuário na base de dados 
    public static function create($data) {
        $conn = Database::getConnection();

        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
        
        $stmt->execute($data);

    }
}


?>