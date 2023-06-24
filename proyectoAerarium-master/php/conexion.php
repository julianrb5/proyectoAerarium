
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity=
    "sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">
    <title>Aerarium</title>
</head>
<body>
 
  <div class="cont">
    <h1 class="textEsp">Aerarium</h1>
    <br>
    <h2 class="textNorm">Inicio de sesión</h2>

    <h3>Archivo php</h3>
<?php
$usuario = $_POST["nombUs"];
$clav = $_POST["contUs"];
$tipoUs = $_POST["TipoUs"];

    

echo "Los datos ingresados son: <br> Usuario: " . $usuario . "<br> Clave: ". $clav . "<br> Tipo de usuario: " .$tipoUs;

?>
  </div>
  <footer>
    <h2>Aerarium</h2>
  </footer>


 
</body>
</html>