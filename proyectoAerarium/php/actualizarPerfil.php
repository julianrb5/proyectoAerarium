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
            <h1 class="textEsp"> Aerarium</h1>
        </div>

        <div class="navbar-right">

            <a class="textEsp" href="programacionPagos.php">Compromisos de pagos</a>
            <a class="textEsp" href="">Proveedores</a>
            <a class="textEsp" href="">Mi cuenta</a>
            <a class="btn btn-outline-light" href="../index.html">Cerrar sesion</a>
        </div>
      </nav>
    </div>
    </header>
    <div class="cont">
            <form action="actualizarPerfil.php" target="_self" method="POST" enctype="multipart/form-data">
            <?php
                if (isset($_POST['btnActualizar'])) 
                {
                   include_once "conex.php";
                    session_start();
        
                    $usuario = $_SESSION['documento'];

                    $resul = mysqli_query($conn, "SELECT * FROM $tabla_db1 WHERE documentoUsuario = '$usuario'");
                     if ($resul) {
                        while ($consulta = mysqli_fetch_array($resul)) {?>
                            
                            <h1> <?php echo $consulta['nombresUsuario'];?></h1>
                            <h2>Por favor ingresa los datos que deseas actualizar</h2>
                            <ul class="list-group">
                                <div class="input-group mb-3">
                                    <span class="cel input-group-text"   id="basic-addon2">Nombres</span>
                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Nombres" name="nomUs" aria-describedby="basic-addon2"value="<?php echo $consulta['nombresUsuario'];?>">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="cel input-group-text"   id="basic-addon2">Apellidos</span>
                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Apellidos" name="apelUs" aria-describedby="basic-addon2"value="<?php echo $consulta['apellidosUsuario'];?>">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="cel input-group-text"   id="basic-addon2">tipo de documento</span>
                                    <select type="submit" placeholder="Tipo de documento"  class="form-select" name="tipoDoc" aria-label="Default select example">
                                    <option selected><?php echo $consulta['tipoDocumentoUsuario'];?></option>
                                    <option value="CC">CC</option>
                                    <option value="TI">TI</option>
                                    <option value="NIT">NIT</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="cel input-group-text"   id="basic-addon2">documento</span>
                                    <input type="text" name="docUs" class="form-control" placeholder="Documento" aria-label="Recipient's username" aria-describedby="basic-addon2"value="<?php echo $consulta['documentoUsuario'];?>">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="cel input-group-text"   id="basic-addon2">Teléfono</span>
                                    <input type="text" name="telUs" class="form-control" placeholder="Teléfono" aria-label="Recipient's username" aria-describedby="basic-addon2"value="<?php echo $consulta['telefonoUsuario'];?>">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="cel input-group-text"   id="basic-addon2">Email</span>
                                    <input type="text" name="corUs" class="form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2"value="<?php echo $consulta['correoUsuario'];?>">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="cel input-group-text"   id="basic-addon2">Contraseña</span>
                                    <input type="text" name="conUs" class="form-control" placeholder="Contraseña" aria-label="Recipient's username" aria-describedby="basic-addon2"value="<?php echo $consulta['passwordUsuario'];?>">
                                </div>
                                <div class="input-group mb-3"> <!-- cargo -->
                                    <span class="cel input-group-text"   id="basic-addon2">Cargo</span>
                                    <select   type="submit" class="form-select" name="carUs" aria-label="Default select example" >
                                    <option selected value="1"><?php
                                    if ($consulta['cargos_idCargo']==1) {
                                    echo "Encargado";
                                    } else if ($consulta['cargos_idCargo']==2) {
                                    echo "Auxiliar" ;
                                    }?></option>
                                    <option value="1">Encargado</option>
                                    <option value="2">Auxiliar</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3"> <!-- rol -->
                                    <span class="cel input-group-text"   id="basic-addon2">Rol</span>
                                    <select type="submit" class="form-select" name="TipoUs" aria-label="Default select example">
                                    <option selected value="2"><?php
                                    if ($consulta['rol_idRol']==1) {
                                    echo "Administrador";
                                    } else if ($consulta['rol_idRol']==2) {
                                    echo "Tesorero";
                                    }?></option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Tesorero</option>
                                    </select>
                                </div>
                                
                                
                            </ul>
                            
                        
                        <?php
                        }?>
                        
                        <input class="btn btn-success" name="btnConfirActualizar" type="submit" value="Confirmar actualización">
                        <br>
                        <br>
                        <input class="btn btn-danger" name="btnEliminar" type="submit" value="Eliminar cuenta">
                                

                    <?php }?>
            </form>
            </div> 



<?php

                }/* fin del condicional if */
               

                     //Actualizar
                     if (isset($_POST['btnConfirActualizar'])) {
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
                     
                       
                        $_UPDATE_SQL = "UPDATE $tabla_db1 Set 
                       tipoDocumentoUsuario= '$tipoDoc',
                       documentoUsuario= '$docUs',
                       nombresUsuario= '$nomUs',
                       apellidosUsuario= '$apelUs ',
                       telefonoUsuario= '$telUs', 
                       correoUsuario= '$corUs', 
                       passwordUsuario= '$conUs',
                       rol_idRol= '$tipoUs',
                       cargos_idCargo= '$carUs' WHERE documentoUsuario='$docUs'";
                        
                       
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
                            $tipoUs = $_POST["TipoUs"];
                            $carUs = $_POST["carUs"]; 

                          

                            $_DELETE_SQL =  "DELETE FROM $tabla_db1 WHERE documentoUsuario='$docUs'";
                            
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
 



    </main>
</body>

</html>
