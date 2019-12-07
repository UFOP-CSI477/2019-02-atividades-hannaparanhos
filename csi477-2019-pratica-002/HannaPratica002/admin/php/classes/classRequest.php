<?php
require_once 'database.php';

class Request{

    private $conn;

    function __construct()
    {
        $db = new Database();
        $this->conn = $db->connection();
    }

    function indexAdm(){
        $query = "SELECT r.id, s.name AS SNome, u.nome AS UNome, r.date, s.price FROM requests r; users u, subjects s WHERE r.subjects_id = s.id AND r.users_id = u.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function indexUser($iduser){
        $query = "SELECT r.id, s.name AS SNome, u.nome AS UNome, r.date, s.price FROM requests r; users u, subjects s WHERE r.subjects_id = s.id AND r.users_id = u.id AND r.user_id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $iduser);
        $stmt->execute();
        return $stmt;
    }

    public function edit($dados)
    {
        $query = "UPDATE requests SET description = :description, date = :date,  subjects_id = :subjects_id, users_id = :users_id WHERE id = :id;";
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
        $query = "DELETE FROM requests WHERE id = :id;";
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
        $query = "INSERT INTO `requests` (`id`, `description`, `date`, `subjects_id`, `users_id`) VALUES (NULL, :description, :date, :subjects_id, :users_id);";
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
        $query = "SELECT * FROM requests WHERE id = :id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($dados);
        return $stmt;
    }

} 