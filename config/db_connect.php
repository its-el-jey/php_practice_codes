<?php 
    //connect to database
    $conn = mysqli_connect('localhost', 'LJ', 'iloveyouoppa', 'practice');

    //check the connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>