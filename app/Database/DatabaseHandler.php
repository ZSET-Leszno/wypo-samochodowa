<?php

/**
 * Database handler
 * @package App\Database
 * @author @michus.studio
 * @license MIT
 * @version 0.1.0
 * @since 0.1.0
 */

namespace App\Database;

use App\Config\AppConfig;

class DatabaseHandler
{
    private AppConfig $config;

    public function __construct()
    {
        $this->config = new AppConfig();
        try {
            return $pdo = $this->connect();
        } catch (\PDOException $e) {
            die('Database connection error: ' . $e->getMessage());
        }
    }

    public function connect(): \PDO
    {
        return $pdo = new \PDO("mysql:host={$this->config->db['host']};dbname={$this->config->db['name']}", $this->config->db['user'], $this->config->db['password']);
    }

    public function query(string $query, array $params = []): \PDOStatement
    {
        $stmt = $this->connect()->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }

}