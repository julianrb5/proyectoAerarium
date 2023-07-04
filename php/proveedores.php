
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity=
    "sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleIndex.css" >
    <title>Aerarium</title>
</head>
<body class="body2">



    <main>
        <header>
    <div>
    <nav class="navbar">
        <img class="img1" src="../imagenes/logo1Aerarium.png">

        <div class="navbar-left">
            <h1 class="textEsp"> Aerarium</h1>
        </div>

        <div class="navbar-right">

            <a class="textEsp" href="programacionPagos.php">Compromisos de pagos</a>
            <a class="textEsp" href="proveedores.php">Proveedores</a>
            <a class="textEsp"  href="../php/PerfilTeso.php">Mi cuenta</a>
            <a class="btn btn-outline-light" href="../index.html">Cerrar sesion</a>
        </div>
      </nav>
    </div>
    </header>






  <div class="margen">
   <form action="proveedores.php" target="_self" method="POST" enctype="multipart/form-data">
    <div>

    
      <a type="button" class="btn btn-warning centrarBtn"  href="../html/regisPro.html">Registrar Proveedor</a>
      <br>
     
      
      <input class="btn btn-dark centrarInput"  name="btnConsultar" type="submit" value="                                                                                                                    Consultar  proveedores                                                                                                                    ">
      <br>
      <br>
      <input class="btn btn-success centrarInput" name="btnDescargar" type="submit" value="Descargar proveedores registrados en formato Excel">
      
      
      </form>
   



      
  



<?php

include_once "conex.php";
session_start();



//CONSULTAR
if (isset($_POST['btnConsultar'])) 
{
  
   $resultados = mysqli_query($conn, "SELECT * FROM $tabla_db3 ");
   if ($resultados) {
    /* while($consulta = mysqli_fetch_array($resultados)) {?> */
   ?>
        <br>
        <i class="bi bi-battery-full"></i>
      <h1 class="textEsp" style="text-align: center;">Proveedores registrados</h1>
      <br>
       <table class="table">
       <thead class="thead-dark fondoCab textEsp">
          <tr>
          <th >#</th>
            <th >Tipo doc</th>
            <th >N° de documento</th>
            <th >Nombre</th>
            <th >Telefono</th>
            <th >Email</th>
            <th >Estado</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php while($consulta = mysqli_fetch_array($resultados)) {?>
        <!-- <tbody> -->
          <tr>
            <form action="actualizarPro.php" target="_self" method="POST" enctype="multipart/form-data"></form>
            <td name="idPro"><?php echo $consulta['idProveedor']."<br>"; ?></td>
            <td><?php echo $consulta['tipoDocumentoProveedor']."<br>"; ?></td>
            <td><?php echo $consulta['documentoProveedor']."<br>"; ?></td>
            <td><?php echo $consulta['nombresProveedor']; echo " ". $consulta['apellidosProveedor']."<br>";?></td>
            <td><?php echo $consulta['telefonoProveedor']."<br>";?></td>
            <td><?php echo $consulta['correoProveedor']."<br>"; ?></td>
            <td><?php echo $consulta['estadoProveedor']."<br>"; ?></td>
            <td>
            <?php echo "<a href='actualizarPro.php?idPro=".$consulta['idProveedor']."'> Actualizar - Eliminar </a>"; ?></td>
            
          </tr>
        </tbody>
      <?php } ?>
        </table>

    <?php
       
       
       
    /* } */
    
    } else {
        // Hubo un error en la consulta
        echo "Error en la consulta: " . mysqli_error($conn);
    }

} 
if (isset($_POST['btnDescargar'])) {
  header("Location: reporteProveedores.php");
  exit();
}



?>
</div>
</body>
</html>