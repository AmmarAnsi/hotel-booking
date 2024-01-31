<?php
// namespace App;
// use PDO;
// use PDOException;

class Connection
{
    /**
     * Create a new PDO connection.
     *
     * @param array $config
     */
    public static function make()
    {
        $config = require_once(__DIR__ . '\\..\\config.php');
        $db = $config['database'];

        try {
            return new PDO(
                $db['connection'].';dbname='.$db['name'],
                $db['username'],
                $db['password'],
                $db['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}