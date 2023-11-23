<?php
    
    $age = 13;

    // la condition if

    if ($age > 18) {
        echo "il est majeur" ."<br>";
    } else {
        echo "il est mineur" ."<br>";
    }

    // condition switch

    $choix = 1;

    switch ($choix) {
        case 1:
            echo "le choix est : $choix"."<br>";
            break;
        
        case 2:
            echo "le choix est : $choix"."<br>";
            break;
        
        case 3:
            echo "le choix est : $choix"."<br>";
            break;
        
        default:
                echo "pas de choix" ."<br>";
            break;
    }
    

?>