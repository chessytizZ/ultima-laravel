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
            <label for="exampleFormControlSelect1">Seleccione genero </label>
            <div class="col-md-6"></div>
            <select name="departamentos" class="form-control" id="exampleFormControlSelect1">
                <option value="">Post</option>
                <option value="">Video</option>
                <option value="">Genero</option>
            
            </select>
          </div>
          <label for="exampleFormControlSelect1">Titulo del post </label>
          <div class="col-md-6"></div>

          <input name="nombre_producto" class="form-control" type="text" placeholder="Muñeca">

          <label for="exampleFormControlSelect1">contenido</label>
          <div class="col-md-6"></div>

          <div class="form-group">
                
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

          <button type="submit" class="btn">Enviar</button>
        </form>


  </div>



</body>
</html>
