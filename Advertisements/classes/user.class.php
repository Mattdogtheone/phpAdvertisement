<?php

class User extends Db {
    

    public function getAllUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function createUser($name) {
        $sql = "INSERT INTO users (name) VALUES (?)";
        $stmt = $this->connect()->prepare($sql);

        return $stmt->execute([$name]);
    }


    public function getUserById($id) {
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>
