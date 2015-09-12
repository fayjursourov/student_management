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
                <a class="navbar-brand" href="after_login.php">Students Report</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="after_login.php">Home</a></li>
                    <li><a href="Insert.php">Insert</a></li>
                    <li><a href="Show_all.php">Show all</a></li>
                    <li class="active"><a href="Search.php">Search</a></li>
                    <li><a href="Delete.php">Delete</a></li>
                    <li><a href="update.php">Update</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <div class="container-fluid">
        <form action="Search.php" method="post" class="text-center">
            <div class="row search-section">
                    <tr>
                        <td>
                            <input type="text" name="sname" value="" placeholder="Enter a student name">
                            <button class="btn btn-primary" type="submit" name="submit" value="submit">search</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>


    <?php
        if(isset($_POST['submit']) && ($_POST['submit'] == 'submit')){
                include 'connection.php';
                $search = $_POST['sname'];
                $query = "SELECT * FROM `students` WHERE name = '$search'";
                $result = mysql_query($query);
                while($person = mysql_fetch_array($result)){?>
                    <table class="table table-bordered text-center">
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

                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td>1</td>
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
                                <p> <?php echo $person['Total']; ?> </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                <?php }
        }
    ?>



</div>


<!-- Bootstrap core JavaScript
  =========================================================  -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>

</body>