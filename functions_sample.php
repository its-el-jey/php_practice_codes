<?php
    //functions
    // function sayHello() {
    //     echo "Good Morning";
    // }
    // print function
    // sayHello();

    // passing argument
    // function sayHello($name = 'Shaun') { //default value 'Shaun'
    //     echo "Good Morning $name";
    // }
    // sayHello();

    //wrap whole var in curly braces to understand multiple parameters inside echo
    // function formatProduct($product){
    //     echo "{$product['name']} costs £{$product['price']} to buy <br /> ";
    // }
    // formatProduct(['name'=>'gold star', 'price'=>20]);

    //return value functions
    function formatProduct($product){
        return "{$product['name']} costs £{$product['price']} to buy <br /> ";
    
    }
    // $formatted = formatProduct(['name'=>'gold star', 'price'=>20]);
    // echo $formatted;

?>