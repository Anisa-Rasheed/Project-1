<?php
include "config.php";
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="dashboard.php">🏠 Dashboard</a>
    <a href="profile.php">👤 Profile</a>
   <a href="settings.php" class="active">⚙ Settings</a>
    <a href="logout.php">🚪 Logout</a>
</div>

<div class="main">
    <div class="topbar">
        <h1>Profile</h1>
        <div><?php echo $_SESSION['username']; ?></div>
    </div>

    <div class="card">
        <h3>Admin Information</h3>
        <p><strong>Username:</strong> <?php echo $_SESSION['username']; ?></p>
        <p><strong>Role:</strong> Administrator</p>
        <p><strong>Email:</strong> admin@example.com</p>
    </div>
</div>

</body>
</html>
