<?php

  // method 1 for creating DB connection
  // $connection = mysqli_connect("localhost", "root", "creative_group", "demo_api_db");

  class Database {

    private $host = "localhost";
    private $db_name = "demo_api_db";
    private $username = "root";
    private $password = "create_group";
    public $conn;

    // get the database connection
    public function getConnection() {

      $this->conn = null;

      try {

        $this>conn = new PDO("mysql:host=" . $this->host . ";dbname="
        $this->conn->exec("set names utf8");

      } catch(PDOExcepction $exception) {

        echo "Connection error: " . $exception->getMessage();

      }

      return $this->conn; 

    }

  }



 ?>
