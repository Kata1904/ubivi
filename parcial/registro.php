<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $codigo = mysqli_real_escape_string($conn, $_POST['codigo']);
   $nombres = mysqli_real_escape_string ($conn, $_POST['nombres']);
   $clave = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);


   $select = " SELECT * FROM usuarios WHERE codigo = '$codigo' && clave = '$clave' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($clave != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO usuarios(codigo, nombres, clave) VALUES('$codigo','$nombres','$clave')";
         mysqli_query($conn, $insert);
         header('location:index.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registro</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Crear usuario</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="codigo" required placeholder="Digite su cedula">
      <input type="text" name="nombres" required placeholder="Digite nombre y apellido">
      <input type="password" name="password" required placeholder="Digite contraseña">
      <input type="password" name="cpassword" required placeholder="Confirme su contraseña">
      <input type="submit" name="submit" value="Crear usuario" class="form-btn">
      <p> Ya tiene usuario <a href="index.php">Iniciar sesion</a></p>
   </form>

</div>

</body>
</html>