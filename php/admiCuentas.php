
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
            <h1 class="textEsp"> Aerarium-Administrador</h1>
        </div>

        <div class="navbar-right">

           
            <a class="textEsp"  href="../php/PerfilAdmin.php">Mi cuenta</a>
            <a class="textEsp"  href="../html/adminPage.html">Inicio</a>
            <a class="btn btn-outline-light" href="../index.html">Cerrar sesion</a>
        </div>
      </nav>
    </div>
    </header>






  <div class="margen">
   <form action="admiCuentas.php" target="_self" method="POST" enctype="multipart/form-data">
    <div>

    
      <!-- <a type="button" class="btn btn-warning centrarBtn"  href="../html/regisPro.html">Registrar Proveedor</a>
      <br> -->
     <br>
      
      <input class="btn btn-info centrarInput"  name="btnConsultar" type="submit" value="Consultar usuarios registrados">
      <br>
      <br>

      <input class="btn btn-success centrarInput" name="btnDescargar" type="submit" value="Descargar usuarios registrados en formato Excel">
      
      
      
      </form>
   



      
  



<?php

include_once "conex.php";
session_start();



//CONSULTAR
if (isset($_POST['btnConsultar'])) 
{
  
   $resultados = mysqli_query($conn, "SELECT * FROM $tabla_db1 ");
   if ($resultados) {
    /* while($consulta = mysqli_fetch_array($resultados)) {?> */
   ?>
        <br>
        <i class="bi bi-battery-full"></i>
      <h1 class="textEsp" style="text-align: center;">Usuarios registrados</h1>
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
            <th >Rol</th>
            <th >Cargo</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php while($consulta = mysqli_fetch_array($resultados)) {?>
        <!-- <tbody> -->
          <tr>
            <form action="actualizarPro.php" target="_self" method="POST" enctype="multipart/form-data"></form>
            <td ><?php echo $consulta['idUsuario']."<br>"; ?></td>
            <td><?php echo $consulta['tipoDocumentoUsuario']."<br>"; ?></td>
            <td><?php echo $consulta['documentoUsuario']."<br>"; ?></td>
            <td><?php echo $consulta['nombresUsuario']; echo " ". $consulta['apellidosUsuario'];?></td>
            <td><?php echo $consulta['telefonoUsuario']."<br>";?></td>
            <td><?php echo $consulta['correoUsuario']."<br>"; ?></td>
            <td><?php echo $consulta['estadoUsuario']."<br>"; ?></td>
            <td><?php
            if ($consulta['rol_idRol']==1) {
            echo "Administrador";
            } else if ($consulta['rol_idRol']==2) {
            echo "Tesorero";
            }?></td>
            <td><?php
            if ($consulta['cargos_idCargo']==1) {
            echo "Encargado";
            } else if ($consulta['cargos_idCargo']==2) {
            echo "Auxiliar" ;
            }?></td>
           <!--  <td>
            /*  echo "<a href='actualizarPro.php?idPro=".$consulta['idProveedor']."'> Actualizar - Eliminar </a>"; ?></ */td> -->
            
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
  header("Location: reporteUsuarios.php");
  exit();
}



?>
</div>
</body>
</html>