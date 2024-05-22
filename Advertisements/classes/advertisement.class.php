<?php

/**
 * Class Advertisement
 * 
 * This class is the Model for advertisements in the database. It has the following two functions.
 * 
 */

class Advertisement extends Db {
    
    /**
     * 
     * function getAllAdvertisements()
     * 
     * This function fetches all the data in the advertisements table and returns them in an array 
     * with the keys of 'name' and 'title'
     * 
     * @return array Where each data is an associative array with the aforementioned keys
     */

    public function getAllAdvertisements() {
        $sql = "SELECT users.name, advertisements.title 
                FROM users 
                INNER JOIN advertisements ON advertisements.userid = users.id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * 
     * function createAdvertisement()
     * 
     * This function inserts the given data into the advertisements database, 
     * where the userid had been selected from the users table
     * 
     * @param int $userId A piece of data thats been fetch from the users table
     * @param string $title A string that the user has to provide
     * @return bool Returns the information for the execution of the sql statement. It is either true or false
     */

    public function createAdvertisement($userId, $title) {
        $sql = "INSERT INTO advertisements(userid, title) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        
        return $stmt->execute([$userId, $title]);
    }
}

?>
