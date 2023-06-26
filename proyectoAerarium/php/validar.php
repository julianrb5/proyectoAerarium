<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity=
    "sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">
    <title>Aerarium</title>
</head>
<body>
 
  <div class="cont">
    <h1 class="textEsp">Aerarium</h1>
    <br>
    <h2 class="textNorm">Inicio de sesión</h2>

    <h3>Archivo php</h3>





    <?php
include_once "conex.php";
session_start(); // Iniciar sesión
$usuario = $_POST['nombUs'];
$contraseña = $_POST['contUs'];
$_SESSION['documento']= $usuario;
$_SESSION['cons']= $contraseña;

if (isset($_POST['btnReg'])) {
   

    $resultados = mysqli_query($conn, "SELECT * FROM $tabla_db1 WHERE documentoUsuario = '$usuario' and passwordUsuario = '$contraseña'");
    if ($resultados) {
        while ($consulta = mysqli_fetch_array($resultados)) {
            if ($consulta['rol_idRol'] == 1) { // Administrador
                $_SESSION['documentoUsuario'] = $usuario;
                $_SESSION['passwordUsuario'] = $contraseña;
                header("Location: ../html/adminPage.html");
                exit();
            } elseif ($consulta['rol_idRol'] == 2) { // Tesorero
                $_SESSION['documentoUsuario'] = $usuario;
                $_SESSION['passwordUsuario'] = $contraseña;
                header("Location: tesoPage.php");
                exit();
            } elseif ($consulta['rol_idRol'] == 3) { // Proveedor
                $_SESSION['documentoUsuario'] = $usuario;
                $_SESSION['passwordUsuario'] = $contraseña;
                header("Location: ../html/proPage.html");
                exit();
            } else {
                echo "Error en la autenticación";
            }
        }
    } else {
        // Hubo un error en la consulta
        echo "Error en la consulta: " . mysqli_error($conn);
    }
}
?>


 

  </div>
</body>
</html>