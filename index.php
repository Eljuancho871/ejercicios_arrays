<?php 

    /*
      ! Eliminar elementos duplicados de una lista de especies alienígenas
    */


    $aliens = ["aca", "joda", "eche", "marciano", "ali", "", "uranoMar", "uranoMar", "ali", "aca"];


    $aliens_unique = array_filter(array_unique($aliens));

    echo "aliens encontrados sin repetirse";
    forEach($aliens_unique as $key => $value){

        echo "<br/>";
        echo "---> ".$value;
    }
  

?>


