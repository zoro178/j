<?php

    $serverName = 'localhost';
    $userName = 'root';
    $password = '';
    $dbName = '2021';

    $conn = mysqli_connect($serverName,$userName,$password,$dbName);

    if(!$conn){
        echo 'connect fail' . mysqli_connect_error();
        exit();
    }


?>