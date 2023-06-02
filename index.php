<?php 

    /*
      ! Identificar planetas y sus respectivos números de orden en el sistema solar
      ? Imagina que tienesun array que representa los planetas en nuestro sistema solar. Las claves son los nombres de los planetas y los valores son sus respectivos números de orden,empezandodesdeel sol.
    */

    $planetas = ["sol" => 0, "mercurio" => 1, "venus" => 2, "tierra" => 3, "marte" => 4, "jupiter" => 5, "saturno" => 6, "urano" => 7, "neptuno" => 8, "pluton" => 9];

    $planetas_llave_invertida = array_flip($planetas);
    $index = (isset($_GET["num"])) ? $_GET["num"] : "ningun dato";

    $planeta = isset($planetas_llave_invertida[$index]) ? $planetas_llave_invertida[$index] : "no se encontro";
    echo json_encode(["planeta" => $planeta]);
?>


