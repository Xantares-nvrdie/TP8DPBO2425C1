<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "campus";

    protected $conn;

    function __construct() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$this->conn) {
            die("Database connection failed!");
        }
    }

    function execute($query) {
        return mysqli_query($this->conn, $query);
    }

    function fetchAll($query) {
        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    function fetchOne($query) {
        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_assoc($result);
    }
}
