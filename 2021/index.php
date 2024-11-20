<?php 
include('db.php');
session_start();

// $update = $_SESSION['lastUpdate'];

$sql = " SELECT * FROM time_table ;";

$result = mysqli_query($conn,$sql); 
$array = [];

while($line = mysqli_fetch_assoc($result)){
    $array = $line;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Timetable and Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    <h1>Department of Computer Science</h1>
    <h2>Faculty of Science, University of Jaffna</h2>
    <h3>Academic Year - 2020/2021</h3>
    <br>
    <button type="button" onclick="window.location.href = 'login.php'">Login</button>
    <br>

    <!-- Timetable -->
    <table class="timetable">
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <!-- <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th> -->
        </tr>
        
            <tr>
            <td>8</td>
            <td>
                <?php echo $array['time'] == 8 ; ?>
            </td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>8</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>8</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>8</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
            
    </table>
    <?php

        $query = "SELECT max(timeStamp) as timeStamp from time_table ;";
        $result = mysqli_query($conn, $query);
        $res = mysqli_fetch_assoc($result);

    ?>
    
    <p class="last-updated"><?php echo $res['timeStamp'] ?></p>


</body>
</html>
