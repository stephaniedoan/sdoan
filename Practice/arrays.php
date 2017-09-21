<?php

function displaySymbol(){
    
    echo "<img src='../Lab/Lab2/img/$symbols.png' width='50' />";
    
}

$symbols = array("lemon", "orange", "cherry");
//initializes array with 3 items

// print_r($symbols);

//display all elements for debugging purposes

// echo $symbols[0]

// displaySymbol();

$symbols[] = "bar"; //adding new element
// displaySymbol( $symbols[3] );
array_push($symbols, "seven");

// for ($i = 0; $i < 5; $i++) {
// displaySymbol( $symbols[$i] );
// echo "<br />";
// }

// $randomSymbol = rand(0,4);
// displaySymbol($symbols[$randomSymbol]);
displaySymbol($symbols[array_rand($symbols)]);
//displays random element in array

print_r($symbols);

sort($symbols); //orders array elements aphlabetically
rsort($symbols); //reverses array elements
?>