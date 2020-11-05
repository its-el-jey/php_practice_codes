<?php 
    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2],
    ];

    foreach($products as $product) {
        if($product['name'] === 'lightning bolt') {
            break; //jump out and broken out the loop
        }

        // if($product['price'] > 15){
        //     continue; //skips price > 15
        // }
        echo $product['name'] . '<br />';
    }
?>