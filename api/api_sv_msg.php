<?php
    $conn = mysqli_connect("localhost", "root", "", "Consults"); 
    if($conn){
        $name = $_POST['name'] ?? null;
        $email = $_POST['email'] ?? null;
        $msg = $_POST['msg'] ?? null;
        
        $sql = "INSERT INTO message
        (name_msg, email_msg, body_msg)
        VALUES
        ('$name', '$email', '$msg')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo('1');
        }else{
            echo('0');
        }
    }else{
        echo('3');
    }