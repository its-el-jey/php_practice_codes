<?php 
    include('/xampp/htdocs/practice_codes/config/db_connect.php');
    //MySQLi or PDO

    // write query for all pizza
    $sql = 'SELECT title, ingredients, id FROM pizza ORDER BY created_at';
    //make query and get result
    $result = mysqli_query($conn, $sql); 
    // fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //optional but good practice, free result from memory
    mysqli_free_result($result);
    //close connection to database
    mysqli_close($conn);

    //print_r($pizzas);

    //explode(',', $pizzas[0]['ingredients']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>form</title>
</head>

    <?php include('header.php') ; ?>
    
    <h4 class="center grey-text">Pizzas!</h4>

    <div class="container">
        <div class="row">

            <?php foreach($pizzas as $pizza){ ?>
            
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <img src="/practice_codes/img/pizza.svg" alt="pizza" class="pizza">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                            <ul>
                                <?php foreach(explode(',', $pizza['ingredients']) as $ing){ ?>
                                    <li><?php echo htmlspecialchars($ing) ; ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a href="details.php?id=<?php echo $pizza['id']?>" class="brand-text">more info</a>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>


    <?php include('footer.php') ; ?>

</html>