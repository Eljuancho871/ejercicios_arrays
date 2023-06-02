<?php 

    /*
      ! Verificar la existencia de un planeta en un sistema solar
    */


    if(isset($_GET["name"])){

        $planetas = ["mercurio", "venuz", "tierra", "marte", "jupiter", "saturno", "urano", "neptuno"];
    
        $response = (in_array($_GET["name"], $planetas)) ? true : false;
        echo json_encode([ "existe" => $response ]);
    }
?>


