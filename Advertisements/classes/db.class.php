<?php

    /**
     * 
     * class Db
     * This class is the provider for the database connection having the 4 parameters that is needed for the mentioned connection
     */
    class Db {

        /**
         * 
         * private $host The host that runs the mySQL server
         * private $user The username that is needed for the connection
         * private $pwd The password that is needed for the connection
         * private $dbName The name of the database where the tables are
         * 
         */

        private $host = "localhost";
        private $user = "root";
        private $pwd = "";
        private $dbName = "advertisements";

        /**
         * function connect()
         * This function sets up the connection for the Model layers
         * 
         * @return PDO $pdo Returns the initialized PDO that is required for the connection to the database
         */

        protected function connect() {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
    }

?>