<?php
include('../PHP/conection.php');
if (isset($_POST['id'])) {
  $codigo = $_POST['id'];
  $query = "CALL SALAS('$codigo')";
  $resultado = mysqli_query($mysqli, $query);
  if (!$resultado) {
    die('error al buscar salas');
  } else {
    $json = array();
    while ($row = mysqli_fetch_array($resultado)) {
      $json[] = array(
        'codigo' => $row['codigocentro'],
        'salaNombre' => $row['nombre'],
        'salaDes' => $row['exp']
      );
    }
    $mysqli->close();
    $jsonstring = json_encode($json);
    echo $jsonstring;
  }
}
