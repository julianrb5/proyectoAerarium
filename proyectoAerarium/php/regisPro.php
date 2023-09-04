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

  <div class="navbar"><!-- Esta es la barra de navegación, la gris de la parte superior --> 
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
  </div>


  <div class="contReg margen">

    <h2 class="textNorm centrarBtn">Registro proveedor</h2>
    <br>
        
      <form action="regisPro.php" target="_self" method="POST" enctype="multipart/form-data">

          
          <select type="submit" placeholder="Tipo de documento"  class="form-select"  name="tipoDocPro" aria-label="Default select example">
          <option selected>Tipo de documento</option>
          <option value="CC">CC</option>
          <option value="TI">TI</option>
          <option value="NIT">NIT</option>
          </select>
          <br>

          <input class="form-control" type="text" placeholder="N° de documento" name="docPro" aria-label="default input example">
          <br>

          <input class="form-control" type="text" placeholder="Nombres de la empresa" name="nombPro" aria-label="default input example">
          <br>

          <input class="form-control" type="text" placeholder="Apellidos de la empresa" name="apellPro" aria-label="default input example">
          <br>

          <input class="form-control" type="text" placeholder="Número de contacto" name="telPro" aria-label="default input example">
          <br>

          <input class="form-control" type="text" placeholder="Email de la empresa" name="emailPro" aria-label="default input example">
          <br>

          <input class="form-control" type="password" placeholder="Contraseña" name="contraseñaPro" aria-label="default input example">
          <br>

          <select type="submit" class="form-select" name="estadoPro" aria-label="Default select example" >
          <option selected>Seleccione estado de proveedor</option>
          <option value="1">Activo</option>
          <option value="2">Inactivo</option>
          </select>
        
          

          <br>
          
          <div class=" centrarBtn">
            
          <input class="btn btn-primary  margenBtn" name="btnReg" type="submit" value="Registrar">
          

          
          </div>
         <br>
          



      </form>
  



<?php

include_once "conex.php";
$tipoDocPro = $_POST["tipoDocPro"];
$docPro = $_POST["docPro"];
$nombPro= $_POST["nombPro"];
$apellPro = $_POST["apellPro"];
$telPro = $_POST["telPro"];
$emailPro= $_POST["emailPro"];
$contraseñaPro = $_POST["contraseñaPro"];
$estadoPro = $_POST["estadoPro"];

$_SESSION['documentoPro']= $docPro;



//REGISTRAR
if (isset($_POST['btnReg'])) 

{
   $sql = "INSERT INTO $tabla_db3 (tipoDocumentoProveedor, documentoProveedor, nombresProveedor, apellidosProveedor, 	telefonoProveedor, correoProveedor, passwordProveedor, estadoProveedor ) VALUES ('$tipoDocPro','$docPro', '$nombPro', '$apellPro', '$telPro', '$emailPro', '$contraseñaPro', '$estadoPro')";
   
if (mysqli_query($conn, $sql)) {?>
  <script>
    alert("Registro realizado con exito");
  </script>

 <?php  
} else {
    echo" Error en la base de datos, no se creo..! ";
}
}

//CONSULTAR
if (isset($_POST['btnCon'])) 
{
  
   $resultados = mysqli_query($conn, "SELECT * FROM $tabla_db3 /* WHERE documentoProveedor = '$docPro' */");
   if ($resultados) {
    while($consulta = mysqli_fetch_array($resultados)) {?>

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
          <tr>
            <td><?php echo $consulta['idProveedor']."<br>"; ?></td>
            <td><?php echo $consulta['tipoDocumentoProveedor']."<br>"; ?></td>
            <td><?php echo $consulta['documentoProveedor']."<br>"; ?></td>
            <td><?php echo $consulta['nombresProveedor']; echo " ". $consulta['apellidosProveedor']."<br>";?></td>
            <td><?php echo $consulta['telefonoProveedor']."<br>";?></td>
            <td><?php echo $consulta['correoProveedor']."<br>"; ?></td>
            <td><?php echo $consulta['estadoProveedor']."<br>"; ?></td>
          </tr>
        </tbody>
        </table>

    <?php
       
       
       
    }
    
    } else {
        // Hubo un error en la consulta
        echo "Error en la consulta: " . mysqli_error($conn);
    }

} 



?>
 
</body>
</html>
