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
    
        <header  class="encabezado">
  
          <nav class="navbar">
            <img class="img1" src="../imagenes/logo1Aerarium.png">

            <div class="navbar-left">
                <h1 class="textEsp"> Aerarium-Administrador</h1>
            </div>

            <div class="navbar-right">
            <a class="textEsp" href="../php/admiCuentas.php">Administracion de cuentas</a>
                
                <a class="textEsp"  href="../html/adminPage.html">Inicio</a>
                <a class="btn btn-outline-light" href="../index.html">Cerrar sesion</a>
            </div>
           </nav>
  
        </header> 


            <form action="actualizarPerfil.php" target="_self" method="POST" enctype="multipart/form-data">
            <?php
            include_once "conex.php";
            session_start();

            $usuario = $_SESSION['documento'];
            /* $contraseña = $_SESSION['contraseña']; */






                $resul = mysqli_query($conn, "SELECT * FROM $tabla_db1 WHERE usDocumento = '$usuario'");
                if ($resul) {
                        while ($consulta = mysqli_fetch_array($resul)) {?>


                <div class="cont">
                    <div class="contenedorMiPerfil">
                    <h2 class="textPerfil">Mi perfil👨</h2>
                    </div>
                <div class="contenedorDeDos"><!-- div de los dos -->
                
                    <div class="cont-left"><!-- Contenedor izquierdo -->
                        <h2 class="textPerfil">Hola </h2>
                        <h2 class="textPerfil"><?php echo $consulta['usNombre'];?></h2>
                        <h2 class="textPerfil">Tus datos son:</h2>

                    </div>
                

                    <div class="cont-right ">
                            <ul class="list-group">
                            <div class="contInternoPerfil row"><!-- inicio de primera fila -->
                                <div class=" contenedorCeldasCuadradas col-6"><!-- inicio de seccion de nombre -->
                                    <span class="negrita">Nombre</span>
                                    <br>
                                    <li type="text" class="form-control celdasCuadradas" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php echo $consulta['usNombre'];?></li>
                                </div><!-- final de seccion de nombre -->

                                <div class="form contenedorCeldasCuadradas col-6"><!-- inicio de seccion de apellidos -->
                                    <span class="negrita">Apellidos</span>
                                    <br>
                                    <li type="text" class="form-control celdasCuadradas" placeholder="Apellido" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php 
                                    echo$consulta['usApellido'];?></li>
                                </div><!-- final de seccion de apellidos -->

                            </div><!-- final de primera fila -->
                            

                            <div class="contInternoPerfil row"><!-- inicio de segunda fila -->
                                <div class="form contenedorCeldasCuadradas col-5"><!-- inicio de seccion tipo de documento -->
                                    <span class="negrita">Tipo de documento</span>
                                    <br>
                                    <li type="text" class="form-control celdasCuadradas" placeholder="Tipo de documento" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php 
                                    echo $consulta['usTipoDocumento'];?></li>
                                </div><!-- final de seccion de tipo de documento -->


                                <div class="form contenedorCeldasCuadradas col-7"><!-- inicio de seccion de documento usuario -->
                                    <span class="negrita">Documento usuario</span>
                                    <br>
                                    <li type="text" class="form-control celdasCuadradas" placeholder="documento" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php 
                                    echo round($consulta ['usDocumento']);?></li>
                                </div><!-- final de seccion de documento usuario -->

                            </div><!-- final de seunda fila -->
                            
                            <div class="contInternoPerfil row"><!-- inicio de tercera fila -->
                                <div class="form contenedorCeldasCuadradas col-6"><!-- inicio de seccion de telefono -->
                                    <span class="negrita">Télefono</span>
                                    <br>
                                    <li type="text" class="form-control celdasCuadradas" placeholder="Telefono" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php 
                                    echo $consulta['usTelefono'];?></li>
                                </div> <!-- final de sección de telefono -->

                                <div class="form contenedorCeldasCuadradas col-6"><!-- inicio de seccion de cargo -->
                                    <span class="negrita">Cargo</span>
                                    <br>
                                    <li type="text" class="form-control celdasCuadradas" placeholder="Telefono" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php
                                        if ($consulta['Cargo_idCargo']==1) {
                                            echo "Encargado";
                                        } else {
                                            echo "Auxiliar";
                                        }
                                        ?></li>
                                </div> <!-- final de sección de cargo -->
                            </div><!-- final de tercera fila -->
                            
                            




                            <div class="form contenedorCeldasCuadradas"><!-- inicio de seccion de email -->
                                <span class="negrita">Email</span>
                                <br>
                                <li type="text" class="form-control celdasCuadradas" placeholder="Telefono" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php 
                                echo $consulta['usCorreo'];?></li>
                            </div> <!-- final de sección de email -->

                            <div class="form contenedorCeldasCuadradas"><!-- inicio de seccion de contraseña -->
                                <span class="negrita">Contraseña</span>
                                <br>
                                <li type="text" class="form-control celdasCuadradas" placeholder="Telefono" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php 
                                echo $consulta['usPassword'];;?></li>
                            </div> <!-- final de sección de contraseña -->

                            

                            <?php
                                }
                            } else {
                            // Hubo un error en la consulta
                            echo "Error en la consulta: " . mysqli_error($conn);
                            }

                            ?>
                            <div class="row"><!-- inicio de fila de boton -->
                                <div class="d-grid gap-2 col-12">
                                <input class="btn  btnRegistro" name="btnActualizar" type="submit" value="Actualizar">
                                </div>
                            </div><!-- final de fila de boton -->




                        <br>
                    </div>

                </div><!-- final del div de los dos divs -->
                 

                </div>
                
                
            

            </form>

              





 




    
</body>

</html>
