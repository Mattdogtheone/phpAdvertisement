<?php

    class UsersController extends Users {

        public function createUser($name) {
            $this->setUser($name);
        }
        
    }

?>