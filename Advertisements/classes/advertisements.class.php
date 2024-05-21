<?php

    class Advertisements extends Db {

        protected function getAdvertisements() {
            $sql = "SELECT users.name, advertisements.title FROM users INNER JOIN advertisements ON advertisements.userid = users.id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll();

            return $result;
        }

        protected function setAdvertisement($userid, $title) {
            $sql = "INSERT INTO advertisements(userid, title) VALUES (?, ?)";
            $stmt = $this->connect()->prepare($sql);
            if ($stmt->execute([$userid, $title])) {
                echo "Success!";
            } else {
                echo "Error: " . $stmt->error;
            }
        }
    }

?>