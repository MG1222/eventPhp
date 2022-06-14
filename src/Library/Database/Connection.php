<?php

namespace Library\Database;

use PDO;

class Connection
{
    protected PDO $pdo;
    
    public function __construct(array $config)
    {
        $this->pdo = new PDO(
            "mysql:host={$config['host']};dbname={$config['dbname']};charset=UTF8",
            $config['user'],
            $config['password'], [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
    }

    public function getResults(string $sql, ?array $param = null): array
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($param);
        
        return $query->fetchAll();
    }
    
    /* Crud */
    
    public function execute(string $sql, ?array $param = null): string|false
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($param);
        
        return $this->pdo->lastInsertId();
    }
    
    public function getPdo(): PDO
    {
        return $this->pdo;
    }
    
    public function setPdo(PDO $pdo): void
    {
        $this->pdo = $pdo;
    }
    
}