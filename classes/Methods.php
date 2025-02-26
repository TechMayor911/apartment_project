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
            $sql = "SELECT id, email, name, password FROM users WHERE email = :email";    
            $stmt = $this->dbconnect->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    unset($user['password']);
                    return $user;
                } else {
                    return false;
                }
            } else {
                return false;
            }
            
        } catch (PDOException $e) {
            error_log("Error during login: " . $e->getMessage());
            return false;
        }
    }







}





















?>