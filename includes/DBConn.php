<?php
class DBConn {
     private function getConnection() {
         $host = "localhost";
         $user = "ubuntu";
         $password = "B!u3R0ck$";
         $db = 'ilp';
        try {
            $conn = new PDO("pgsql:host=$host;dbname=$db", $user, $password);
            // set the PDO error mode to exception
            $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch (PDOException $e) {
            echo "Connection failed: ".$e -> getMessage();
        }
    }
    public function insertRecord($sql,$params) {
        try {
            $conn = $this->getConnection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($params);
            return true;
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }
    public function insertRecordGetId($sql,$params) {
        try {
            $conn = $this->getConnection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($params);
            return $conn->lastInsertId();
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }
    
    public function updateRecord($sql,$params) {
        try {
            $conn = $this->getConnection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($params);
            return "Record updated successfully!";
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }
    public function deleteRecord($sql,$params) {
        try {
            $conn = $this->getConnection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($params);
            return "Record deleted successfully!";
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }
    public function getRecords($sql, $many, $params) {
     try {
         $conn = $this->getConnection();
         $stmt = $conn->prepare($sql);
         $stmt->execute($params);
         if($many) {
             return $stmt->fetchAll(PDO::FETCH_ASSOC);
         } else {
             return $stmt->fetch(PDO::FETCH_ASSOC);
         }
     } catch(PDOException $e) {
         return array($e->getMessage());
     }   
    }
}
?>