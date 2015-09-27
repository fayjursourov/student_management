<?php
//if(!isset($_SESSION['username'])){
//    echo '<meta http-equiv="refresh" content="0; url=index.php" />';
//}

include('login_required.php');
?>

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
                    <li class="active"><a href="home.php">Home</a></li>
                    <li><a href="insert.php">Insert</a></li>
                    <li><a href="show_all.php">Show all</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right log-out">
                    <li><a href="log_out.php" class="log-out">LOG OUT</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
<div class="container">
    <div class="row text-center">
        <p class="margin-content welcome">Welcome to the student management system.</p>
    </div>
    <div class="row">
        <table class="table home-table">
            <thead>
            <tr>
                <th  class="text-center">Name</th>
                <th  class="text-center">Email</th>
                <th  class="text-center">Mobile</th>
                <th  class="text-center">University</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td  class="text-center">Md. Fayjur Rahman (Sourov)</td>
                <td  class="text-center">sourov.gm@gmail.com</td>
                <td  class="text-center">+8801920387741</td>
                <td  class="text-center">Daffodil International University</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


    <!-- footer -->
    <nav class="navbar navbar-default nav-edit home-footer">
        <div class="container-fluid">
            <p href="http://www.lifesoft.net" class="main-footer">lifesoft.net &copy; 2015</p>
        </div>
    </nav>
    <!-- footer -->




</div>


<!-- Bootstrap core JavaScript
  =========================================================  -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>

</body>