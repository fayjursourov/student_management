<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <title>Student Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <![endif]-->

</head>
<body>

<div class="container">

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
                <a class="navbar-brand" href="after_login.php">Students Report</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="after_login.php">Home</a></li>
                    <li><a href="Insert.php">Insert</a></li>
                    <li class="active"><a href="Show_all.php">Show all</a></li>
                    <li><a href="Search.php">Search</a></li>
                    <li><a href="Delete.php">Delete</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <?php
    include 'connection.php';
//    $sname = $_POST['search'];
    $query = "SELECT * FROM students";
    $result = mysql_query($query);

    while($person = mysql_fetch_array($result)){
        echo "<h3>" . $person['Name']. "</h3>";
        echo "<p>" . $person['Bangla']."</p>";
    }
    ?>

</div>


<!-- Bootstrap core JavaScript
  =========================================================  -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>

</body>