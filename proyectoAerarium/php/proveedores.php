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
            <a class="textEsp"  href="../php/Perfil.php">Mi cuenta</a>
            <a class="btn btn-outline-light" href="../index.html">Cerrar sesion</a>
        </div>
      </nav>
    </div>
    </header>


  <?php
  include("conex.php");
  session_start();
  $resul = mysqli_query($conn,"SELECT * FROM $tabla_db3 ");
  
  if (!$resul) {
    die('Error en la consulta: ' . mysqli_error($conn));
}
  ?>




  <div class="margen">
      <a type="button" class="btn btn-warning centrarBtn"  href="../html/regisPro.html">Registrar Proveedor</a>
      <br>
      <h1 class="textEsp" style="text-align: center;">Proveedores registrados</h1>
      <br>
     <table class="table">
        <thead class="thead-dark fondoCab textEsp">
          <tr>
          <th >#</th>
            <th >Tipo de documento</th>
            <th >N° de documento</th>
            <th >Nombre</th>
            <th >Telefono</th>
            <th >Email</th>
            <th >Estado</th>
            
          </tr>
        </thead>
        <tbody>
          <?php
        while ($consulta=mysqli_fetch_assoc($resul)) {     

          
          ?>
          <tr>
            <td class="textNormi"><a><?echo $consulta['idProveedor'];?></a></td>
            <td class="textNormi"><?echo $consulta['tipoDocumentoProveedor'];?></td>
            <td class="textNormi"><?echo $consulta['documentoProveedor'];?></td>
            <td class="textNormi"><?echo $consulta['nombresProveedor']; echo" ".$filas['apellidosProveedor'];?></td>
            <td class="textNormi"><?echo $consulta['telefonoProveedor'];?></td>
            <td class="textNormi"><?echo $consulta['correoProveedor']; ?></td>
            <td class="textNormi"><?echo $consulta['estadoProveedor'];?></td>
            <td>
             <?php
             echo"<a href=''> Editar </a>";   
             ?>
            </td>
            <td>
             <?php
             echo"<a href=''> Eliminar </a>";
             ?>
            </td>
          </tr>
        <?php
         } 
        ?>
        </tbody>
    </table>

  </div>
   


<?php
 mysqli_close($conn);
?>
</body>
</html>
