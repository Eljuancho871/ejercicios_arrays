<?php 

    /*
      ! Crear un array para un sistema solar
      ?  Supongamos que estás creando un juego de simulación espacial y necesitas crear un sistema solar básico. Decides que cada sistema solar en tu juego debe tener un cierto númerodeplanetascuandosecrea
    */

    if($_GET["num"]){

        $array_planetas = array_fill(0, $_GET["num"], "Deshabitado");
        echo json_encode($array_planetas);
    }
?>


