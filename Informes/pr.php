<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #f2f2f2;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		.title {
			text-align: center;
			margin-bottom: 20px;
		}

		.title h1 {
			font-size: 24px;
			color: #333;
		}

		.comp, .date {
			margin-bottom: 10px;
		}

		.comp h1, .date h1 {
			display: inline;
			margin-right: 10px;
			color: #333;
		}

		.comp select, .date input[type="date"], .date input[type="time"] {
			font-size: 16px;
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 3px;
		}

		.comp select {
			width: 200px;
		}

		.date input[type="date"], .date input[type="time"] {
			width: 150px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="title">
			<h1>actividades</h1>
		</div>
		<div class="comp">
			<h1>Compañia</h1>
			<select name="compania" id="compania">
				<option value="ACEROS JM">ACEROS JM</option>
				<option value="BIKAR">BIKAR</option>
				<option value="EAVERTECH">EAVERTECH</option>
				<option value="FIBRIT">FIBIRT</option>
				<option value="KENKO">KENKO</option>
				<option value="MARQUEZ ABOGADOS">MARQUEZ ABOGADOS</option>
			</select>
		</div>
		<div class="date">
			<h1>fecha</h1>
			<input type="date" name="fecha" min="2023-01-01">
			<h1>H.Entrada</h1>
			<input type="time" name="h_entrada">
			<h1>H.salida</h1>
			<input type="time" name="h_salida">
		</div>
	</div>
</body>
</html>