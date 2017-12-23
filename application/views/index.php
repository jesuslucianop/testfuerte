<?php
include "Libreria/conexion.php";
include "Libreria/header.php";
include "Libreria/footer.php";

$sql =  "create table prueba (nombre varchar(45))";
$resultado = $connmysql->query($sql);



defined('BASEPATH') OR exit('No direct script access allowed');

?>

<button class="btn btn-success">s</button>
