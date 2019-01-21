<?php

function doLogin()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            global $mysqli;
            $email = $_POST['email'];
            $password = $_POST['password'];

            $stmt = $mysqli->prepare("SELECT firstName FROM login WHERE email = ? and password = ?");
            $stmt->bind_param("ss", $email, $password);

            $stmt->execute();
            $stmt->bind_result($firstName);
            $count = 0;
            while ($stmt->fetch()) {
                $count+=1;
                echo "while";
                $row[] = array(
                    'firstName' => $firstName);
            }
            $stmt->close();
            if ($count == 1) {
                $firstName = $row[0]['firstName'];
                $_SESSION['email'] = $email;
                $_SESSION['firstName'] = $firstName;
                header("location: homepage.php");
            } else {
                $error = "Incorrect login credentials";
                session_destroy();
                return $error;
            }
        }
        catch (Exception $e) {
            echo "error: $e";
        }
    }
}


function processRegister($firstName, $lastName, $email, $password, $createdAt) {
    global $mysqli;
    $stmt = $mysqli->prepare("INSERT INTO login (firstName, lastName, email, password, createdAt) VALUES (?, ?, ?,?,?)");
    $stmt->bind_param("sssss", $firstName, $lastName, $email, $password, $createdAt);
    $stmt->execute();
    $stmt->close();
}

function ifUserExists($email) {
        global $mysqli;
        $stmt = $mysqli->prepare("SELECT email FROM login WHERE email = ? ");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        
        $count=0;
        while ($stmt->fetch()) {
            $count+=1;
            $row [] = array(
                'email' => $email);
        }

        $stmt->close();
        if($count==0) {
            return False;
        }
        else {
            return True;
        }
}

function processUpdate() {
    global $mysqli;
    $stmt = $mysqli->prepare("UPDATE items SET itemName=?, price=?, author=?, category=?, description=? WHERE artId=?");
    $stmt->bind_param("sisssi", $_POST['itemName'], $_POST['price'], $_POST['author'], $_POST['category'], $_POST['description'], $_POST['artId']);
    $stmt->execute();
    header("location: seller.php"); 
}

function deleteArt() {
    global $mysqli;
    $stmt = $mysqli->prepare("DELETE FROM items WHERE artId=?");
    $stmt->bind_param("i", $_POST['artId']);
    $stmt->execute();
    header("location: seller.php");
}








