<style>
	h3{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	


</style>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
</head>
<body>
<h3>Formulario</h3>

<form action="" method="post">
  <table width="15%" align="center">
    <tr>
      <td>ID</td>
      <td>
      <?php 

       ?>
      </td>
    </tr>
    <tr>
      <td>Encuesta</td>
      <td>
      <select name="encuesta">
         <option value="MPMN">Gestion municipal-MPMN</option>
         <option value="MPNN">Gestion nacional-MPNN</option>
         <option value="MPRR">Gestion rural-MPRR</option>
       </select>
    </tr>
    <tr>
      <td>Pregunta</td>
      <td>
      <input type="text" name="pregunta" id="pregunta"></td>
    </tr>
    <tr>
      <td>Opciones</td>
      <td>
      <select name="encuesta">
         <option value="Bn">Buena</option>
         <option value="RG">Regular</option>
         <option value="ML">Mala</option>
         <option value="PS">Pesima</option>
       </select>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>

	
</body>
</html>