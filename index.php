<?php 

    /*
      ! Calcular la masa total de una flota de naves espaciales
    */


    $naves_masa = ["nave1" => 100, "nave2" => 10, "nave3" => 50, "nave4" => 50];


    function suma_masa($acc, $el){

        $acc += $el;
        return $acc;
    }
    
    $resultado = array_reduce(array_values($naves_masa), "suma_masa");
    echo "La suma de la masa de la flota es de: ";
    echo $resultado;
    
?>


