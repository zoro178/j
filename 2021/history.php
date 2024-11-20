<?php 
include('db.php');
connection_status();

$sql = "SELECT * FROM time_table";
$result = mysqli_query($conn, $sql);

?>
<html lang="en">
<head>
    
    <title>Admin Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h3>Track changes</h3>
    <table class="track-changes">
        <tr>
            <th>Time - Date</th>
            <th>User</th>
            <th>Action</th>
            <th>Details</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result)):
        ?>
                <tr>
                <td><?php echo $row['timeStamp'] ?></td>
                <td><?php echo $row['user'] ?></td>
                <td><?php echo $row['action'] ?></td>
                <td><?php echo $row['details'] ?></td>
                </tr>
                

        <?php endwhile ?>
        
    </table>

</body>
</html>
