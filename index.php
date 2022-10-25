<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <main>
    <h1>Calcule su IMC</h1>
    <form action="imc.php" method="POST">
      <div class="form_group">
        <label for="altura">Introduzca su altura</label>
        <input type="text" name="altura" />
        <small>En centimetros</small>
      </div>
      <div class="form_group">
        <label for="peso">Introduzca su peso</label>
        <input type="text" name="peso" />
      </div>
      <input type="submit" value="Calcular IMC">
    </form>

  </main>

 


</body>

</html>