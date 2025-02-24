<?php
require_once "Db.php";

class User extends Db {
    private $dbconnect;

    public function __construct() {
        $this->dbconnect = $this->connect();
    }

    public function register($fullname, $email, $password) {
        try {
          
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

          
            $sql = "INSERT INTO users (name, email, password) 
                    VALUES (:fullname, :email, :password)";
            
           
            $stmt = $this->dbconnect->prepare($sql);
            $stmt->bindParam(':fullname', $fullname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->execute();

            return $this->dbconnect->lastInsertId();
        } catch (PDOException $e) {
            error_log("Error saving user: " . $e->getMessage());
            return false;
        }
    }

    public function login($email, $password) {
        try {
            // Query to fetch the user by email
            $sql = "SELECT id, email, password FROM users WHERE email = :email";
            
            // Prepare the SQL statement
            $stmt = $this->dbconnect->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
    
            // Fetch the user record
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // Check if the user exists
            if ($user) {
                // Verify the password
                if (password_verify($password, $user['password'])) {
                    // Password is correct, return the user ID or other relevant data
                    return $user['id']; // Or return the entire user array if needed
                } else {
                    // Password is incorrect
                    return false;
                }
            } else {
                // User with the provided email does not exist
                return false;
            }
        } catch (PDOException $e) {
            // Log the error and return false
            error_log("Error during login: " . $e->getMessage());
            return false;
        }
    }







}





















?>