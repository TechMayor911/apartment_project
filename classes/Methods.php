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

 class Property extends Db {
         private $dbconnect;

        public function __construct() {
        $this->dbconnect = $this->connect();
        }

    
    public function createProperty($title, $description, $price, $location, $bedrooms, $image) {
        if (empty($title) || empty($description) || empty($price) || empty($location)) {
            throw new Exception("All fields are required.");
        }
        $query = "INSERT INTO properties (title, description, price, location, bedrooms, image) VALUES (:title, :description, :price, :location, :bedrooms, :image)";
        $stmt = $this->dbconnect->prepare($query);

       
          $stmt->bindParam(':title', $title);
          $stmt->bindParam(':description', $description);
          $stmt->bindParam(':price', $price);
          $stmt->bindParam(':location', $location);
          $stmt->bindParam(':bedrooms', $bedrooms);
          $stmt->bindParam(':image', $image);
         
        if ($stmt->execute()) {
            return true;
        } else {
            throw new Exception("Failed to create property.");
        }
    }




    public function getAllProperties() {
        $query = "SELECT * FROM properties";
        $stmt = $this->dbconnect->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }




    public function getPropertyById($id) {
        $query = "SELECT * FROM properties WHERE id = :id";
        $stmt = $this->dbconnect->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }






    public function updateProperty($id, $title, $description, $price, $location, $bedrooms, $image) {
        if (empty($title) || empty($description) || empty($price) || empty($location) || empty($bedrooms)|| empty($image)){
            throw new Exception("All fields are required.");
        }

        
        $query = "UPDATE properties SET title = :title, description = :description, price = :price, location = :location WHERE id = :id";
        $stmt = $this->dbconnect->prepare($query);

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':bedrooms', $bedrooms);
        $stmt->bindParam(':image', $image);


       
        if ($stmt->execute()) {
            return true;
        } else {
            throw new Exception("Failed to update property.");
        }
    }

        

    public function deleteProperty($id) {
        $query = "DELETE FROM properties WHERE id = :id";
        $stmt = $this->dbconnect->prepare($query);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return true;
        } else {
            throw new Exception("Failed to delete property.");
        }
    }
}






















?>