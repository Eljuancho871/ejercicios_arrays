<?php 

    /*
      ! Filtrar planetas habitables
    */

    $planetas = ["Venus" => false, "Tierra" => true, "Marte" => true, "Mercurio" => false, "saturno" => false, "venus" => false, "jupiter" => false];

    $planetas_habitables = array_filter($planetas, function ($value, $key){

        return $value === true;
    
    }, ARRAY_FILTER_USE_BOTH);

    echo "planetas habitables";

    foreach($planetas_habitables as $key => $value){

        echo "<br/>";
        echo "planeta: ".$key;
    }
?>


