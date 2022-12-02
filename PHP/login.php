<?php
$mysqli = new mysqli("localhost", "invitado", "123");
$mysqli->select_db("ocio") or die('Error en la conexion');
if ($mysqli) {
  $nombre = $_POST["nombre"];
  $password = $_POST["password"];

  $stmt = $mysqli->prepare("CALL VALIDAR(?, ?)");
  $stmt->bind_param('ss', $nombre, $password);
  $stmt->execute();
  //$stmt->bind_result($dato1, $dato2, $dato3);
  $resultado = $stmt->get_result();
  $stmt->close();
  $mysqli->close();
  $numerofilas = $resultado->num_rows;


  if ($numerofilas > 0) {

    while ($row = $resultado->fetch_assoc()) {
      $DNI = $row["DNI"];
      $EMAIL = $row["EMAIL"];
      $TIPO = $row["TIPO"];
    }
    session_start();
    $_SESSION["DNI"] = $DNI;
    $_SESSION["EMAIL"] = $EMAIL;
    $_SESSION["TIPO"] = $TIPO;
    header("Location: /ProyectoBD/PHP/nombre.php");

    die();
  } else {

    $error = 'Contraseña incorrecta';
    header("Location: /ProyectoBD/index.php?error=$error");

    die();
  }
}
