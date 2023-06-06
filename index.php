<?php 

    /*
      ! Calcular la gravedad en diferentes planetas
    */

    function gravedad($calcular){

      return $calcular * 9.81;
    };
  
    $gravedad = ["mercurio"=> 0.38,"venus"=> 0.91,"tierra"=> 1.0,"marte"=> 0.38,"jupiter"=> 2.53,"saturno"=> 1.06,"urano"=> 0.92,"neptuno"=> 1.17];
    
    $gravedad_real = array_map("gravedad", $gravedad);
    echo "<br>";

    if(isset($_POST["planeta"])){

      echo "el planeta ".$_POST["planeta"]." tiene una gravedad real de ".$gravedad_real[$_POST["planeta"]];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="./css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ejercicio 4</title>
</head>
<body>
  <h2>Ejercicio 4</h2>
  Eliga el planeta que quieras ver la gravedad real
  <form method="POST" >
      <select name="planeta">
        <?php forEach($gravedad as $key => $value){  ?>

              <option value="<?php echo $key; ?>" > <?php echo $key; ?> </option>
          <?php } ?>
      </select>
      <input type="submit" value="Enviar">
  </form>
</body>
</html>