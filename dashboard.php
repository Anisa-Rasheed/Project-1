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
<title>Dashboard</title>
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
        <h1>Dashboard</h1>
        <div>Welcome, <?php echo $_SESSION['username']; ?></div>
    </div>

    <div class="card">
        <h3>System Overview</h3>
        <p>This is a professional admin dashboard interface.</p>
    </div>

    <div class="card">
        <h3>Quick Stats</h3>
        <p>Users: 1</p>
        <p>Status: Active</p>
    </div>
</div>

</body>
</html>




