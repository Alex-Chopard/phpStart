<?php

// Singleton for open an unique connection to MySql.
class Db {
    private static $instance;
    private $connection;

    private function __construct() {
        $this->connection =  new mysqli("localhost", "phpmyadmin", "root");
        $this->connection->select_db("phpmyadmin" );
    }

    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new Db();
        }
        return self::$instance->connection;
    }
}