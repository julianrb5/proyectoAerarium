<?php
include "crear_Pago.php";
?>

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
  <div class="navbar"><!-- Esta es la barra de navegación, la gris de la parte superior --> 
     
    <!-- <img class="img1" src="LogoAerarium.png"> -->
    <h1 class="textEsp">Aerarium</h1>
  </div>

<section>
  <div class="contReg">
    <h1 class="textEsp">Aerarium</h1>
   
    <h2 class="textNorm">Programacion Pagos</h2>
    <br>
        <form method="POST">
          <input class="form-control" type="date" placeholder="Fecha de Pago" aria-label="default input example" name="fechaPago" id="fechaPago">
          <br>
          <input class="form-control" type="date" placeholder="Fecha de Vencimiento" aria-label="default input example" name="fechaVencimiento" id="fechaVencimiento">
          <br>
          <input class="form-control" type="text" placeholder="Proveedor" aria-label="default input example" name="proveedor" id="proveedor">
          <br>
          <input class="form-control" type="text" placeholder="Alerta" aria-label="default input example" name="alerta" id="alerta">
          <br>
          <input class="form-control" type="text" placeholder="Usuario" aria-label="default input example" name="usuario" id="usuario">
          <br>
          <input class="form-control" type="text" placeholder="Estado del Pago" aria-label="default input example" name="estadoPago" id="estadoPago">
          <br>
          
          <button type="submit" value=class="btn btn-primary">Programar Pago</button>
          
     

        </form>

        <div>
        <table class="table" style="color:aliceblue">
        <thead>
          <tr>
            <th scope="col" >ID</th>
            <th scope="col">FechaPago</th>
            <th scope="col">Fecha Vencimiento</th>
            <th scope="col">ID Proveedor</th>
            <th scope="col">Alerta</th>
            <th scope="col">ID Usuario</th>
            <th scope="col">Estado Pago</th>            
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">#</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          </tbody>
      </table>
  </div>
        </div>
  </div>


</section>

  
 
</body>
</html>