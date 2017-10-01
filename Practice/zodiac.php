<?php

$zodiac = array("rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster","dog","pig");


function yearList($startYear, $endYear){

    global $zodiac;    
    
    $yearSum = 0;
    
    for ($i = $startYear; $i <= $endYear; $i = $i += 4) {
        
        echo "<li>  Year $i "; 
    
        if ($i == 1776) {
            echo " USA INDEPENDENCE!";
        }    
        
        echo "</li> ";
        
        $yearSum = $yearSum + $i;
        
    }
    
    return  $yearSum;
    
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Chinese Zodiac Tasks</title>
    </head>
    <body>

    <h1>Chinese Zodiac Tasks</h1>
    
    <ul>
        
        <?php
        
        $sum = yearList(1500, 1550);
        
        ?>
        
        <h2> Year Sum: <?=$sum?> </h2>
        
    </ul>

    </body>
</html>