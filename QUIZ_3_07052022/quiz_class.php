<?php

require 'quiz_db_class.php';

class quiz_class extends quiz_connections
{
   public function insert_parent($parent_name){
    $parent_query = "INSERT INTO `parent_table`(`p_name`) VALUES ('$parent_name')";
    return $this->quiz_query($parent_query);

   } 

   public function return_parent_id(){
    $parent_id = "SELECT LAST_INSERT_ID()"; 

   }
}

?>