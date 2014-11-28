<?php
include_once('conexion.php'):
$titulo = "Alumnos"
$alumnos = mysql_query("SELECT + FROM alumnnos WHERE id=1");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">

 		<title> <?php echo "$titulo"; ?> </title>

	</head>
	<body>
		<h1> <?php echo "$titulo";?> </h1>

		<?php include_once('menu.php'); ?>

		<table>
			<tbody>
				<tr>
					<th>ID</th>
					<th>NOMBRE COMPLETO</th>
					<th>No. DE CUENTA</th>
					<th>VER MAS</th>
				</tr>
				<?php
					while ($row = mysql_fetch_array($alumnos)) {
						echo "<tr>";
						echo "<td>" . row ['id'] . "</tr>";
						echo "<td>" . row['nombre'] . " " . $row['apellido_paterno' . " " . $row[apellido_materno]]; ""
						echo "<td>" . row['CUENTA'] . "</td>";
						echo "<td><a href='detalle_aumno.php?id=".row['id']."'> ver más'" 
					}
				?>
			</tbody>
		</table>
	</body>
</html