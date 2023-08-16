<?php
declare(strict_types=1);

namespace App\Model;

class Movie
{
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function find($id){
        $sentencia = $this->db->prepare("SELECT * FROM movies WHERE id = :id");
        $sentencia->execute(compact('id'));
        return $sentencia->fetch();
    }

    public function findAll(){
        $sentencia = $this->db->prepare("SELECT * FROM movies");    
        $sentencia->execute();    
        return $sentencia->fetchAll();        
    }

    public function insert($movie){
        $sql = "INSERT INTO
                    movies
                    (name, year, director, summary)
                VALUES
                    (:name, :year, :director, :summary)";
        $sentencia = $this->db->prepare($sql);
        $sentencia->execute($movie);
        return $this->db->lastInsertId();        
    }

    public function delete($id){
        $sql = "DELETE FROM
                    movies
                    WHERE :id = id";
        $sentencia = $this->db->prepare($sql);
        $id = intval($id);
        $sentencia->execute(["id" => $id]);
        return $id;        
    }
}