<?php
include "config.php";

$message = "";


if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirm'];

    if($password !== $confirm){
        $message = "Passwords do not match!";
    } else {
        $message = "Signup successful! Please login.";
        header("refresh:2; url=login.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-container">
    <div class="login-card">
        <h2>Sign Up</h2>

        <?php if($message) echo "<p style='color:#ff6fcf;'>$message</p>"; ?>

        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm" placeholder="Confirm Password" required>
            <button type="submit" name="signup">Sign Up</button>
        </form>

        <p style="margin-top:15px;">Already have an account? <a href="login.php" style="color:#ff6fcf;">Login here</a></p>
    </div>
</div>

</body>
</html>

