<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Admin Dashboard -->
    <div class="admin-dashboard">
        
        <h3><?php echo (isset($_SESSION['user_name']))?$_SESSION['user_name']:'Admin' ?> Dashboard</h3>
        <button onclick="window.location.href='add.php'">Add a timeslot</button>
        <button onclick="window.location.href='update.php'">Update a timeslot</button>

        <button onclick="window.location.href='history.php'" >History</button><br><br>

        <form action="logout.php" method="POST">
            <input type="submit" value="Logout" name="logout" >
        </form>
        
    </div>
</body>
</html>