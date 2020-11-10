<?php 
 $usuario ="root";
 $password ="";
 $host="localhost";
 $db="gastronomia";
 $conexion=mysqli_connect($host,$usuario,$password,$db) or die("No se a podido conectar");
 //inicio de variables con los valores de un formulario
 $nombre= $_POST["CTnombre"];
 $direccion= $_POST["CTdireccion"];
 $telefono= $_POST["CTtelefono"];
 $correo= $_POST["CTcorreo"];
 $comentario= $_POST["CTcomentario"];
 //insertar el registro
$resIns=$conexion->query("INSERT INTO contacto VALUES ('$nombre','$direccion',$telefono,'$correo','$comentario')");

$resultado = $conexion->query("select * from contacto");
echo "<link rel='stylesheet' href='estilos.css'>";
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Dirección </th>";
echo "<th>Telefono </th>";
echo "<th>Correo Electronico </th>";
echo "<th>Comentarios</th>";
echo "</tr>";
echo "<thead>";
echo "<tbody>";
while ($columna=mysqli_fetch_array($resultado)){ 
	echo "<tr>"; 
	echo "<tr>"; 
	echo "<td>". $columna ["nombre"]. "</td>"; 
	echo "<td>". $columna ["direccion"]. "</td>"; 
	echo "<td>". $columna ["telefono"]. "</td>"; 
	echo "<td>". $columna ["correo"]. "</td>"; 
	echo "<td>". $columna ["comentario"]. "</td>"; 
	echo "</tr>";
 } 
 echo "</tbody>";
 echo "</table>"; 
 echo "<p>Total de registros:" . $resultado ->num_rows ;


 ?>