<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/views/formulario.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display&display=swap" rel="stylesheet">
    <title>Departamento</title>

</head>

<body>
  <div class="padre">
      <form action="ventas.php" method="POST">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Nombre del Departamento</label>
            <div class="col-md-6"></div>
            <select name="departamentos" class="form-control" id="exampleFormControlSelect1"

            >

            </select>
          </div>
          <label for="exampleFormControlSelect1">Nombre del producto</label>
          <div class="col-md-6"></div>

          <input name="nombre_producto" class="form-control" type="text" placeholder="Muñeca">

          <label for="exampleFormControlSelect1">Precio del producto</label>
          <div class="col-md-6"></div>

          <input name="precio" class="form-control" type="text" placeholder="1,000">

          <label for="exampleFormControlSelect1">Unidades vendidas</label>
          <div class="col-md-6"></div>

          <input name="unidades_vendidas" class="form-control" type="text" placeholder="100">

          <div class="col-md-6"></div>
          <button type="submit" class="btn">Enviar</button>
        </form>


  </div>



</body>
</html>
