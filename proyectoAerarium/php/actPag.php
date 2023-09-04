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

  <div class="navbar"><!-- Esta es la barra de navegación, la gris de la parte superior --> 
     
    <!-- <img class="img1" src="LogoAerarium.png"> -->
    <h1 class="textEsp">Aerarium</h1>
  </div>

<section>
  <div class="contReg">
    <h1 class="textEsp">Aerarium</h1>
   
    <h2 class="textNorm">Registro de usuario</h2>
    <br>
        <form action="../php/insertPag.php" target="_self" method="POST">

          <input class="form-control" type="text" placeholder="Nit de la empresa" name="nit" aria-label="default input example">
          <br>
          <input class="form-control" type="text" placeholder="Nombre de la empresa" name="nombEm" aria-label="default input example">
          <br>
          <input class="form-control" type="text" placeholder="Email de la empresa" name="email" aria-label="default input example">
          <br>
          <input class="form-control" type="text" placeholder="Persona de contacto" name="perCon" aria-label="default input example">
          <br>
          <input class="form-control" type="text" placeholder="Número de contacto" name="numCon" aria-label="default input example">
          <br>
          <input class="form-control" type="text" placeholder="Dirección" name="dir" aria-label="default input example">
          <br>
          <input class="form-control" type="text" placeholder="Ciudad" name="city" aria-label="default input example">
          <br>
          <a>Por favor subir todos sus documentos en un solo PDF</a>
          <div class="input-group">
            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            
          </div>
          

          <br>
          
          <input class="btn btn-primary" name="btnReg" type="submit" value="Registrar">

          <input class="btn btn-dark" name="btnCon" type="submit" value="Consultar">

          <input class="btn btn-success" name="btnAct" type="submit" value="Actualizar">

          <input class="btn btn-danger" name="btnEli" type="submit" value="Eliminar">
          



        </form>
  </div>


</section>

<?php

include_once "conex.php";

$nit = $_POST["nit"];
$nom = $_POST["nombEm"];
$email = $_POST["email"];
$perCon = $_POST["perCon"];
$numCon= $_POST["numCon"];
$dir = $_POST["dir"];
$city = $_POST["city"];   
$rutDoc="";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      if (isset($_FILES["doc"]) && $_FILES["doc"]["error"] === 0) {

    $doc = $_FILES["doc"];


    // Obtener el nombre del archivo
    $nomDoc =  basename ($_FILES["doc"]["name"]);

    // Obtén la ubicación temporal del archivo
    $ubiTmp = $doc["tmp_name"];

        $Destino = "C:/xampp/htdocs/paginaAerarium/pdf/";
        $rutDoc = $Destino . $nomDoc;
        move_uploaded_file($ubiTmp, $rutDoc);
      }

    }
//REGISTRAR
if (isset($_POST['btnReg'])) 
{
 /*   echo"Presiono el boton de registrar";
   $sql ="INSERT INTO $tabla_db1 ( Nit, NombreEmpresa, Email, PersonaContacto, NúmeroContacto, Dirección, Ciudad, Docs) VALUES ('$nit','$nom','$email','$perCon','$numCon', '$dir', '$city', '$ruta')"; //cambia según tarea  */
   echo "Presionó el botón de registrar";
   $sql = "INSERT INTO $tabla_db1 (Nit, NombreEmpresa, Email, PersonaContacto, NúmeroContacto, Dirección, Ciudad, Docs) VALUES ('$nit', '$nom', '$email', '$perCon', '$numCon', '$dir', '$city', '$rutDoc')";
   
if (mysqli_query($conn, $sql)) {
    echo " REGISTRO creada";
} else {
    echo" Error en la base de datos, no se creo..! ";
}
} 

//CONSULTAR
if (isset($_POST['btnCon'])) 
{
  
   $resultados = mysqli_query($conn, "SELECT * FROM $tabla_db1 WHERE nit = '$nit'");
   if ($resultados) {
    while($consulta = mysqli_fetch_array($resultados)) {
        echo $consulta['Nit']."<br>";
        echo $consulta['NombreEmpresa']."<br>";
        
    }
    
    } else {
        // Hubo un error en la consulta
        echo "Error en la consulta: " . mysqli_error($conn);
    }

} 

//ACTUALIZAR
if (isset($_POST['btnAct'])) 
    {
      if ($nit=="" || $nom=="" ) {
        echo "los campos son obligatorios";
        echo "los campos son obligatorios";
      } else {
      $_UPDATE_SQL = "UPDATE $tabla_db1 Set nit= '$nit',
       NombreEmpresa= '$nom',
       email= '$email',
       PersonaContacto= '$perCon ',
       NúmeroContacto= '$numCon', 
       Dirección= '$dir', 
       ciudad= '$city',
       Docs= '$docs' WHERE nit='$nit'";

      mysqli_query($conn, $_UPDATE_SQL); 
      }
    
      
      
    } 


    //ELIMINAR
    if (isset($_POST['btnEli'])) 
    {
        $resultados = mysqli_query($conn, "SELECT * FROM $tabla_db1 WHERE nit = '$nit'");
        if ($resultados) {
          while ($consulta = mysqli_fetch_array($resultados)) {
            echo $consulta['NombreEmpresa'] . "<br>";
          }
        } else {
          // Hubo un error en la consulta
          echo "Error en la consulta: " . mysqli_error($conn);
  }
  }
      echo"Presiono el boton de eliminar";
      $_DELETE_SQL =  "DELETE FROM $tabla_db1 WHERE nit = '$nit'";
      mysqli_query($conexion,$_DELETE_SQL); 
    





?>

 
</body>
</html>
