<!DOCTYPE html>
<html lang="en" style="height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <title>Tu IMC</title>
</head>

<body>

  <?php
  // Clase para obtener el imc y verificar los valores
  class IMCDetermination
  {
    //Esta funcion obtiene el imc
    function getIMC($peso, $altura)
    {
      return round($peso / $altura,2);
    }
    // Esta funcion verifica el rango de imc y entrega los valores finales y para los estilos de css
    function checkIMC($imc)
    {

     
      if ($imc < 18.5) {
        return ['Bajo Peso', 'danger'];
      } else if ($imc >= 18.5 && $imc < 24.9) {
        return ['Adecuado', 'success'];
      } else if ($imc >= 25 && $imc < 29.9) {
        return ['Sobrepeso', 'primary'];
      } else if ($imc >= 30 && $imc < 39.9) {
        return ['Obesidad', 'warning'];
      } else if ($imc >= 40) {
        return ['Obesidad Severa', 'danger'];
      }
    }
  }

// Creamos una instancia de nuestra clase para usar sus funciones
$IMCDeterminator = new IMCDetermination;



// Verificamos que las variables se hayan enviado correctamente y luego le damos valores a las variables
  $peso =  isset($_POST["peso"]) ?  $_POST["peso"] : 0;
  $altura = isset($_POST["altura"]) ?  ($_POST["altura"] / 100) * ($_POST["altura"] / 100)  : 0;
  $status;
  // Obtenemos los valores y los delegamos a sus respectivas variables
  $imc = $IMCDeterminator->getIMC($peso, $altura);
  // deestructuramos las variables de nuestro array para mayor facilidad
  [$status, $alert] = $IMCDeterminator->checkIMC($imc);



  ?>
  <main action="imc.php" class="card container" style="width: 18rem;">
    <div class="container card-body">
      <h2 class="card-title text-center">Su IMC es de</h2>
      <div class="col">
        <h1 class="text-center">
          <!-- Entregamos el imc -->
          <span class="badge text-bg-success "> <?php echo $imc; ?> </span>
        </h1>
      </div>
      <div class=" col ">
        <h4 class="card-title text-center">Su condicion es de </h4>
        <!-- Entregamos la clase para el status del imc -->
        <div class="alert <?php echo "class= text-center alert alert-" . $alert; ?>" role="alert">
          <!-- Entregamos el estatus del imc -->
          <?php echo $status; ?>
        </div>

      </div>
    </div>
    <br>
  </main>

  </div>
</body>

</html>