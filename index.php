<?php 

    /*
      ! Encontrar planetas comunes en dos sistemas solares
    */


    $planetas_solar1 = ["mercurio", "venuz", "tierra", "marte", "jupiter", "saturno", "urano", "neptuno"];

    $planetas_solar2 = ["mercurio", "venuz", "tierras", "morte", "jupyter", "saturnu", "urano", "netuno"];
  
    $planetas_comunes = array_intersect($planetas_solar1, $planetas_solar2);

    echo "Planetas comunes entre los dos sistemas solares";

    forEach($planetas_comunes as $key => $value){

        echo "<br/>";
        echo "---> ".$value;
    }
?>


