<?php
require_once 'database.php';

class Subject{

    private $conn;

    function __construct()
    {
        $db = new Database();
        $this->conn = $db->connection();
    }

    function index(){
        $query = "SELECT * FROM subjects;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function edit($dados)
    {
        $query = "UPDATE subjects SET name = :name, price = :price WHERE id = :id;";
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
        $query = "DELETE FROM subjects WHERE id = :id;";
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
        $query = "INSERT INTO subjects (`id`, `name`, `price`) VALUES (NULL, :name, :price);";
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
        $query = "SELECT * FROM subjects WHERE id = :id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($dados);
        return $stmt;
        
    }

} 