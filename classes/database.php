<?php 
    session_start();

    class Database{
        private $servername = "localhost";
        private $username = "root";
        private $password = "root";
        private $db_name = "portfolio-sept";
        public $conn;

        function __construct(){
            return $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db_name,);
        }
    }