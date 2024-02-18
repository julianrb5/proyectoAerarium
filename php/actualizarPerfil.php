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
                    <a class="textEsp" href="#">Mi cuenta</a>
                    <a class="textEsp"  href="../html/adminPage.html">Inicio</a>
                    <a class="btn btn-outline-light" href="../index.html">Cerrar sesion</a>
                </div>
            </nav>

        </header> 



        <div class="cont">
          
             <form action="actualizarPerfil.php" target="_self" method="POST" enctype="multipart/form-data">
                <?php
                if (isset($_POST['btnActualizar'])) 
                {
                   include_once "conex.php";
                    session_start();
        
                    $usuario = $_SESSION['documento'];

                    $resul = mysqli_query($conn, "SELECT * FROM $tabla_db1 WHERE usDocumento = '$usuario'");
                     if ($resul) {
                        while ($consulta = mysqli_fetch_array($resul)) {?>
                    <div class="contenedorMiPerfil">
                    <h2 class="textPerfil">¡Gracias por mantener tu perfil al día!</h2>
                    </div>

         <div class="contenedorDeDos"><!-- div de los dos -->                     
                            

                    <div class="cont-left"><!-- Contenedor izquierdo -->
                        <h2 class="textPerfil">Hola </h2>
                       
                        <h2 style="font-size: 25px" >Te recordamos solo podrás actualizar la contraseña, el correo electrónico y el número de celular en tu perfil.</h2>
                    </div>
                
            
                    <div class="cont-right ">
                        <ul class="list-group">

                            <div class="contInternoPerfil row"><!-- inicio de primera fila -->
                                <div class=" contenedorCeldasCuadradas col-6"><!-- inicio de seccion de nombre -->
                                    <span class="negrita">Nombre</span>
                                    <br>
                                    <li type="text" class="form-control celdasCuadradas" placeholder="Nombre" aria-label="Recipient's username" name="nomUs" aria-describedby="basic-addon2"><?php echo $consulta['usNombre'];?></li>
                                </div><!-- final de seccion de nombre -->
                                <div class="form contenedorCeldasCuadradas col-6"><!-- inicio de seccion de apellidos -->
                                    <span class="negrita">Apellidos</span>
                                    <br>
                                    <li type="text" class="form-control celdasCuadradas"placeholder="Apellido" aria-label="Recipient's username" name="apelUs" aria-describedby="basic-addon2"><?php 
                                    echo$consulta['usApellido'];?></li>
                                </div><!-- final de seccion de apellidos -->
                            </div><!-- final de primera fila -->

                                
                            <div class="contInternoPerfil row"><!-- inicio de segunda fila -->
                                <div class="form contenedorCeldasCuadradas col-5"><!-- inicio de seccion tipo de documento -->
                                    <span class="negrita">Tipo de documento</span>
                                    <br>
                                    <li type="text" class="form-control celdasCuadradas" placeholder="Tipo de documento" aria-label="Recipient's username" name="tipoDoc" aria-describedby="basic-addon2"><?php 
                                    echo $consulta['usTipoDocumento'];?></li>
                                </div><!-- final de seccion de tipo de documento -->


                                <div class="form contenedorCeldasCuadradas col-7"><!-- inicio de seccion de documento usuario -->
                                    <span class="negrita">Documento usuario</span>
                                    <br>
                                    <li type="text" class="form-control celdasCuadradas" placeholder="documento" name="docUs" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php 
                                    echo round($consulta ['usDocumento']);?></li>
                                </div><!-- final de seccion de documento usuario -->

                            </div><!-- final de segunda fila -->

                            <div class="contInternoPerfil row"><!-- inicio de tercera fila -->
                                <div class="form contenedorCeldasCuadradas col-6"><!-- inicio de seccion de telefono -->
                                    <span class="negrita">Teléfono</span>
                                    <input class="form-control celdasCuadradas" type="text" name="telUs" class="form-control" placeholder="Teléfono" aria-label="Recipient's username" aria-describedby="basic-addon2"value="<?php echo $consulta['usTelefono'];?>">
                                </div>
                                <div class="form contenedorCeldasCuadradas col-6"><!-- inicio de seccion de cargo -->
                                    <span class="negrita">Cargo</span>
                                    <br>
                                    <li type="text" class="form-control celdasCuadradas" name="carUs" placeholder="Cargo" aria-label="Recipient's username" aria-describedby="basic-addon2"><?php
                                        if ($consulta['Cargo_idCargo']==1) {
                                            echo "Encargado";
                                        } else {
                                            echo "Auxiliar";
                                        }
                                        ?></li>
                                </div> <!-- final de sección de cargo -->
                            </div><!-- final de tercera fila -->



                            <div class="contInternoPerfil row"><!-- inicio de cuarta fila -->
                                <div class="form contenedorCeldasCuadradas col-12"><!-- inicio de seccion de email -->
                                    <span class="negrita">Email</span>
                                    <input type="text" class="form-control celdasCuadradas" name="corUs" class="form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2"value="<?php echo $consulta['usCorreo'];?>">
                                </div><!-- inal de seccion de email -->
                            </div><!-- final de cuarta fila -->


                            <div class="contInternoPerfil row"><!-- inicio de quinta fila -->           
                                <div class="form contenedorCeldasCuadradas col-12"><!-- inicio de quinta fila -->
                                    <span class="negrita">Contraseña</span>
                                    <input type="password" class="form-control celdasCuadradas" name="conUs" class="form-control" placeholder="Contraseña" aria-label="Recipient's username" aria-describedby="basic-addon2"value="<?php echo $consulta['usPassword'];?>">
                                </div><!-- final de seccion contraseña -->
                            </div><!-- Final de quinta fila -->
                                        
                                        
                                
                                    
                                
                                <?php
                                }?>
                                
                                <!-- <input class="btn btn-success" name="btnConfirActualizar" type="submit" value="Confirmar actualización">
                                <br>
                                <br>
                                <input class="btn btn-danger" name="btnEliminar" type="submit" value="Eliminar cuenta"> -->

                               <div style="margin-right: 0px;" class="row"><!--inicio de fila de botones--> 
                                <div class="d-grid gap-2 col-6">
                                    <input  class="btn btnConfirAct" name="btnConfirActualizar" type="submit" value="Confirmar actualización">
                                </div>

                                <div style="margin-left: 0px;" class="d-grid gap-2 col-6">
                                    <input class="btn  btnEliminar" name="btnEliminar"type="submit" value="Eliminar cuenta">
                                </div>
                               </div><!--final de fila de boton --> 

                                <?php }?>
                                
           
                            </div> 
                            </div><!-- final de contenedor de los divs -->
                            </li>
             </form>
          
        </div><!-- final de contenedor master   -->                   



<?php

                }/* fin del condicional if */
               

                     //Actualizar
                     if (isset($_POST['btnConfirActualizar'])) {
                        include_once "conex.php";
                        
                $tipoDoc = $_POST["tipoDoc"];
                $docUs = $_POST["docUs"]; 
                $telUs = $_POST["telUs"];
                $corUs= $_POST["corUs"];
                $conUs = $_POST["conUs"];
                
                     
                       
                        $_UPDATE_SQL = "UPDATE $tabla_db1 Set 
                       usTelefono= '$telUs', 
                       usCorreo= '$corUs', 
                       usPassword= '$conUs',
                        WHERE usDocumento='$docUs'";
                        
                       
                       if (mysqli_query($conn, $_UPDATE_SQL)){
                        
                        echo '<script>alert("La actualizacion fue realizada con exito");</script>';
                        echo '<script>setTimeout(function() { window.location.href = "Perfil.php"; }, 00);</script>';
                       exit;
     
                        
                        } else {
                            echo" Error en la actulización ";
                        }

                        
                       /*  header("Location:Perfil.php"); */
                       
                        } 
                        /* ELIMINAR */
                        if (isset($_POST['btnEliminar'])) {
                            include_once "conex.php";
                            $tipoDoc = $_POST["tipoDoc"];
                            $docUs = $_POST["docUs"];
                            $nomUs = $_POST["nomUs"];
                            $apelUs = $_POST["apelUs"];
                            $telUs = $_POST["telUs"];
                            $corUs= $_POST["corUs"];
                            $conUs = $_POST["conUs"];
                            

                          

                            $_DELETE_SQL =  "DELETE FROM $tabla_db1 WHERE usDocumento='$docUs'";
                            
                            if (mysqli_query($conn, $_DELETE_SQL)){
                        
                                echo '<script>alert("Tu cuenta a sido borrada con exito");</script>';
                                echo '<script>setTimeout(function() { window.location.href = "../index.html"; }, 00);</script>';
                               exit;
             
                                
                                } else {
                                    echo" Error en la actulización ";
                                }
        
                            }
                    
                           /*  header("Location:Perfil.php"); */
                           
                             

?>
 



   
</body>

</html>
