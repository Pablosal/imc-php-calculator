<!DOCTYPE html>
<html lang="en" style="height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <main>
    <form action="imc.php" class="card container" style="width: 18rem;" method="POST">
      <div class="container card-body">
        <h2 class="card-title">Calcule su IMC</h2>
        <div class="col">
          <label for="altura" class="form-label">Introduzca su altura</label>
          <input type="text" name="altura" class="form-control" required />
          <small class="text-muted">En centimetros</small>
        </div>
        <div class=" col ">
          <label for="peso" class="form-label">Introduzca su peso</label>
          <input type="text" name="peso" class="form-control" required />
          <small class="text-muted">En kilos</small>
        </div>
      </div>
      <input type="submit" value="Calcular IMC" class="btn btn-success">
      <br>
    </form>
  </main>


</body>


</html>