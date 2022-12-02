<?php
include('../PHP/conection.php');
session_start();
$dni = $_SESSION['DNI'];
$sala = $_POST['nombre'];
$query = "CALL CANCELAR('$sala','$dni')";
$resultado = mysqli_query($mysqli, $query);
$mysqli->close();
if (!$resultado) {
  die('error al eliminar reserva');
} else {
  echo 'Reservacion cancelada';
}
