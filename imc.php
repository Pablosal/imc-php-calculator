<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>

  <?php
  class IMCDetermination
  {

    function obtenerIMC($peso, $altura)
    {
      return round($peso / $altura);
    }
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
      } else if ($imc > 40) {
        return ['Obesidad Severa', 'danger'];
      }
    }
  }


  $IMCDeterminator = new IMCDetermination;



  $peso =  isset($_POST["peso"]) ?  $_POST["peso"] : 0;
  $altura = isset($_POST["altura"]) ?  ($_POST["altura"] / 100) * ($_POST["altura"] / 100)  : 0;
  $status;

  $imc = $IMCDeterminator->obtenerIMC($peso, $altura);
  [$status, $alert] = $IMCDeterminator->checkIMC($imc);


  ?>

  <div class="card">
    <div class="card container">
      <button type="button" class="btn btn-primary" >
        IMC <span class="badge text-bg-success "> <?php echo $imc; ?> </span>
      </button>

      <div class="alert <?php echo "class= alert alert-". $alert; ?>" role="alert">
        <?php echo $status; ?>
      </div>
    </div>


  </div>
</body>

</html>