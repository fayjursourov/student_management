<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <title>Student Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div class="container-fluid">

    <!-- Static navbar -->
    <nav class="navbar navbar-default nav-edit">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Students Report</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="insert.php">Insert</a></li>
                    <li><a href="show_all.php">Show all</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li class="active"><a href="delete.php">Delete</a></li>
                    <li><a href="update.php">Update</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
</div>


<?php
    include 'connection.php';
//    $query = "DELETE FROM `students` WHERE ID = '12'";
     $query = "SELECT `total` FROM `students` ORDER BY `total` DESC";

//    echo $query;
    if(mysql_query($query)){
        echo 'Deleted successfully';
    }
    else{
        echo 'Not delete';
    }
//    var_dump($result); check a veriable work or not

?>






<!-- Bootstrap core JavaScript
  =========================================================  -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>

</body>