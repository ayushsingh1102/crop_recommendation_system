<?php
require 'config.php';


if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM user_registration WHERE username = '$usernameemail' OR  email = '$usernameemail' ");
    // $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["user_id"] = $row["user_id"];
            header("Location: home.php");
            exit();
        }
        else{
            echo
            "<script> alert ('Wrong Password'); </script>";
        }
    

    }
    else{
        echo
        "<script> alert ('User Not Registered'); </script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body>
    <form  method="post" autocomplete="off">
        <h2>Log In</h2>
        <br>
        <label for="usernameemail">Username or Email :</label> <br>
        <br>
        <input type="text" name="usernameemail" id="usernameemail" required value=""> <br>
        <label for="password">Password :</label> <br>
        <br>
        <input type="password" name="password" id="password" required value=""> <br>
        <br>
        <button type="submit" name="submit">Login</button>
        <br>
        <p>Do not have an account? <a href="registration.php" class="link">Registration Here</a> </p> 
    </form>
</body>
</html>