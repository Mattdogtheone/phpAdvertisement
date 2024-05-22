<?php

class UserService {
    protected $userModel;

    public function __construct(User $userModel) {
        $this->userModel = $userModel;
    }

    public function getAllUsers() {
        return $this->userModel->getAllUsers();
    }

    public function createUser($name) {
        return $this->userModel->createUser($name);
    }

    public function getUserById($id) {
        return $this->userModel->getUserById($id);
    }
}

?>
