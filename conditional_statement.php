<?php 
    //conditional statement
    $price = 20;

    //if and if else and elseif condition
    // if ($price < 30) {
    //     echo 'the condition is met';
    // } elseif($price < 20){
    //     echo 'elseif condition met';
    // } else {
    //     echo 'condition not met';
    // }


    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2],
    ];

    // foreach($products as $product){
    //     if($product['price'] < 15 && $product['price'] > 2){
    //         echo $product['name'] . '<br />';
    //     }
    // }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>
<body>
    <div>
    <ul>
        <?php foreach($products as $product){ ?>
            <?php if($product['price'] > 15) { ?>
                <li><?php echo $product['name']; ?></li>
            <?php } ?>
        <?php } ?>
    </ul>
    </div>
</body>
</html>