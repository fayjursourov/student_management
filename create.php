<?php
/**
 * Created by PhpStorm.
 * User: toorel
 * Date: 8/15/2015
 * Time: 1:35 PM
 */




    include 'connection.php';
    $name = $_POST['fname'];
    $ban = $_POST['fbangla'];



//    $ban = $_POST['Bangla'];
//    $ban = $_POST['Bangla'];
//    $ban = $_POST['Bangla'];
//    $ban = $_POST['Bangla'];
//    $ban = $_POST['Bangla'];
//    $ban = $_POST['Bangla'];
//    $ban = $_POST['Bangla'];
//    $ban = $_POST['Bangla'];
//    $ban = $_POST['Bangla'];
//    $ban = $_POST['Bangla'];
//    $ban = $_POST['Bangla'];
//    $ban = $_POST['Bangla'];

//mysql_query("INSERT INTO `s_management`.`students` (`ID`, `Name`, `Bangla`) VALUES (NULL, '$name', '$ban')") or die(mysql_error());

if($_POST['submit'] = 'submit'){
    mysql_query("INSERT INTO `s_management`.`students` (`ID`, `Name`, `Bangla`) VALUES (NULL, '$name', '$ban')") or die(mysql_error());
    header("Location: Show_all.php");
}
?>