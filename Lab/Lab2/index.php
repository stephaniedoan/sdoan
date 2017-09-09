<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <meta charset="utf-8" />
    </head>
    <body>
    
    <?php
    
    //$symbol = "orange";
    
    function displaysymbol($randomNumber){
    
        $randomNumber = rand(0,2); //Generates random number
    
        if ( $randomNumber == 0 ) {
            $symbol = "seven";
        } else if ( $randomNumber == 1) {
            $symbol = "cherry";
        } else {
            $symbol = "lemon";
        }
    
        echo "<img src='img/$symbol.png' alt=\"$symbol\" title=\"$symbol\" width=\"70\"/>";
    
    }
    
    // //Display number of points
    // function displayPoints($randomValue1,$randomValue2,$randomValue3){
        
    //     //checking if symbols are same
        
    //     if ($randomValue1) != $randomValue2) {
            
    //         echo "<h1> Try again! </h2>
            
    //     }
        
    // }

    $randomValue1 = rand(0,2); //Generates random number
    displaySymbol($randomValue1); //call displaySymbol() function
    
    $randomValue2 = rand(0,2); 
    displaySymbol($randomValue2);
    
    $randomValue3 = rand(0,2);
    displaySymbol($randomValue3);
    
    echo "The random values are: ";
    echo $randomValue1 . "  " . $randomValue2 . "  " . $randomValue3;
    
    displayPoints($randomValue1,$randomValue2,$randomValue3);
    
    ?>
</body>
</html>