<?php
$mysqli = new mysqli("localhost", "invitado", "123");
$mysqli->select_db("ocio") or die('Error en la conexion');
if ($mysqli) {

  session_start();
  $EMAIL = $_SESSION["EMAIL"];

  $name_stmt = $mysqli->prepare("CALL NOMBRE(?)");
  $name_stmt->bind_param('s', $EMAIL);
  $name_stmt->execute();
  $resultado2 = $name_stmt->get_result();
  $name_stmt->close();
  $mysqli->close();

  //$stmt->bind_result($dato1, $dato2, $dato3);
  //$stmt->close();
  //$mysqli->close();
  $numerofilas = $resultado2->num_rows;

  if ($numerofilas > 0) {

    while ($row = $resultado2->fetch_assoc()) {
      $DNI = $row['DNI'];
      $NOMBRE = $row["nombre"];
      $APATERNO = $row["apellido1"];
    }

    $_SESSION["DNI"] = $DNI;
    $_SESSION["NOMBRE"] = $NOMBRE;
    $_SESSION["APATERNO"] = $APATERNO;
    header("Location: /ProyectoBD/Views/inicio.php");

    die();
  } else {

    $error = $EMAIL;
    header("Location: /ProyectoBD/index.php?error=$error");

    die();
  }
}
