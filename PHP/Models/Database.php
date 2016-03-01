<?php

/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 16/12/2015
 * Time: 15:58
 */
class Database {

    protected static $instance = null;
    protected $dbh;

    public static function getInstance() {
        $username = 'root';
        $password = '';
        $host = 'localhost';
        $dbname = 'doovde';

        if (self::$instance === null) { //checks if the object exists
            // creates new instance if not, sending in connection info
            self::$instance = new self($username, $password, $host, $dbname);
        }

        return self::$instance;
    }

    private function __construct($username, $password, $host, $database) {
        try {
            $this->dbh = new \PDO("mysql:host=$host;dbname=$database", $username, $password); // creates the database handler with connection info
        } catch (\PDOException $e) {
            echo($e->getMessage());
        }
    }

    public function getDbh() {
        return $this->dbh; // returns the database handler to be used elsewhere
    }

    public function __destruct() {
        $this->dbh = null; // destroys the database handler when no longer needed
    }

}
