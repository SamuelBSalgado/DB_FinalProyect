<?php
include('../PHP/conection.php');

session_start();
$id = $_SESSION['DNI'];
$query = "CALL searchSaves('$id')";
$result = mysqli_query($mysqli, $query);

if (!$result) {
  die('Error' . mysqli_error($mysqli));
} else {
  $json = array();
  while ($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'codigo' => $row['codcentro'],
      'nombresala' => $row['nombre'],
      'des' => $row['exp'],
      'fecha' => $row['fecha'],
      'hora' => $row['hcom']
    );
  }
}
$mysqli->close();
$jsonstring = json_encode($json);
echo $jsonstring;
