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


<nav class="navbar">
      <img class="img1" si src="../imagenes/logo1Aerarium.png">

      <div class="navbar-left">
          <h1 class="textEsp"> Aerarium</h1>
      </div>

      <div class="navbar-right">
       
        <a class="textEsp" href="../index.html">Inicio</a>    
        <a class="btn btn-outline-light" href="../html/login.html">Inicio de sesion</a>
    </div>


    </nav>
 


    
      <section>
        <div class="contReg">
          <br>
          <div class="ancho">
            <h2 class="textNorm">Registro de usuario</h2>
              <form action="../php/registroUsuario.php" target="_self" method="POST" enctype="multipart/form-data">

                <select type="submit" placeholder="Nombre de la empresa"  class="form-select" name="tipoDoc" aria-label="Default select example">
                  <option selected>Tipo de documento</option>
                  <option value="CC">CC</option>
                  <option value="TI">TI</option>
                  <option value="NIT">NIT</option>
                </select>
              <br>
        
                <input class="form-control " type="text" placeholder="Documento de usuario" name="docUs" aria-label="default input example">
              <br>
        
                <input class="form-control" type="text" placeholder="Nombres usuario" name="nomUs" aria-label="default input example">
              <br>
        
                <input class="form-control" type="text" placeholder="Apellido usuario" name="apelUs" aria-label="default input example">
              <br>
        
                <input class="form-control" type="text" placeholder="Teléfono usuario" name="telUs" aria-label="default input example">
              <br>
        
                <input class="form-control" type="text" placeholder="Correo usuario" name="corUs" aria-label="default input example">
              <br>
        
                <input class="form-control" type="text" placeholder="Contraseña" name="conUs" aria-label="default input example">
              <br>
              
                <select type="submit" class="form-select" name="TipoUs" aria-label="Default select example">
                    <option selected>Seleccione tipo de usuario</option>
                    <option value="1">Administrador</option>
                    <option value="2">Tesorero</option>
                    
                </select>
        
              <br>
              <select type="submit" class="form-select" name="carUs" aria-label="Default select example" >
              <option selected>Seleccione cargo</option>
              <option value="1">Encargado</option>
              <option value="2">Auxiliar</option>
              </select>
        
              <br>
         
                     <input class="btn btn-primary boton-modal" name="btnReg" type="submit" value="Registrar">
               
                  
                  </form>
          </div>
          
        </div>      
      </section>
 
    

<?php

include_once "conex.php";
$tipoDoc = $_POST["tipoDoc"];
$docUs = $_POST["docUs"];
$nomUs = $_POST["nomUs"];
$apelUs = $_POST["apelUs"];
$telUs = $_POST["telUs"];
$corUs= $_POST["corUs"];
$conUs = $_POST["conUs"];
$tipoUs = $_POST["TipoUs"];
$carUs = $_POST["carUs"];  
$estado = "activo";

//REGISTRAR
if (isset($_POST['btnReg'])) 
{
   $sql = "INSERT INTO $tabla_db1 (usTipoDocumento, usDocumento, usNombre, usApellido,usTelefono, usCorreo, usPassword, usEstado, rol_idrol, Cargo_idCargo) VALUES ('$tipoDoc','$docUs', '$nomUs', '$apelUs', '$telUs', '$corUs', '$conUs', '$estado','$tipoUs', '$carUs')";
   
if (mysqli_query($conn, $sql)) {?>
  <script>
    alert("Registro realizado con exito");
  </script>

 <?php  
} else {
    echo" Error en la base de datos, no se creo..! ";
}
} 


?>

 
</body>
</html>
