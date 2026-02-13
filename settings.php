<?php
include "config.php";
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

$success = "";

if(isset($_POST['save'])){
    $success = "Settings saved successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Settings</title>
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
        <h1>Settings</h1>
        <div><?php echo $_SESSION['username']; ?></div>
    </div>

    <?php if($success) echo "<div class='card' style='background:#ff6fcf;'>$success</div>"; ?>

    <div class="card">
        <h3>Admin Settings</h3>
        <form method="POST">
            <label>Name:</label>
            <input type="text" value="<?php echo $_SESSION['username']; ?>" readonly>

            <label>Email:</label>
            <input type="email" value="admin@example.com" readonly>

            <label>New Password:</label>
            <input type="password" placeholder="Enter new password">

            <button type="submit" name="save" style="margin-top:15px;">Save</button>
        </form>
    </div>
</div>

</body>
</html>
