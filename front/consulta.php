<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
require('../../gitlist/gitlist/Conexion/conexion.php');

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM `glpi_tickets` WHERE commit LIKE 'http%' ORDER BY id";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['idtickets']))
{
	$q=$sql->real_escape_string($_POST['idtickets']);
	$query="SELECT * FROM `glpi_tickets` WHERE 
		id LIKE '%".$q."%' AND
		commit LIKE 'http%'";
}

$sentencia=$sql->query($query);
if ($sentencia->num_rows > 0)
{
	$tabla.= 
	'
	<table class="table" border="1">
		<thead>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>FECHA</th>
			<th>FECHA DE CIERRE</th>
			<th>FECHA PARA RESOLVER</th>
			<th>FECHA DE MODIFICACION</th>
			<th>ESTADO</th>
			<th>REPOSITORIO</th>
			<th>COMMIT</th>
		</thead>
	';

	while($salida= $sentencia->fetch_assoc())
	{
		if($salida['status'] == 1){
			$status = "Nuevo";
		} elseif($salida['status'] == 2){
			$status = "En Curso (asignado)";
		} elseif($salida['status'] == 3){
			$status = "En Curso (planificado)";
		} elseif ($salida['status'] == 4){
			$status = "Reasignado Desarrollo";
		} elseif ($salida['status'] == 5){
			$status = "Resuelto";
		} else {
			$status = "fuera de los paremetros";
		}
		
		if($salida['project'] == ""){
			$project = "No Tiene";
		} else {
			$project = "Ir al Repositorio";
		}

		$tabla.=
		'
		<tbody>
			<tr>
				<td>'.$salida['id'].'</td>
				<td>'.$salida['name'].'</td>
				<td>'.$salida['date'].'</td>
				<td>'.$salida['closedate'].'</td>
				<td>'.$salida['solvedate'].'</td>
				<td>'.$salida['date_mod'].'</td>
				<td>'.$status.'</td>
				<td><a href='.$salida['project'].'>'.$project.'</a></td>
				<td><a href='.$salida['commit'].'>Ir al Commit</a></td>
			</tr>
		</tbody>
		';
	}

	$tabla.='
		<tfoot>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>FECHA</th>
			<th>FECHA DE CIERRE</th>
			<th>FECHA PARA RESOLVER</th>
			<th>FECHA DE MODIFICACION</th>
			<th>ESTADO</th>
			<th>REPOSITORIO</th>
			<th>COMMIT</th>
		</tfoot>
	</table>
	';
} else
	{
		$tabla="No se encontraron coincidencias con su búsqueda.";
	}


echo $tabla;
?>