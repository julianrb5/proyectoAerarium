<?php
include "crudPago.php";
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity=
    "sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleIndex.css">
    <title>Aerarium</title>

</head>
<body class="body2">
<header>
    <div>
    <nav class="navbar">
        <img class="img1" src="../imagenes/logo1Aerarium.png">

        <div class="navbar-left">
            <h1 class="textEsp"> Aerarium</h1>
        </div>

        <div class="navbar-right">

            <a class="textEsp" href="#">Compromisos de pagos</a>
            <a class="textEsp" href="proveedores.php">Proveedores</a>
            <a class="textEsp"  href="../php/tesoPerfil.php">Mi cuenta</a>
            <a class="btn btn-outline-light" href="../index.html">Cerrar sesion</a>
        </div>
      </nav>
    </div>
    </header>  


<section>
  <div class="contReg margen">

   
    <h2 class="textNorm">Programacion Pagos</h2>
    <br>
    <a class="btn btn-primary" href="programacionPagos.php" role="button">Volver a Programacion</a>
    <br>
    <br>
     
   
        <div class="">
        <table class="table" >
          <thead class="thead-dark fondoCab textEsp">
            <tr>              
              <th scope="col">FechaPago</th>
              <th scope="col">Fecha Vencimiento</th>
              <th scope="col">Evidencia Pago</th>
              <th scope="col">ID Proveedor</th>
              <th scope="col">Alerta</th>
              <th scope="col">ID Usuario</th>
              <th scope="col">Estado Pago</th>
              <th scope="col">Accion</th>             
            </tr>
          </thead>
          <?php foreach($datos as $dato) {?>
          <tbody>
            <tr>              
              <td><?php echo $dato[1]; ?></td>
              <td><?php echo $dato[2]; ?></td>
              <td><?php echo $dato[3]; ?></td>
              <td><?php echo $dato[4]; ?></td>
              <td><?php echo $dato[5]; ?></td>
              <td><?php echo $dato[6]; ?></td>
              <td><?php echo $dato[7]; ?></td>
              <td><a href="?idProgramacionPagos=<?php echo $dato[0];?>">Borrar</a></td>
            </tr>
            </tbody>
            <?php } ?>
        </table>
       </div>
  </div>


</section>

  
 
</body>
</html>