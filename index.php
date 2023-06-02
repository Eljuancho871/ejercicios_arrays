<?php 

    /*
      ! Encontrar planetas únicos en dos sistemas solares
    */


    $planetas_solar1 = ["mercurio", "venuz", "tierra", "marte", "jupiter", "saturno", "urano", "neptuno"];

    $planetas_solar2 = ["mercurio", "venuz", "tierras", "morte", "jupyter", "saturnu", "urano", "netuno"];
  
    $planetas_unidos = array_merge($planetas_solar1, $planetas_solar2);
    $planetas_unicos = array_unique($planetas_unidos);

    echo "Planetas unicos entre los dos sistemas solares";

    forEach($planetas_unicos as $key => $value){

        echo "<br/>";
        echo "---> ".$value;
    }
?>


