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
                    <li><a href="home.php">Home</a></li>
                    <li><a href="insert.php">Insert</a></li>
                    <li class="active"><a href="show_all.php">Show all</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="delete.php">Delete</a></li>
                    <li><a href="update.php">Update</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>



    <?php
    include 'connection.php';
    $query = "SELECT * FROM students ORDER BY `total` DESC";

    $result = mysql_query($query);
    $roll = 0;

    while($person = mysql_fetch_array($result)){
        ?>
        <div class="container-fluid">
            <table class="table table-bordered margin-content text-center">
                <thead>
                <tr>
                    <th>Roll Number</th>
                    <th>Student Name</th>
                    <th>Bangla</th>
                    <th>English</th>
                    <th>Religion</th>
                    <th>General Knowledge</th>
                    <th>Drawing</th>
                    <th>Hand Writing</th>
                    <th>Recital</th>
                    <th>SIng</th>
                    <th>Art</th>
                    <th>Other</th>
                    <th>Attendance</th>
                    <th>Weekly Exam</th>
                    <th>Weekly Exam Average</th>
                    <th>PT</th>
                    <th>Total mark</th>
                    <th><a href="show_all.php" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a></th>

                </tr>
                </thead>
                <tbody>
                <tr>

                    <td><?php $roll++; echo $roll;?></td>
                    <td>
                        <h4> <?php echo $person['Name']; ?> </h4>
                    </td>
                    <td>
                        <p> <?php echo $person['Bangla'] ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person['English']; ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person['Religion']; ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person['Gknowledge']; ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person['Drawing']; ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person['Writing']; ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person['Recital']; ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person['Sing']; ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person['Art']; ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person['Other']; ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person['Attendance']; ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person['Weeklyexam']; ?> </p></td>
                    <td>
                        <p> <?php echo $person['Weeklyexamaver']; ?> </p></td>
                    <td>
                        <p> <?php echo $person['Pt']; ?> </p>
                    </td>
                    <td>
                        <p> <?php echo $person['total']; ?> </p>
                    </td>
                    <td>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    <?php } ?>








    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" personid="<?php echo $person['Attendance']; ?>" onclick="idnumber()">
        Edit
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Please change all information!</h4>
                </div>
                <div class="modal-body">



                    <!-- start edit seciton-->

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

                        $total = $ban + $eng + $eng + $knowl + $draw + $write + $reci + $sing + $art
                            + $other + $attend + $w_exam + $w_exam_aver+$pt;


                        $sql = "UPDATE `s_management`.`students` SET `Name` = '$name' , `Bangla` = '$ban',
                                                    `English` = '$eng', `Religion` = '$relig' ,`Gknowledge` = '$knowl',
                                                    `Drawing` = '$draw',`Writing` = '$write',`Recital` = '$reci',
                                                    `Sing` = '$sing',`Art` = '$art',`Other` = '$other',`Attendance` = '$attend',
                                                     `Weeklyexam` = '$w_exam',`Weeklyexamaver` = '$w_exam_aver',`Pt` = '$pt',
                                                     `Total' = '$total') WHERE `ID` = '8'";


                        echo $sql;

                        if(mysql_query($sql)){
                            echo '<h1 class="notice text-center">Insert successfully</h1>';
                        }
                        else{
                            echo '<h1 class="notice text-center">Not Insert</h1>';
                        }
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-12" id="person_id"></div>
                    </div>

                    <div class="row">
                        <form action="show_all.php" method="post" class="text-center insert-form">
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
                        </form>
                    </div>


                    <!-- end edit seciton-->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" type="submit" name="submit" value="submit">Save changes</button>
                </div>
            </div>
        </div>
    </div>















</div>


<!-- Bootstrap core JavaScript
  =========================================================  -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>
<script src="js.js"></script>

</body>