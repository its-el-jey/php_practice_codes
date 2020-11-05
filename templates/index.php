<?php 
    //MySQLi or PDO

    //connect to database
    $conn = mysqli_connect('localhost', 'LJ', 'iloveyouoppa', 'practice');

    //check the connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>

    <?php include('header.php') ; ?>
    
    <?php include('footer.php') ; ?>

</html>