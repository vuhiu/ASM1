<?php
    class Phone {
        public $conn;

        public function __construct()
        {
            $this->conn = connectDB();
        }

        public function getAllPhones() {
            $sql = "SELECT * FROM phones"; 
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(); 
    
            return $stmt->fetchAll();
        }
    
        public function getbyId($id){
            $sql = "SELECT * FROM phones WHERE id = $id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
    
            return $stmt->fetch(); 
        }
        public function save($id,$name,$image,$brand,$color){
            $sql = "INSERT INTO phones (id,name,image,brand,color)
                    VALUE('$id','$name','$image','$brand','$color')";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
        }

        public function update($id,$name,$image,$brand,$color){
            $sql = "UPDATE phones SET name = '$name', image = '$image', brand = '$brand', color = '$color'  WHERE id = $id ";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
        }

        public function delete($id){
            $sql = "DELETE FROM phones where id = $id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
        }
    
        public function __destruct()
        {
            $this->conn = null;
        }
    }
?>