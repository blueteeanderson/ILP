<?php
class DBConn {
     private function getConnection() {
         /*$db ="d4ji6dr27eh50i";
         $host = "ec2-54-243-42-218.compute-1.amazonaws.com";
         $port="5432";
         $user="xrwrwkzgqcvknj";
         $password="4d6d5543c0b9b5fa2858e500f99b2445fda1b3c29d0005817c5b11f79242d035";
         $url = "postgres://xrwrwkzgqcvknj:4d6d5543c0b9b5fa2858e500f99b2445fda1b3c29d0005817c5b11f79242d035@ec2-54-243-42-218.compute-1.amazonaws.com:5432/d4ji6dr27eh50i";
         */
         $host = getenv('DB_HOST');
         $user = getenv('DB_USER');
         $password = getenv('DB_PASS');
         $db = getenv('DB_NAME');
         $port = getenv('DB_PORT');
        try {
            $conn = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $password);
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