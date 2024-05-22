<?php

/**
 * 
 * class UserService
 * 
 * This is the service layer of the users table. This is the layer in between the Model and the Controller layers
 * It has a protected variable called $userModel
 * 
 */

class UserService {
    protected $userModel;

    /**
     * 
     * Constructor of UserService
     * This constructor initializes the protected variable as an object of User(Model)
     * 
     * @param User $userModel Initialization of the variable as an object of User
     * 
     */

    public function __construct(User $userModel) {
        $this->userModel = $userModel;
    }

    /**
     * 
     * function getAllUsers()
     * Calls the function getAllUsers from User through the object named userModel 
     * 
     * @return func getAllUsers() Returns the function from User class (Model) to the Controller
     * 
     */

    public function getAllUsers() {
        return $this->userModel->getAllUsers();
    }

    /**
     * 
     * function createUser()
     * Calls the function createUser from User through the object named userModel
     * 
     * @param string $name Data that has been passed down by the controller
     * 
     * @return function createUser($name) Returns the function from User class (Model) to the Controller
     * 
     */

    public function createUser($name) {
        return $this->userModel->createUser($name);
    }

    /**
     * 
     * function getUserById()
     * Calls the function getUserById from User through the object named userModel 
     * 
     * @param int $id Data that has been passed down by the controller
     * 
     * @return func getUserById() Returns the function from User class (Model) to the Controller
     * 
     */

    public function getUserById($id) {
        return $this->userModel->getUserById($id);
    }
}

?>
