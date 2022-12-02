<?php
include('../PHP/conection.php');

session_start();
$dni = $_SESSION['DNI'];
$codigo = $_POST['codigo'];
$salaNombre = $_POST['salaNombre'];
$fecha = $_POST['fecha'];
$fechaSeparada = explode('T', $fecha);
$fecha2 = $fechaSeparada[0];
$hora = $fechaSeparada[1];

$query = ("CALL RESERVAR('$dni','$codigo','$salaNombre','$fecha2','$hora')");
$resultado = mysqli_query($mysqli, $query);
$mysqli->close();
if (!$resultado) {
  echo 'Ya tienes una actividad para esa fecha';
} else {
  echo 'Reservacion hecha';
}
