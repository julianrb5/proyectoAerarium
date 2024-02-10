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
    <main>
        <header>
    <div>
    <nav class="navbar">
        <img class="img1" src="../imagenes/logo1Aerarium.png">

        <div class="navbar-left">
            <h1 class="textEsp"> Aerarium - Tesorero</h1>
        </div>

        <div class="navbar-right">

            <a class="textEsp" href="programacionPagos.php">Compromisos de pagos</a>
            <a class="textEsp" href="proveedores.php">Proveedores</a>
            <a class="textEsp" href="#">Mi cuenta</a>
            <a class="btn btn-outline-light" href="../index.html">Cerrar sesion</a>
        </div>
      </nav>
    </div>
    </header>


            <form action="actualizarPerfilTeso.php" target="_self" method="POST" enctype="multipart/form-data">
            <?php
            include_once "conex.php";
            session_start();

            $usuario = $_SESSION['documento'];
            /* $contraseña = $_SESSION['contraseña']; */






                $resul = mysqli_query($conn, "SELECT * FROM $tabla_db1 WHERE usDocumento = '$usuario'");
                if ($resul) {
                        while ($consulta = mysqli_fetch_array($resul)) {?>
                <div class="cont">
                <h1>Hola <?php echo $consulta['usNombre'];?></h1>
                <h2>Tus datos son</h2>
                <br>
                <ul class="list-group">
                    <div class="input-group mb-3">
                        <span class="cel input-group-text"   id="basic-addon2">Nombre</span>
                        <li type="text" class="form-control" placeholder="Nombre y Apellido" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php echo $consulta['usNombre'];echo" ".$consulta['usApellido'];?></li>
                    </div>
                    <div class="input-group mb-3"> <!-- tipo de documento -->
                        <span class="cel input-group-text"   id="basic-addon2">Tipo de documento</span>
                        <li type="text" class="form-control" placeholder="Tipo de documento" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php echo $consulta['usTipoDocumento'];?></li>
                    </div>
                    <div class="input-group mb-3"> <!-- documento -->
                        <span class="cel input-group-text"   id="basic-addon2">Documento usuario</span>
                        <li type="text" class="form-control" placeholder="N° de documento" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php echo $consulta['usDocumento'];?></li>
                    </div> 
                    <div class="input-group mb-3"> <!-- telefono -->
                        <span class="cel input-group-text"   id="basic-addon2">Telefono</span>
                        <li type="text" class="form-control" placeholder="Telefono" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php echo $consulta['usTelefono'];?></li>
                    </div>
                    <div class="input-group mb-3"> <!-- email -->
                        <span class="cel input-group-text"   id="basic-addon2">Email</span>
                        <li type="text" class="form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php echo $consulta['usCorreo'];?></li>
                    </div>
                    <div class="input-group mb-3"> <!-- contraseña -->
                        <span class="cel input-group-text"   id="basic-addon2">Contraseña</span>
                        <li type="password" class="form-control" placeholder="Contraseña" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php echo $consulta['usPassword'];?></li>
                    </div>
                    <div class="input-group mb-3"> <!-- estado -->
                        <span class="cel input-group-text"   id="basic-addon2">Estado</span>
                        <li type="text" class="form-control" placeholder="Estado de usuario" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php echo $consulta['usEstado'];?></li>
                    </div>
                    <div class="input-group mb-3"> <!-- cargo -->
                        <span class="cel input-group-text"   id="basic-addon2">Cargo</span>
                        <li type="text" class="form-control" placeholder="Cargo" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php
                            if ($consulta['Cargo_idCargo']==1) {
                                echo "Encargado";
                            } else {
                                echo "Auxiliar";
                            }
                            ?></li>
                    </div>

                <?php
                        }
                } else {
                    // Hubo un error en la consulta
                    echo "Error en la consulta: " . mysqli_error($conn);
                }

            ?>
                <input class="btn btn-success" name="btnActualizar" type="submit" value="Actualizar">
                
                <br>
                <?php
            
                
                ?>
            

            </form>

              





 



    </main>

    
</body>

</html>
