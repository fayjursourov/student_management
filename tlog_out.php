<?php
/**
 * Created by PhpStorm.
 * User: toorel
 * Date: 9/16/2015
 * Time: 10:40 PM
 */
session_start();
unset($_SESSION['username']);

echo '<meta http-equiv="refresh" content="0; url=index.php" />';
die();
