<?php
include "config.php";

$message = "";

// Fixed Admin Credentials
$fixed_username = "anisa";
$fixed_password = "Anisa@123";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === $fixed_username && $password === $fixed_password){
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $message = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-container">
<div class="login-card">
<h2>Admin Login 🔐</h2>

<?php if($message) echo "<div class='message'>$message</div>"; ?>

<form method="POST">
<input type="text" name="username" placeholder="Enter Username" required>
<input type="password" name="password" placeholder="Enter Password" required>
<button type="submit" name="login">Login</button>
</form>

<p style="margin-top:15px; font-size:13px; opacity:0.7;">
Authorized Access Only
</p>
</div>
</div>

</body>
</html>




