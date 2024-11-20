<?php

include('db.php');
session_start();

if(isset($_POST['login'])){
    $username = $_POST['user_name'];
    $password = $_POST['password'];

    $sql = "select * from admin where userName = '$username'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) == 1){
        
        $row = mysqli_fetch_assoc($result);

        if($password == $row['password']){
            //echo 'password match';
            $_SESSION['user_name'] = $username;
            header("location:admin.php");
        }

    }

   

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="" method="POST">
    <h2>Login</h2><br>

    <label for="">User Name</label>
    <input type="text" name="user_name" id=""><br><br>

    <label for="">Password : </label>
    <input type="password" name="password" id="">

    <input type="submit" value="submit" name="login">
</form>
    
</body>
</html>