<?php
include("../PHP/conection.php");

$codigo = $_POST['codigo'];

$query = "CALL BUSCARCODIGO('$codigo')";
$result = mysqli_query($mysqli, $query);

if (!$result) {
  die('Error');
} else {

  $json = array();
  while ($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'codigo' => $row['codigo'],
      'nombre' => $row['nombre'],
      'calle' => $row['calle'],
      'ciudad' => $row['ciudad'],
      'telefono' => $row['telefono'],
      'email' => $row['email'],
      'des' => $row['des']
    );
  }
  $mysqli->close();
  $jsonstring = json_encode($json);
  echo $jsonstring;
}
