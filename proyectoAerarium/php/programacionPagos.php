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
<body>
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
            <a class="textEsp"  href="../php/perfilTeso.php">Mi cuenta</a>
            <a class="btn btn-outline-light" href="../index.html">Cerrar sesion</a>
        </div>
      </nav>
    </div>
    </header>  


<section class="container d-flex justify-content-center">

        <div  class="col-2 g-5">
          
        </div>
        
        <form class="row g-2" method="POST" style="color: white">
        <h2>Programacion Pagos</h2>
          <div class="col-8 mx-3" >
            <label for="nombre">Fecha de Pago</label>
            <input class="form-control" type="date" placeholder="Fecha de Pago" aria-label="default input example" name="fechaPago" id="fechaPago">
          </div>

          <div class="col-8 mx-3" >
            <label for="nombre">Fecha de Vencimiento</label>
            <input class="form-control" type="date" placeholder="Fecha de Vencimiento" aria-label="default input example" name="fechaVencimiento" id="fechaVencimiento">
          </div> 
          
          <div class="col-8 mx-3" >
            <label for="nombre">Evidencia Pago</label>
            <a>Por favor subir todos sus documentos en un solo PDF</a>
            <input class="form-control" type="text" placeholder="archivoEvidenciaPago" aria-label="default input example" name="archivoEvidenciaPago" id="archivoEvidenciaPago">
          </div>   

          <div class="col-8 mx-3" >
            <label for="nombre">Proveedor</label>
            <input class="form-control" type="text" placeholder="Proveedor" aria-label="default input example" name="proveedor" id="proveedor">
          </div> 
          
          <div class="col-8 mx-3" >
            <label for="nombre">Alerta</label>
            <input class="form-control" type="text" placeholder="Alerta" aria-label="default input example" name="alerta" id="alerta">
          </div> 
          
          <div class="col-8 mx-3" >  
            <label for="nombre">Usuario</label>
            <input class="form-control" type="text" placeholder="Usuario" aria-label="default input example" name="usuario" id="usuario">
          </div> 
          
          <div class="col-8 mx-3" >  
            <label for="nombre">Estado del Pago</label>
            <input class="form-control" type="text" placeholder="Estado del Pago" aria-label="default input example" name="estadoPago" id="estadoPago">
          </div> 
          
            
          <div class="inline-buttons">
              <button type="submit" value="Programar" class="btn btn-primary">Programar Pago</button>
              
              <button type="submit" value="Consultar" class="btn btn-info" name="btn_consultar">Consultar Pago</button>
              <a class="btn btn-info" href="consultar_eliminarPago.php" role="button">Registro Total</a>
              <input class="btn btn-success" name="btnDescargar" type="submit" value="Descargar proveedores registro total en formato Excel">
          </div>
            
        </form>


</section>
</body>
</html>