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
                    <li class="active"><a href="Insert.php">Insert</a></li>
                    <li><a href="Show_all.php">Show all</a></li>
                    <li><a href="Search.php">Search</a></li>
                    <li><a href="Delete.php">Delete</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
<!--
    <div class="row">
        <form action="Insert.php" method="post">
            1.Student Name:<br>
            <input type="text" name="Name" min="0" max="100">
            <br>
            2.English mark:<br>
            <input type="number" name="English" min="0" max="100">
            <br>
            3.Bangla mark:<br>
            <input type="number" name="Bangla" min="0" max="100">
            <br>
            4.Religion mark:<br>
            <input type="number" name="Religion" min="0" max="100">
            <br>
            5.General Knowledge mark:<br>
            <input type="number" name="G-knowledge" min="0" max="100">
            <br>
            6.Drawing mark:<br>
            <input type="number" name="Drawing" min="0" max="100">
            <br>
            7.Hand Writing mark:<br>
            <input type="number" name="Hand-writing" min="0" max="100">
            <br>
            8.Recital mark:<br>
            <input type="number" name="Recital" min="0" max="100">
            <br>
            9.Sing mark:<br>
            <input type="number" name="Sing" min="0" max="100">
            <br>
            10.Art mark:<br>
            <input type="number" name="Art" min="0" max="100">
            <br>
            11.Other mark:<br>
            <input type="number" name="Other" min="0" max="100">
            <br>
            12.Attendance mark:<br>
            <input type="number" name="Attendance" min="0" max="100">
            <br>
            13.Weekly Exam mark:<br>
            <input type="number" name="weekly-exam" min="0" max="100">
            <br>
            14.Weekly Exam Average mark:<br>
            <input type="number" name="weekly-exam-Average" min="0" max="100">
            <br>
            15.PT mark:<br>
            <input type="number" name="pt" min="0" max="100">
            <br>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
        </form>
    </div>       -->
</div>


<div class="container">
    <div class="row">
        <form action="Insert.php" method="post">
            <table class="table margin-left">
                <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Bangla</th>
                    <th>English</th>
                    <th>Religion</th>
                    <th>General Knowledge</th>
                    <th>Drawing</th>
                    <th>Hand Writing</th>
                    <th>Recital</th>
                    <th>Sing</th>
                    <th>1Art</th>
                    <th>Other</th>
                    <th>Attendance</th>
                    <th>Weekly Exam</th>
                    <th>Weekly Exam Average</th>
                    <th>PT</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="text" name="fname" value=""></td>
                    <td><input type="number" name="fbangla" value=""></td>
                    <td> <input type="number" name="fenglish" min="0" max="100" value=""></td>
                    <td><input type="number" name="freligion" min="0" max="100" value=""></td>
                    <td><input type="number" name="fg-knowledge" min="0" max="100" value=""></td>
                    <td><input type="number" name="fdrawing" min="0" max="100" value=""></td>
                    <td><input type="number" name="fh-writing" min="0" max="100" value=""></td>
                    <td><input type="number" name="frecital" min="0" max="100" value=""></td>
                    <td><input type="number" name="fsing" min="0" max="100" value=""></td>
                    <td><input type="number" name="fart" min="0" max="100" value=""></td>
                    <td><input type="number" name="fother" min="0" max="100" value=""></td>
                    <td><input type="number" name="fattend" min="0" max="100" value=""></td>
                    <td><input type="number" name="fweekly-exam" min="0" max="100" value=""></td>
                    <td><input type="number" name="fweekly-exam-aver" min="0" max="100" value=""></td>
                    <td><input type="number" name="fpt" min="0" max="100"></td>
                </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-xs-3"><button class="btn btn-lg btn-primary btn-block" type="submit" value="submit">Submit</button></div>
            </div>
        </form>
    </div>
</div>



<?php

if(isset($post) && ($_POST['submit'] == 'submit')){
    include 'connection.php';
    $name = $_POST['fname'];
    $ban = $_POST['fbangla'];
    $eng = $_POST['fenglish'];
    $relig = $_POST['freligion'];
    $knowl = $_POST['fg-knowlege'];
    $draw = $_POST['fdrawing'];
    $write = $_POST['fhwriting'];
    $reci = $_POST['frecital'];
    $sing = $_POST['fsing'];
    $art = $_POST['fart'];
    $other = $_POST['fother'];
    $attend = $_POST['fattend'];
    $w_exam= $_POST['fweekly-exam'];
    $w_exam_aver = $_POST['fweekly-exam-aver'];
    $pt = $_POST['fpt'];
    mysql_query("INSERT INTO `s_management`.`students` (`ID`, `Name`, `Bangla`, `English`,`Religion`,`Gknowledge`,`Drawing`,`Writing`,`Recital`,`Sing`,`Art`,`Other`,`Attendance`,`Weeklyexam`,`Weeklyexamaver`,`Pt`,)
                  VALUES (NULL, '$name', '$ban')") or die(mysql_error());
    header("Location: Show_all.php");
}
?>



<!-- Bootstrap core JavaScript
  =========================================================  -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>

</body>