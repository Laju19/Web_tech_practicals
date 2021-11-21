<?php
//INSERT INTO `parent_table`(`p_name`) VALUES ('[value-2]')
//require 'quiz_db_credentials.php';
require 'quiz_controller.php';

if(isset($_POST['submit'])){
    $parent_name = $_POST['parent'];
    $child_name = $_POST['child'];

    $parent_id = insert_parent_fxn($parent_name);
    print_r($parent_id);
    var_dump($parent_id);

    //$parent_query = "INSERT INTO `parent_table`(`p_name`) VALUES ('$parent_name'); SELECT LAST_INSERT_ID();";

    //"INSERT INTO `child_table`(`child_name`) VALUES ('$child_name')";


}



?>