<?php 
    
    include('/xampp/htdocs/practice_codes/config/db_connect.php');
    
    //check GET request id param
    if(isset($_GET['id'])){
        //escape any special character to input in url to db
        $id =  mysqli_real_escape_string($conn, $_GET['id']);

        //make sql, select any record where the ID field is equal to that
        $sql = "SELECT * FROM pizza WHERE id = $id";

        // get the query result
        $result = mysqli_query($conn, $sql);

        //fetch the result in array format
        $pizza = mysqli_fetch_assoc($result);

        //free and close connection
        mysqli_free_result($result);
        mysqli_close($conn);

        //print_r($pizza);

    }
?>
<!DOCTYPE html>
<html lang="en">


    <?php include('header.php') ; ?>
    
    <div class="container center">
        <?php if($pizza):  ?>

            <h4><?php echo htmlspecialchars($pizza['title']) ; ?></h4>
            <p>Created by: <?php echo htmlspecialchars($pizza['email']) ; ?></p>
            <p><?php echo date($pizza['created_at']) ; ?></p>
            <h5>Ingredients:</h5>
            <p><?php echo htmlspecialchars($pizza['ingredients']) ; ?></p>
        
        <?php else: ?>
            <h5>No such pizza exists</h5>
        <?php endif; ?>
    </div>

    <?php include('footer.php') ; ?>

</html>