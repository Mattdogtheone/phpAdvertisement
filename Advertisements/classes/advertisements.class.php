<?php

    class Advertisements extends Db {

        protected function getAdvertisements() {
            $sql = "SELECT users.name, advertisments.title FROM users INNER JOIN advertisments ON advertisments.userid = users.id ";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll();

            return $result;
        }
    }

?>