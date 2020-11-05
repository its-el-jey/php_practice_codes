<?php 
    //MySQLi or PDO

    //connect to database
    $conn = mysqli_connect('localhost', 'LJ', 'iloveyouoppa', 'practice');

    //check the connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

    // write query for all pizza
    $sql = 'SELECT title, ingredients, id FROM pizza';
    //make query and get result
    $result = mysqli_query($conn, $sql); 
    // fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //optional but good practice
    mysqli_free_result($result);
    //close connection to database
    mysqli_close($conn);

    print_r($pizzas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>

    <?php include('header.php') ; ?>
    
    <?php include('footer.php') ; ?>

</html>