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
            <a class="textEsp" href="deletePag.php">Proveedores</a>
            <a class="textEsp"  href="../php/tesoPerfil.php">Mi cuenta</a>
            <a class="btn btn-outline-light" href="../index.html">Cerrar sesion</a>
        </div>
      </nav>
    </div>
    </header>  


<section>
  <div class="contReg">
    <h1 class="textEsp">Aerarium</h1>
   
    <h2 class="textNorm">Programacion Pagos</h2>
    <br>
        <form method="POST" style="color: white">
          <label for="nombre">Fecha de Pago</label>
          <input class="form-control" type="date" placeholder="Fecha de Pago" aria-label="default input example" name="fechaPago" id="fechaPago">
          <br>
          <label for="nombre">Fecha de Vencimiento</label><br>
          <input class="form-control" type="date" placeholder="Fecha de Vencimiento" aria-label="default input example" name="fechaVencimiento" id="fechaVencimiento">
          <br>
          <label for="nombre">Evidencia Pago</label><br>
          <a>Por favor subir todos sus documentos en un solo PDF</a>
          <input class="form-control" type="text" placeholder="archivoEvidenciaPago" aria-label="default input example" name="archivoEvidenciaPago" id="archivoEvidenciaPago">
          <br>
          <label for="nombre">Proveedor</label><br>
          <input class="form-control" type="text" placeholder="Proveedor" aria-label="default input example" name="proveedor" id="proveedor">
          <br>
          <label for="nombre">Alerta</label><br>
          <input class="form-control" type="text" placeholder="Alerta" aria-label="default input example" name="alerta" id="alerta">
          <br>
          <label for="nombre">Usuario</label><br>
          <input class="form-control" type="text" placeholder="Usuario" aria-label="default input example" name="usuario" id="usuario">
          <br>
          <label for="nombre">Estado del Pago</label><br>
          <input class="form-control" type="text" placeholder="Estado del Pago" aria-label="default input example" name="estadoPago" id="estadoPago">
          <br>
          <div class="inline-buttons">
            <button type="submit" value="Programar" class="btn btn-primary">Programar Pago</button><br>
            <br>
            <button type="submit" value="Consultar" class="btn btn-info" name="btn_consultar">Consultar Pago</button><br>
            <a class="btn btn-info" href="consultar_eliminarPago.php" role="button">Registro Total</a>
          </div>
        </form>

       
  </div>
</section>
</body>
</html>