<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity=
    "sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleLogin.css">
    <title>Aerarium</title>
</head>
<body>


<div class="cont">
      

        
      <div class="contenedorText">
          <img class="logoOk" src="../imagenes/logo1Aerarium.png">
        <h2 class="textLog">Aerarium</h2>
      </div>
        
        
        
        
        <h2 class="textNorm contenedorText">Registro de usuario</h2>
     
  



      <form action="../php/registroUsuario.php" target="_self" method="POST" enctype="multipart/form-data">
          <div class="container mt-5">
              
              <div class="row"><!-- inicio de la primera fila -->
                  <div class="col-5">
                      <select class="form-select mb-3" name="tipoDoc" aria-label="Default select example">
                          <option disabled selected value="">Tipo de documento</option>
                          <option value="CC">CC</option>
                          <option value="TI">TI</option>
                      </select>
                  </div>
  
                  <div class="col-7">
                      <input class="form-control mb-3" type="text" placeholder="Documento de usuario" name="docUs"
                          aria-label="default input example" required>
                  </div>

              </div><!-- final de la primera fila -->
              


              <div class="row"><!-- Inicio de la seguna fila -->
                  <div class="col-6">
                      <input class="form-control mb-3" type="text" placeholder="Nombres usuario" name="nomUs"
                          aria-label="default input example" required>
                  </div>
  
                  <div class="col-6">
                      <input class="form-control mb-3" type="text" placeholder="Apellido usuario" name="apelUs"
                          aria-label="default input example" required>
                  </div>

              </div><!-- final de la segunda fila -->


              
              <div class="row"><!-- inicio de la tercera fila -->
                  <div class="col-12">
                      <input class="form-control mb-3" type="text" placeholder="Correo usuario" name="corUs"
                          aria-label="default input example" required>
                  </div>
              </div><!-- final de la tercera fila -->

              <div class="row"><!-- inicio de la cuarta fila --> 
                  <div class="col-6">
                      <input class="form-control mb-3" type="text" placeholder="Teléfono usuario" name="telUs"
                          aria-label="default input example" required>
                  </div>

                  <div class="col-6">
                      <input class="form-control mb-3" type="text" placeholder="Contraseña" name="conUs"aria-label="default input example" required>
                  </div>

              </div><!-- final de la cuarta fila --> 
                  
              
              

              <div class="row"> <!-- inicio de la quinta fila -->
                  <div class="col-6">
                      <select class="form-select mb-3" name="TipoUs" aria-label="Default select example" required
                          pattern="^(?!\s*$).+">
                          <option disabled selected value="">Seleccione tipo de usuario</option>
                          <option value="1">Administrador</option>
                          <option value="2">Tesorero</option>
                      </select>
                  </div>
  
                  <div class="col-6">
                      <input type="hidden" name="carUsHidden" required>
                      <select class="form-select mb-3" name="carUs" aria-label="Default select example" required
                          pattern="^(?!\s*$).+">
                          <option disabled selected value="">Seleccione cargo</option>
                          <option value="1">Encargado</option>
                          <option value="2">Auxiliar</option>
                      </select>
                  </div>

              </div><!-- final de quinta fila -->

              

              <br>

              <div class="row">
                  <div class="d-grid gap-2 ">
                      <input class="btn  btnRegistro" name="btnReg" type="submit" value="Registrar">
                  </div>
              </div>
              

          </div>

      </form>




  </div>




    

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
