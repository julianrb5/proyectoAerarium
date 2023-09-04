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
            <a class="textEsp"  href="../php/PerfilTeso.php">Mi cuenta</a>
            <a class="btn btn-outline-light" href="../index.html">Cerrar sesion</a>
        </div>
      </nav>
    </div>
    </header>
    <div class="contReg margen">



<form action="actualizarPro.php" target="_self" method="POST" enctype="multipart/form-data">
    <h1 class="textNorm centrarBtn">Actualizar proveedor</h1>
    <?php
            include_once "conex.php";
        if (isset($_GET['idPro'])) {
            $idPro = $_GET['idPro'];
            // Resto del código para procesar los datos...?>
            
            
            <?php
        }
        ?>
        <?php
        $resultados = mysqli_query($conn, "SELECT * FROM $tabla_db3 WHERE idProveedor = '$idPro'");
        if ($resultados) {
        while($consulta = mysqli_fetch_array($resultados)) {?>
        
        <div class="input-group mb-3">
           <span class="cel input-group-text"   id="basic-addon2">Tipo de documento</span>
            <select type="submit" placeholder="Tipo de documento"  class="form-select"  name="tipoDocPro" aria-label="Default select example">
            <option selected><?php echo $consulta['tipoDocumentoProveedor']?></option>
            <option value="CC">CC</option>
            <option value="TI">TI</option>
            <option value="NIT">NIT</option>
            </select>
        </div>
        <div class="input-group mb-3"> <!--N° documento -->
            <span class="cel input-group-text"   id="basic-addon2">N° documento</span>
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Apellidos" name="docPro" aria-describedby="basic-addon2"value="<?php echo $consulta['documentoProveedor'];?>">
        </div> 
        <div class="input-group mb-3"> <!--Nombre-->
            <span class="cel input-group-text"   id="basic-addon2">Nombre</span>
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Apellidos" name="nombPro" aria-describedby="basic-addon2"value="<?php echo $consulta['nombresProveedor']; ?>">
        </div> 
        <div class="input-group mb-3"> <!--Apellidos-->
            <span class="cel input-group-text"   id="basic-addon2">Apellidos</span>
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Apellidos" name="apellPro" aria-describedby="basic-addon2"value="<?php  echo " ". $consulta['apellidosProveedor']?>">
        </div> 
        <div class="input-group mb-3"> <!--Teléfono-->
            <span class="cel input-group-text"   id="basic-addon2">Teléfono</span>
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Apellidos" name="telPro" aria-describedby="basic-addon2"value="<?php echo $consulta['telefonoProveedor'];?>">
        </div> 
        <div class="input-group mb-3"> <!--Email-->
            <span class="cel input-group-text"   id="basic-addon2">Email</span>
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Apellidos" name="emailPro" aria-describedby="basic-addon2"value="<?php echo $consulta['correoProveedor']?>">
        </div>
        <div class="input-group mb-3"> <!--Contraaseña-->
            <span class="cel input-group-text"   id="basic-addon2">contraseña</span>
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Apellidos" name="contraseñaPro" aria-describedby="basic-addon2"value="<?php echo $consulta['passwordProveedor']?>">
        </div> 

        <div class="input-group mb-3">
           <span class="cel input-group-text"   id="basic-addon2">Estado</span>
            <select type="submit" placeholder="Tipo de documento"  class="form-select"  name="estadoPro" aria-label="Default select example">
            <option selected><?php echo $consulta['estadoProveedor']?></option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
            </select>
        </div>

        <input class="btn btn-success" name="btnConfirActualizar" type="submit" value="Confirmar actualización">
        
        <input class="btn btn-danger" name="btnEliminar" type="submit" value="Eliminar cuenta">
            



        <?php     
        } 
        }    
        ?>
</form>
</div>
        <?php
        if (isset($_POST['btnConfirActualizar'])) {
                        
            $tipoDocPro = $_POST["tipoDocPro"];
            $docPro = $_POST["docPro"];
            $nombPro= $_POST["nombPro"];
            $apellPro = $_POST["apellPro"];
            $telPro = $_POST["telPro"];
            $emailPro= $_POST["emailPro"];
            $contraseñaPro = $_POST["contraseñaPro"];
            $estadoPro = $_POST["estadoPro"];
                     
                       
                        $_UPDATE_SQL = "UPDATE $tabla_db3 Set 
                       tipoDocumentoProveedor= '$tipoDocPro',
                       documentoProveedor= '$docPro',
                       nombresProveedor= '$nombPro',
                       apellidosProveedor= '$apellPro',
                       telefonoProveedor= '$telPro', 
                       correoProveedor= '$emailPro', 
                       passwordProveedor= '$contraseñaPro',
                       estadoProveedor= '$estadoPro' WHERE documentoProveedor='$docPro'";
                        
                       
                       if (mysqli_query($conn, $_UPDATE_SQL)){
                        
                        echo '<script>alert("La actualizacion fue realizada con exito");</script>';
                        echo '<script>setTimeout(function() { window.location.href = "proveedores.php"; }, 00);</script>';
                       exit;
     
                        
                        } else {
                            echo" Error en la actulización ";
                        }

                        
                       /*  header("Location:Perfil.php"); */
                       
                        } 
                            /* ELIMINAR */
                        if (isset($_POST['btnEliminar'])) {
                            
                            $tipoDocPro = $_POST["tipoDocPro"];
                            $docPro = $_POST["docPro"];
                            $nombPro= $_POST["nombPro"];
                            $apellPro = $_POST["apellPro"];
                            $telPro = $_POST["telPro"];
                            $emailPro= $_POST["emailPro"];
                            $contraseñaPro = $_POST["contraseñaPro"];
                            $estadoPro = $_POST["estadoPro"];

                          

                            $_DELETE_SQL =  "DELETE FROM $tabla_db3 WHERE documentoProveedor='$docPro'";
                            
                            if (mysqli_query($conn, $_DELETE_SQL)){
                        
                                echo '<script>alert("Tu cuenta a sido borrada con exito");</script>';
                                echo '<script>setTimeout(function() { window.location.href = "proveedores.php"; }, 00);</script>';
                               exit;
             
                                
                                } else {
                                    echo" Error en la actulización ";
                                }
        
                            }
                        
        ?>

            
</body>

</html>
