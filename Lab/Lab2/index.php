<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <meta charset="utf-8" />
    </head>
    <body>
    <img src="img/cherry.png" alt="cherry" title="Cherry" width="70" />
    <?php
    
    
    
   for ($i=1; $i<4; $i++){
       ${"randomValue" . $i } = rand(0,2);
       displaySymbol(${"randomValue" . $i});
   }
   displayPoints($randomValue1, $randomValue2, $randomValue3);
    
    
  
 function displaySymbol($randomValue){
    switch ($randomValue) {
    case 0: $symbol = "seven";
        break;
    case 1: $symbol = "cherry";
        break;
    case 2: $symbol = "lemon";
        break;
}

echo "<img src='img/$symbol.png' alt='$symbol' title='". ucfirst($symbol) . "' width='70' >";

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
}
    ?>
</body>
</html>