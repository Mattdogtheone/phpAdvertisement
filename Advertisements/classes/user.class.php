<?php

/**
 * 
 * class User
 * This is the Model class for the users table. It has the following three functions. getAllUsers(), createUser() and getUserById()
 * 
 */

class User extends Db {
    
    /**
     * function getAllUsers()
     * This function is the one that fetches all the users from the users table
     * 
     * @return array fetchAll Returns the fetched data in a form of an associative array with the keys of 'id' and 'name'
     */

    public function getAllUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * function createUser()
     * This function is the one that inserts a new user to the users table
     * 
     * @param string $name The new user name that has been provided by the user
     * @return bool execute Returns the state of the execute which could be either true or false
     */

    public function createUser($name) {
        $sql = "INSERT INTO users (name) VALUES (?)";
        $stmt = $this->connect()->prepare($sql);

        return $stmt->execute([$name]);
    }

    /**
     * function getUserById()
     * This function is the one that fetches one of the users from the users table with a provided id
     * 
     * @param int $id
     * @return array fetchAll Returns the fetched data in a form of an associative array with the keys of 'id' and 'name'
     */

    public function getUserById($id) {
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>
