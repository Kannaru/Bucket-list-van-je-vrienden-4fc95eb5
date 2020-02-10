<?php 
    echo("Hoeveel vrienden zal ik vragen om hun droom?".PHP_EOL);
    $aantal = readline();
    if (!is_numeric($aantal)){
        exit($aantal." is geen getal");
    }
      
        for($i = 0; $i < $aantal; $i++){
    
            echo("Wat is jouw naam?".PHP_EOL);
            $naam = readline();
    
            echo("Wat is jouw droom?".PHP_EOL);
            $droom = readline();
    
            $dedroom[$naam] = $droom;
        }
        foreach ($dedroom as $naam => $droom){ 
            echo $naam, " zijn of haar droom is: ", $droom.PHP_EOL;
        }
    


        
        ?>