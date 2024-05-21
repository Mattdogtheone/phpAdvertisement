<?php

    class UsersView extends Users {
        
        public function showUsers() {
            $results = $this->getUsers();
            return $results;
        }

        public function showNumberOfAds() {
            $results = $this->getNumberOfAds();
            return $results;
        }
    }

?>