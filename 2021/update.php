<?php 
$course = $lecture = $venue = $id =  "";
include('db.php');

    session_start();


    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $week = $_POST['week'];
        $time = $_POST['time'];
        $level = $_POST['level'];
        $course = $_POST['course'];
        $lecture = $_POST['lecture'];
        $venue = $_POST['venue'];
        $user = $_SESSION['user_name'];
        $action = $_POST['update'];
        $details = 'Course'.$course.' '.'Time'.$time.' '.'location'.$venue.' '.'level'.$level;
        $timeStamp = date('Y M d H:i:s');

        $_SESSION['lastUpdate'] = '@'.date('H:i').' on '.date('Y M d');

        $sql = " UPDATE `time_table` SET `week`='$week',`time`='$time',`level`='$level',`course`='$course',`lecturer`='$lecture',`venue`='$venue',`timeStamp`='$timeStamp',`user`='$user',`action`='$action',`details`='$details' WHERE `table_id`='$id';";

        mysqli_query($conn,$sql);
        echo 'updated';
        header('location:index.php');

    }

    if(isset($_POST['delete'])){
        $id = $_POST['id'];
        if(!empty($id) && is_numeric($id)){
            $sql = " DELETE FROM `time_table` WHERE `table_id`='$id'; ";

            $_SESSION['lastUpdate'] = '@'.date('H:i').' on '.date('Y M d');

            mysqli_query($conn,$sql);
            echo 'delete';
             header('location:index.php');
        }else{
            echo 'error';
        }

    }
?>
<html lang="en">
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Update/Delete a timeslot</h3>
    
    <form class="timeslot-form" action="" method="POST">
    <label>Id:</label>
    <input type="text" name="id" value="<?php echo $id ?>"><br>
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
        <input type="text" name="course" value="<?php echo $course ?>"><br>

        <label>Lecturer:</label>
        <input type="text" name="lecture" value="<?php echo $lecture ?>"><br>

        <label>Venue:</label>
        <input type="text" name="venue" value="<?php echo $venue ?>"><br>

        <button type="submit" name="update" value="update">Update</button>
        <button type="submit" name="delete" value="delete">Delete</button>
    </form>
</body>
</html>