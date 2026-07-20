<?php

require_once 'Model.php';

class User extends Model {
    private $table = 'usuarios';

    public function getAll(){
        $smtm = $this->conn->query("SELECT * FROM {$this->table}");
        return $smtm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id){
        $smtm = $this->conn->prepare("SELECT * FROM {$this->table} WHRE id = :id");
        $smtm->execute(['id' => $id]);
        return $smtm->fetch(PDO::FETCH_ASSOC);
    }

    public function create($name, $email){
        $smtm = $this->conn->prepare("INSERT INTO {$this->table} (nome, email) VALUES (:name, :email)");
        return $smtm->execute(['name' => $name, 'email' => $email]);
    }

    public function update($id, $name, $email){
        $smtm = $this->conn->prepare("UPDATE {$this->table} SET nome = :name, email = :email = WHERE id = :id");
        return $smtm->execute(['id' => $id, 'nome' => $name, 'email' => $email]);
    }


    public function delete($id){
        $smtm = $this->conn->prepare("DELETE FROM {$this->table} WHERE id = :id");
        return $smtm->execute(['id' => $id]);
    }
}