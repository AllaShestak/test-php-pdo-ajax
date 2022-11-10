<?php

class test extends controller{

    public function insert() {
        if (isset($_POST['submit'])){
          if(isset($_POST['name']) ){
             if(!empty($_POST['name'])){
              $name=$_POST['name']; 
              $stmt =$this->db->conn-> prepare("INSERT INTO elements(name,uuid) VALUES(?,?)");
              $stmt->execute([$name, utility::generateUUID()]);
            }
         }
       }
      }
      
       public function fetch(){
         $data = null;
         $stmt = $this->db->conn->prepare("SELECT * FROM elements WHERE removed=0");
         $stmt->execute();
         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
         return $data;
       }
      
       public function del ($del_id){
        $stmt = $this->db->conn->prepare("UPDATE elements SET removed =1 WHERE id = ?");
        $stmt->execute([$del_id]);
       }
      



}




