<?php
    include 'connection.php';
    $id = $_POST['id'];
    $query = "DELETE FROM `students` WHERE ID = '$id'";

//    echo $query;
    if(mysql_query($query)){
        echo 'true';
    }
    else{
        echo 'false';
    }
//    var_dump($result); check a veriable work or not
