<?php

    class Users extends Db {

        protected function getUsers() {
            $sql = "SELECT * FROM users";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll();

            return $result;
        }

        protected function setUser($name) {
            $sql = "INSERT INTO users(name) VALUES (?)";
            $stmt = $this->connect()->prepare($sql);
            if ($stmt->execute([$name])) {
                echo "Adatok sikeresen mentve.";
            } else {
                echo "Hiba történt: " . $stmt->error;
            }
            
        }
    }

?>