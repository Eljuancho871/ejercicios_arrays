<?php 

    /*
      ! Crear una lista de satélites para un planeta
    */


    $planetas = ["mercurio", "venuz",  "tierra",  "marte",  "jupiter",  "saturno",  "urano",  "neptuno", "pluton"];

    echo "Planetas en su orden => ";
    foreach($planetas as $key){

      echo $key.", ";
    }

    echo "<br/>";

    echo "Planetas en su orden invertido => ";
    foreach(array_reverse($planetas) as $key){

      echo $key.", ";
    }
?>