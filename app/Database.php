<?php

class Database{

    private string $host;
    private string $db;
    private string $user;
    private string $pass;
    private string $charset;
    private PDO $connection;
    
    public function __construct()
    {
        
        $this->host = getenv('DB_HOST');
        $this->db = getenv('DB_NAME');
        $this->user = getenv('DB_USER');
        $this->pass = getenv('DB_PASS');
        $this->charset = 'utf8mb4';

        
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
        
        $this->connection = new PDO($dsn, $this->user, $this->pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);

    }
    
    
    public function query($query, $params = []): array {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    /*public function getPessoasByName(string $name): array {
        $stmt = $this->connection->prepare('SELECT * FROM pessoas WHERE name = :name');
        $stmt->bindValue(':name', $name);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function getPessoaByEmail(string $email): ?array {
        $stmt = $this->connection->prepare('SELECT * FROM pessoas WHERE email = :email');
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        return $stmt->fetch() ?: null;
    }*/

}

?>