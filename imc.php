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
        return 'Bajo Peso';
      } else if ($imc >= 18.5 && $imc < 24.9) {
        return 'Sobrepeso';
      } else if ($imc >= 25 && $imc < 29.9) {
        return 'Sobrepeso';
      } else if ($imc >= 30 && $imc < 39.9) {
        return 'Obesidad';
      } else if ($imc > 40) {
        return 'Obesidad Severa';
      }
    }
  }


  $IMCDeterminator = new IMCDetermination;



  $peso =  isset($_POST["peso"]) ?  $_POST["peso"] : 0;
  $altura = isset($_POST["altura"]) ?  ($_POST["altura"]/ 100) *($_POST["altura"]/ 100)  : 0;
  $status;
  
  $imc = $IMCDeterminator->obtenerIMC($peso, $altura);
  $status = $IMCDeterminator->checkIMC($imc);
  echo 'IMC';
  echo $imc;
  echo 'Status';
  echo $status;

  ?>
