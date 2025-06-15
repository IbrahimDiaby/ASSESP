<?php
    class Database {

        private $DB_HOST = "localhost";
        // private $DB_HOST = "localhost";
        private $DB_PORT = 3306;
        // private $DB_PORT = 8889;
        private $DB_NAME = "ASSESP";
        // private $DB_NAME = "administrators";
        private $DB_USERNAME = "root";
        // private $DB_USERNAME = "root";
        private $DB_PASSWORD = "root";
        // private $DB_PASSWORD = "root";

        private $DB_TABLENAME = "admin";
        // private $DB_TABLENAME = "administrators";
        private $DB;

        private $error = [];
        private $status = false;

        // GETTERS

        public function getDB() {
            return $this->DB;
        }
        public function getDB_TABLENAME() {
            return $this->DB_TABLENAME;
        }

        public function getDB_PASSWORD() {
            return $this->DB_PASSWORD;
        }

        public function getDB_USERNAME() {
            return $this->DB_USERNAME;
        }

        public function getDB_HOST() {
            return $this->DB_HOST;
        }

        public function getDB_NAME() {
            return $this->DB_NAME;
        }

        public function getDB_PORT() {
            return $this->DB_PORT;
        }

        // SETTERS

        public function setDB($DB) {
            $this->DB = $DB;
        }
        public function setDB_TABLENAME($DB_TABLENAME) {
            $this->DB_TABLENAME = $DB_TABLENAME;
        }

        public function setDB_PASSWORD($DB_PASSWORD) {
            $this->DB_PASSWORD = $DB_PASSWORD;
        }

        public function setDB_USERNAME($DB_USERNAME) {
            $this->DB_USERNAME = $DB_USERNAME;
        }

        public function setDB_HOST($DB_HOST) {
            $this->DB_HOST = $DB_HOST;
        }

        public function setDB_NAME($DB_NAME) {
            $this->DB_NAME = $DB_NAME;
        }

        public function setDB_PORT($DB_PORT) {
            $this->DB_PORT = $DB_PORT;
        }

        // LOGIC
        public function __construct() {
            $this->connexion();
        }

        public function getError(){
            return $this->error;
        }

        public function setError($error) {
            $this->error = $error;
        }

        public function getStatus(){
            return $this->status;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function connexion() {
            try {
                $dsn = "mysql:host=" . $this->getDB_HOST() . ";port=" . $this->getDB_PORT() . ";dbname=" . $this->getDB_NAME();
                // $dsn = "mysql:host=" . $this->getDB_HOST() . ";dbname=" . $this->getDB_NAME();
                $db = new PDO($dsn, $this->getDB_USERNAME(), $this->getDB_PASSWORD(),
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $this->setDB($db);
                $this->setStatus(true);
            } catch(Exception $e) {
                var_dump($e);
                error_log($e->getMessage());
                $this->setStatus(false);
                $this->setError([
                    "status" => 401,
                    "message" => "Erreur rencontrée. Veuillez réessayer plus tard.\n" . $e->getMessage() ."\n",
                ]);
                die();
            }
        }

        // End Login

        // CRUD

        public function create($data) {
            try {
                // Prepare an SQL statement
                $sql = "INSERT INTO " . $this->getDB_TABLENAME() . " (column1, column2, column3) VALUES (:value1, :value2, :value3)";
                $stmt = $this->getDB()->prepare($sql);

                // Bind parameters
                $stmt->bindParam(':value1', $data['value1']);
                $stmt->bindParam(':value2', $data['value2']);
                $stmt->bindParam(':value3', $data['value3']);

                // Execute the query
                return $stmt->execute();
            } catch (Exception $e) {
                error_log($e->getMessage());
                return false;
            }
        }

        public function read($id) {
            try {
                // Prepare SQL statement to fetch a record by ID
                $sql = "SELECT * FROM " . $this->getDB_TABLENAME() . " WHERE id = :id";
                $stmt = $this->getDB()->prepare($sql);

                // Bind the ID parameter
                $stmt->bindParam(':id', $id);

                // Execute and fetch the result
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                error_log($e->getMessage());
                return false;
            }
        }

        public function readAll() {
            try {
                // Prepare SQL statement to fetch all records
                $sql = "SELECT * FROM " . $this->getDB_TABLENAME();
                $stmt = $this->getDB()->prepare($sql);

                // Execute and fetch all records
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                error_log($e->getMessage());
                return false;
            }
        }

        public function update($id, $data) {
            try {
                // Prepare SQL statement to update a record by ID
                $sql = "UPDATE " . $this->getDB_TABLENAME() . " SET column1 = :value1, column2 = :value2, column3 = :value3 WHERE id = :id";
                $stmt = $this->getDB()->prepare($sql);

                // Bind parameters
                $stmt->bindParam(':value1', $data['value1']);
                $stmt->bindParam(':value2', $data['value2']);
                $stmt->bindParam(':value3', $data['value3']);
                $stmt->bindParam(':id', $id);

                // Execute the update query
                return $stmt->execute();
            } catch (Exception $e) {
                error_log($e->getMessage());
                return false;
            }
        }

        public function delete($id) {
            try {
                // Prepare SQL statement to delete a record by ID
                $sql = "DELETE FROM " . $this->getDB_TABLENAME() . " WHERE id = :id";
                $stmt = $this->getDB()->prepare($sql);

                // Bind the ID parameter
                $stmt->bindParam(':id', $id);

                // Execute the delete query
                return $stmt->execute();
            } catch (Exception $e) {
                error_log($e->getMessage());
                return false;
            }
        }
        // END CRUD

        public function deconnexion() {
            $this->getDB()::close();
            $this->setDB(null);
        }

        public function __destruct() { $this->deconnexion();  }
    }
?>