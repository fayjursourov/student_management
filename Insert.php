<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
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
                    <a class="navbar-brand" href="after_login.php">Students Report</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="after_login.php">Home</a></li>
                        <li class="active"><a href="Insert.php">Insert</a></li>
                        <li><a href="Show_all.php">Show all</a></li>
                        <li><a href="Search.php">Search</a></li>
                        <li><a href="Delete.php">Delete</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>

        <?php

        if(isset($_POST['submit']) && ($_POST['submit'] == 'submit')){
            include 'connection.php';
            $name = $_POST['fname'];
            $ban = $_POST['fbangla'];
            $eng = $_POST['fenglish'];
            $relig = $_POST['freligion'];
            $knowl = $_POST['fg-knowledge'];
            $draw = $_POST['fdrawing'];
            $write = $_POST['fh-writing'];
            $reci = $_POST['frecital'];
            $sing = $_POST['fsing'];
            $art = $_POST['fart'];
            $other = $_POST['fother'];
            $attend = $_POST['fattend'];
            $w_exam= $_POST['fweekly-exam'];
            $w_exam_aver = $_POST['fweekly-exam-aver'];
            $pt = $_POST['fpt'];

            $total = $ban + $eng + $eng + $knowl + $draw + $write + $reci + $sing + $art + $other + $attend + $w_exam + $w_exam_aver+$pt;
            echo $total;

            $sql = "INSERT INTO `s_management`.`students` (`ID`, `Name`, `Bangla`, `English`, `Religion`,`Gknowledge`,`Drawing`,`Writing`,`Recital`,`Sing`,`Art`,`Other`,`Attendance`, `Weeklyexam`,`Weeklyexamaver`,`Pt`,`Total')
                      VALUES (NULL, '$name', '$ban', '$eng', '$relig', '$knowl', '$draw', '$write', '$reci', '$sing', '$art', '$other', '$attend', '$w_exam', '$w_exam_aver', '$pt','$total')";

            echo $sql;

    //    mysql_query($sql) or die(mysql_error());
            if(mysql_query($sql)){
                echo '<h1 class="notice text-center">Insert successfully</h1>';
            }
            else{
                echo '<h1 class="notice text-center">Not Insert</h1>';
            }
        }
        ?>

    <div class="row">
        <form action="Insert.php" method="post" class="text-center insert-form">
            <div class="col-md-4 col-sm-6">
                <p>Student Name</p>
                <input type="text" name="fname" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>Bangla</p>
                <input type="text" name="fbangla" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>English</p>
                <input type="text" name="fenglish" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>Religion</p>
                <input type="text" name="freligion" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>General Knowledge</p>
                <input type="text" name="fg-knowledge" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>Drawing</p>
                <input type="text" name="fdrawing" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>Hand Writing</p>
                <input type="text" name="fh-writing" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>Recital</p>
                <input type="text" name="frecital" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>Sing</p>
                <input type="text" name="fsing"  value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>Art</p>
                <input type="text" name="fart" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>Other</p>
                <input type="text" name="fother" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>Attendance</p>
                <input type="text" name="fattend" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>Weekly Exam</p>
                <input type="text" name="fweekly-exam" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>Weekly Exam Average</p>
                <input type="text" name="fweekly-exam-aver" value="">
            </div>
            <div class="col-md-4 col-sm-6">
                <p>PT</p>
                <input type="text" name="fpt" value="">
            </div>
            <div class="col-md-12">
                <div class="submite-button">
                    <button class="btn btn-primary btn-block" type="submit" name="submit" value="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>

</div>





<!-- Bootstrap core JavaScript
  =========================================================  -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>

</body>