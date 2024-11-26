<?php
require 'connection.php';
$sql="SELECT*FROM books";
$res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>six payments</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header>
        <h1> jcee_eco</h1>
    </header>

    <section class="contact">
        <h2><b>LOG IN</b></h2>
        <form id="contact-form" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="message">password</label>
            <input type="password" id="password" name="password">

            <button type="submit" class="btn">login</button><br><br>
            <button type="submit" onClick="window.location.href='signup.php'"> REGISTER </button><br><br>
        </form>
        <p class="error">
            <?php
            if (isset($_GET['error'])){
                echo htmlspecialchars($_GET['error']);
            }
            ?>
        </p>
    </section> <br>

    <script src="script.js"></script>
</body>
</html>



<?php

include 'connection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
    $password = md5($con->real_escape_string($_POST['password']));

    
    $sql = "SELECT * FROM users WHERE name = '$name' AND email = '$email' AND password = '$password'";
    $res = $con->query($sql);

    if ($res->num_rows > 0){ 

        header("Location: home.php");
        exit();
    } else {

        header("Location: signup.php?error=user not found. Please try again.");
        exit();
    }
}

?>
