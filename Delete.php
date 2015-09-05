<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <title>Student Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">


    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "s_management";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // sql to delete a record
        $sql = "DELETE FROM MyGuests WHERE id=1";

        if (mysqli_query($conn, $sql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }

        mysqli_close($conn);
?>


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
                    <li><a href="Show_all.php">Show all</a></li>
                    <li><a href="Search.php">Search</a></li>
                    <li class="active"><a href="Delete.php">Delete</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
</div>





<!-- Bootstrap core JavaScript
  =========================================================  -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>

</body>