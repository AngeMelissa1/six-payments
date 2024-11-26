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
        <h2><b>SIGN UP</b></h2>
        <form id="contact-form" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="btn">SIGN UP</button><br><br>
            <button type="submit" class="btn" onClik="window.location.href='signup.php'">log in</button><br><br>
        </form>
    </section> <br>

    <script src="script.js"></script>
</body>
</html>
<?php
include 'connection.php';

$errorMsg = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
    $password = md5($con->real_escape_string($_POST['password']));

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $res = $con->query($sql);

    if ($res->num_rows > 0) {

        $errorMsg = "This email is already registered. Please use a different one.";
    } else {

        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email','$password')";
        if ($con->query($sql) === TRUE) {
            header("Location: home.php?message=Registration successful! Please log in.");
            exit();
        } else {
            $errorMsg = "Error: " . $con->error;
        }
    }
}
?>
