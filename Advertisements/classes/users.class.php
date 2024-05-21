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
                echo "Success.";
            } else {
                echo "Error: " . $stmt->error;
            }
            
        }
        protected function getNumberOfAds() {
            $sql = "SELECT userid, COUNT(advertisements.id) AS NumberOfAdvertisements FROM users JOIN advertisements ON users.id = advertisements.userid GROUP BY users.name ORDER BY users.id";
            $stmt = $this->connect()->prepare($sql);
            
            $result = $stmt->execute();

            return $result;
        }
    }

?>