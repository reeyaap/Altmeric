<?php
require_once("config.php");
?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>Homepage Altmetric</title>
    <link type="text/css" rel="stylesheet" href="index.css">
</head>

<?php
$error="";
$error = doLogin();
?>

<div class="blurImage"></div>

<div class="front">
    <h1 style="font-size: 50px">Welcome to Altmetric!</h1>
    <form action="" method="post">
        Username: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email"/><br><br>
        Password: &nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password"/><br><br><br>
        <?php echo $error; ?>
        <div id="buttons">
            <input type="submit" value="Login"/>
        </div>
    </form>

    <a href="register.php">
        <button>Register</button>
    </a>

</div>


</html>



