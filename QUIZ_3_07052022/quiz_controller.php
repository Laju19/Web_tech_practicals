<?php

require 'quiz_class.php';

function insert_parent_fxn($parent_name){
    $quiz_class = new quiz_class;
    $run_query  = $quiz_class->insert_parent($parent_name);
    if($run_query){
        //$parent_id = $quiz_class->quiz_fetch();
       // return $parent_id;
       return true;
    }
    else{
        return false;
    }
}
?>