<?php
/**
 * Created by PhpStorm.
 * User: toorel
 * Date: 9/16/2015
 * Time: 10:02 PM
 */
session_start();

if(!isset($_SESSION['username'])){

    echo '<meta http-equiv="refresh" content="0; url=index.php" />';
    die();
}


