<?php
require_once 'database.php';

class User{

    private $conn;

    function __construct()
    {
        $db = new Database();
        $this->conn = $db->connection();
    }

    function index(){
        $query = "SELECT * FROM users;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function edit($dados)
    {
        $query = "UPDATE users SET name = :name, email = :email,  password = :password, type = :type WHERE id = :id;";
        $stmt = $this->conn->prepare($query);

        try{
            $stmt->execute($dados);
            return 1;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function delete($dados)
    {
        $query = "DELETE FROM users WHERE id = :id;";
        $stmt = $this->conn->prepare($query);
    

        try{
            $stmt->execute($dados);
            return 1;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function create($dados)
    {
        $query = "INSERT INTO users (`id`, `name`, `email`, `password`,`type`) VALUES (NULL, :name, :email, :password, :type);";
        $stmt = $this->conn->prepare($query);
        
        try{
            $stmt->execute($dados);
            return 1;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function view($dados)
    {
        $query = "SELECT * FROM users WHERE id = :id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($dados);
        return $stmt;
    }

    public function login($usuario){
        $query = "SELECT * FROM users WHERE email = :email AND password = :password;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($usuario);
        return $stmt;
    }

} 