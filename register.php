<html>
<head>
    <title>Register</title>
    <link type="text/css" rel="stylesheet" href="index.css">
</head>

<?php
    $error="";
    require_once("config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $email = $_POST['email'];
            $x = ifUserExists($email);

            if ($x==False) {
                echo "User does not exists";
                $createdAt = strtotime("now");
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $password = $_POST['password'];

                processRegister($firstName,$lastName,$email, $password, $createdAt);
                header("location: index.php");
            } else {
                global $error;
                $error = "User already exists with the same email ID. Please log into your account.";
?>

<?php
        }

    }
?>

<body>
<div class="blurImage"></div>

<div class="front">
    Please enter your details<br><br>
    <form method="POST" action="">
        First Name: <input type="text" name="firstName"/><br><br>
        Last Name: <input type="text" name="lastName"/><br><br>
        email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email"/><br><br>
        password: <input type="password" name="password"/><br><br>
        <div id="buttons"><?php echo $error?><br>
            <input type="submit" value="Register"/>

        </div>

    </form>
    <a href="index.php">
        <button>Login</button>
    </a>

</div>
</body>

</html>













