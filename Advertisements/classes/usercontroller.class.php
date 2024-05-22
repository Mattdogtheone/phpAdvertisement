<?php

class UserController {
    protected $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function showAllUsers() {
        $users = $this->userService->getAllUsers();
        return $users;
    }

    public function createUser($name) {
        if ($this->userService->createUser($name)) {
            echo "User created successfully.";
        } else {
            echo "Error creating user.";
        }
    }

    public function showUser($id) {
        $user = $this->userService->getUserById($id);
        return $user;
    }
}

?>
