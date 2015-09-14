<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Student Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
</head>

<body>
<div class="container-fluid margin-top-top">

    <form class="form-signin" action="index.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only"></label>
        <input type="text" id="inputEmail" name="fuser" class="form-control" placeholder="User Name" required autofocus>
        <label for="inputPassword" class="sr-only"></label>
        <input type="password" id="inputPassword" name="fpass" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Sign in</button>
    </form>

</div> <!-- /container -->

<?php
if($_POST && $_POST['submit']){
    $user = $_POST['fuser'];
    $pass = $_POST['fpass'];
    if($user == 'sourov' && $pass == '1234'){
        header("Location: home.php");
        die();
//        $_COOKIE['username'] = $user;
//        echo '<meta http-equiv="refresh" content="0; url=home.php" />';
    }
    else{
        echo 'Username or Password error!';
    }

}
?>


</body>