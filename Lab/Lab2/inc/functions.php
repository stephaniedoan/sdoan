<?php
function displaySymbol($randomValue){
    switch ($randomValue) {
        case 0: $symbol = "seven";
            break;
        case 1: $symbol = "cherry";
            break;
        case 2: $symbol = "lemon";
            break;
    }
}


function displaySymbol($randomValue1, $randomValue2, $randomValue3) {
    
    echo "<div id='output'>";
    if ($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3) {
        switch ($randomValue1) {
            case 0: $totalPoints = 1000;
                    echo "<h1>Jackpot!</h1>";
                    break;
            case 1: $totalPoints = 500;
                    break;
            case 2: $totalPoints = 250;
                    break;
        }
        
        echo "<h2>You won $totalPoints points!</h2>";
    } else {
        echo "<h3> Try Again! </h3>";
    }
    echo "</div>";
    }
    
?>