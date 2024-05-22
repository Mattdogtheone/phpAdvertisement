<?php

/**
 * 
 * class UserController
 * This is the controller layer of the users which manages the data between the user and the upper layers (UserService and User)
 * It has a protected variable called $userService
 * 
 */

class UserController {
    protected $userService;

    /**
     * 
     * This is the constructor of the class, which initializes the protected variable $userService. The variable becomes an object of the class UserService
     * 
     * @param UserService $userService Initialization of the variable as an object of UserService
     * 
     */

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    /**
     * 
     * function showAllUsers()
     * This function is calling the getAllUsers() which is in the function in the UserService through the object $userService
     * 
     * @return array $users Returns an array of data from users table. The array has two keys named 'id' and 'name' 
     */

    public function showAllUsers() {
        $users = $this->userService->getAllUsers();
        return $users;
    }

    /**
     * 
     * function createUser()
     * This function is calling the createUser() function in the UserService through the object $userService
     * 
     * @param string $name Data that the user had chosen from the users table
     * 
     */

    public function createUser($name) {
        if ($this->userService->createUser($name)) {
            echo "User created successfully.";
        } else {
            echo "Error creating user.";
        }
    }

    /**
     * 
     * function showUser()
     * This function is calling the getUserById() function in the UserService through the object $userService
     * 
     * @param int $id Data that the user had chosen from the users table
     * 
     */

    public function showUser($id) {
        $user = $this->userService->getUserById($id);
        return $user;
    }
}

?>
