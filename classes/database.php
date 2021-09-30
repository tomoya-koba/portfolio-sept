<?php 
    session_start();

    class Database{
        private $servername = "us-cdbr-east-04.cleardb.com";
        private $username = "bf4d33fd1525b8";
        private $password = "c5791799";
        private $db_name = "heroku_1fdf15f259283b0";
        public $conn;

        function __construct(){
            return $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db_name,);
        }
    }