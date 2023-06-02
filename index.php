<?php 

    /*
      ! Verificar si un tipo de nave espacial está en tu flota
    */


    if(isset($_GET["name"])){

        $naves = ["nave1", "nave2", "nave3", "nave4", "nave5", "nave6", "nave7"];
    
        $response = (in_array($_GET["name"], $naves)) ? true : false;
        echo json_encode([ "existe" => $response ]);
    }
?>


