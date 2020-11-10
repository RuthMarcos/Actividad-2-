<?php 
 $usuario ="root";
 $password ="";
 $host="localhost";
 $db="gastronomia";
 $conexion=mysqli_connect($host,$usuario,$password,$db) or die("No se a podido conectar");
 //inicio de variables con los valores de un formulario
 $idprod= $_POST["CTidprod"];
 $descripcion= $_POST["CTdescripcion"];
 $precio= $_POST["CTprecio"];
 $unidades= $_POST["CTunidades"];
 
 //insertar el registro
$resIns=$conexion->query("INSERT INTO producto VALUES ($idprod,'$descripcion',$precio,'$unidades')");

$resultado = $conexion->query("select * from producto");
echo "<link rel='stylesheet' href='estilos.css'>";
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Dirección </th>";
echo "<th>Telefono </th>";
echo "<th>Correo Electronico </th>";

echo "</tr>";
echo "<thead>";
echo "<tbody>";
while ($columna=mysqli_fetch_array($resultado)){ 
	echo "<tr>"; 
	echo "<tr>"; 
	echo "<td>". $columna ["idprod"]. "</td>"; 
	echo "<td>". $columna ["descripcion"]. "</td>"; 
	echo "<td>". $columna ["precio"]. "</td>"; 
	echo "<td>". $columna ["unidades"]. "</td>"; 
	
	echo "</tr>";
 } 
 echo "</tbody>";
 echo "</table>"; 
 echo "<p>Total de registros:" . $resultado ->num_rows ;


 ?>