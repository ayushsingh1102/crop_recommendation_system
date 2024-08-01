<?php

require 'config.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM user_registration WHERE username = '$username' OR email = '$email' ");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert ('Username or Email Has Already taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO user_registration Values('', '$name','$username','$email','$password')";
            // mysqli_query($conn,$query);
            // header("Location: index.php");
            // exit();
            if(mysqli_query($conn, $query)) {
                $user_id = mysqli_insert_id($conn); // Get the auto-generated user_id
                $_SESSION["user_id"] = $user_id; // Store user_id in session
                header("Location: home.php");
                exit();
            }else{
                echo "Registration failed.";
            }    
        
        }
        else{
            echo
            "<script> alert('Password Does Not Match'); </script>";
        }
    }
}   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body>
    <form class="" action="" method="post" autocomplete="off">
        <h2>Registration</h2>
        <br>
        <label for="name">Name :</label>
        <input type="text" name="name" id="name" required value=""> <br>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" required value=""> <br>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required value=""> <br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required value=""> <br>
        <label for="confirmpassword">Confirm Password :</label>
        <input type="password" name="confirmpassword" id="confirmpassword" required value=""> <br>
        <button type="submit" name="submit">Register</button>
        <br>
        <p>Already Have An Account?</p>
        <p>Click Here 
        <br>
        <br> 
        <a href="login.php">Login</a></p>
    </form>
    <br>

    
</body>
</html>