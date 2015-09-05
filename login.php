<?php
/**
 * Created by PhpStorm.
 * User: toorel
 * Date: 7/22/2015
 * Time: 3:34 PM
 */

$user = $_POST['fuser'];
$pass = $_POST['fpass'];

if($_POST['submit']){
    if($user == 'sourov' && $pass == '1234'){
        echo 'Log in success';
    }
    else{
        echo 'Username or Password error!';
    }
}
