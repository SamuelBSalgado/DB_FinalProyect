<?php
include('../PHP/conection.php');

$search = $_POST['search'];

if (!empty($search)) {
  $query = "CALL BUSCAR('$search')";
  $result = mysqli_query($mysqli, $query);

  if (!$result) {
    die('Query Error' . mysqli_error($connection));
  }

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
