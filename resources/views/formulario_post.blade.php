<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/formulario.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display&display=swap" rel="stylesheet">
    <title>Departamento</title>
</head>

<body>

  <div class="padre">
      <form action="ventas.php" method="POST">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Seleccione .. </label>
            <div class="col-md-6"></div>
            <select name="departamentos" class="form-control" id="exampleFormControlSelect1">
                <option value="">Post</option>
                <option value="">Video</option>
                <option value="">Genero</option>
            
            </select>
          </div>
          <label for="exampleFormControlSelect1">Nombre del post </label>
          <div class="col-md-6"></div>

          <input name="nombre_producto" class="form-control" type="text" placeholder="Muñeca">

          <label for="exampleFormControlSelect1">contenido del post</label>
          <div class="col-md-6"></div>

          <input name="precio" class="form-control" type="text" placeholder="1,000">

          <label for="exampleFormControlSelect1">genero del post</label>
          <div class="col-md-6"></div>

          <input name="unidades_vendidas" class="form-control" type="text" placeholder="100">

          <div class="col-md-6"></div>
          <button type="submit" class="btn">Enviar</button>
        </form>


  </div>



</body>
</html>
