<?php 
include('db.php');

session_start();


    if(isset($_POST['add'])){
        $week = $_POST['week'];
        $time = $_POST['time'];
        $level = $_POST['level'];
        $course = $_POST['course'];
        $lecture = $_POST['lecture'];
        $venue = $_POST['venue'];
        $user = $_SESSION['user_name'];
        $action = $_POST['add'];
        $details = 'Course'.$course.' '.'Time'.$time.' '.'location'.$venue.' '.'level'.$level;
        $timeStamp = date('Y M d H:i:s');

        $_SESSION['lastUpdate'] = '@'.date('H:i').' on '.date('Y M d');

        $sql = " INSERT INTO time_table (`week`,`time`,`level`,`course`,`lecturer`,`venue`,`timeStamp`,`user`,`action`,`details`) VALUES ('$week','$time','$level','$course','$lecture','$venue','$timeStamp','$user','$action','$details');";

        mysqli_query($conn,$sql);
        header('location:index.php');



    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Add a timeslot</h3>
    <form class="timeslot-form" action="" method="POST">
        <label>Week:</label>
        <select name="week">
            <option value="monday">Monday</option>
            <option value="tuesday">Tuesday</option>
            <option value="wednsday">Wednesday</option>
            <option value="thursday">Thursday</option>
            <option value="friday">Friday</option>
            
        </select><br>

        <label>Time:</label>
        <select name="time">
            <option value="08:00">08:00</option>
            <option value="09:00">09:00</option>
            <option value="10:00">10:00</option>
            
            <!-- Add other times as needed -->
        </select><br>

        <label>Level:</label>
        <select name="level">
            <option value="level 1S">Level 1S</option>
            <option value="level 2S">Level 2S</option>
            <!-- <option>Level 3S</option>
            <option>Level 4S</option> -->
            <!-- Add other levels as needed -->
        </select><br>

        <label>Course:</label>
        <input type="text" name="course"><br>

        <label>Lecturer:</label>
        <input type="text" name="lecture"><br>

        <label>Venue:</label>
        <input type="text" name="venue"><br>

        <button type="submit" name="add" value="add">Add</button>
    </form>
</body>
</html>