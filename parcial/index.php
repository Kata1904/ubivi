<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
   
   $codigo = mysqli_real_escape_string($conn, $_POST['codigo']);
   $clave = md5($_POST['password']);
  
   $select = " SELECT * FROM usuarios WHERE codigo = '$codigo' && clave = '$clave' ";

   $result = mysqli_query($conn, $select);

$result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      header('location:formulario.php');

      }else{
      $error[] = 'Contraseña o usuario incorrecto';
   }

}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Iniciar sesion</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Iniciar sesion</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="codigo" required placeholder="Ingrese cedula">
      <input type="password" name="password" required placeholder="Ingrese contraseña">
      <input type="submit" name="submit" value="Iniciar sesion" class="form-btn">
      <p>No tiene usuario <a href="registro.php">Crear Cuenta</a></p>
   </form>

</div>

</body>
</html>