<?php
include('../PHP/conection.php');

$q = $_POST['q'];

if ($q == '1') {
  $query = "SELECT count(DNI) as res FROM reserva;";
  $results = mysqli_query($mysqli, $query);

  if (!$results) {
    die('Error consultas');
  } else {
    $json = array();
    while ($row = mysqli_fetch_array($results)) {
      $json[] = array(
        'res' => $row['res']
      );
      $res = $row['res'];
    }
    $mysqli->close();
    $jsonstring = json_encode($json);
    echo $jsonstring;
  }
} else {
  if ($q == '2') {
    $query = 'SELECT email as res from usuarios where tipo="Admin"';
    $results = mysqli_query($mysqli, $query);

    if (!$results) {
      die('Error consultas');
    } else {
      $json = array();
      while ($row = mysqli_fetch_array($results)) {
        $json[] = array(
          'res' => $row['res']
        );
      }
      $mysqli->close();
      $jsonstring = json_encode($json);
      echo $jsonstring;
    }
  } else {
    if ($q == '3') {
      $query = 'SELECT nombre as res from sala where m2>"30"';
      $results = mysqli_query($mysqli, $query);

      if (!$results) {
        die('Error consultas');
      } else {
        $json = array();
        while ($row = mysqli_fetch_array($results)) {
          $json[] = array(
            'res' => $row['res']
          );
        }
        $mysqli->close();
        $jsonstring = json_encode($json);
        echo $jsonstring;
      }
    } else {
      if ($q == '4') {
        $query = 'SELECT nombre as res from socio order by nombre asc';
        $results = mysqli_query($mysqli, $query);

        if (!$results) {
          die('Error consultas');
        } else {
          $json = array();
          while ($row = mysqli_fetch_array($results)) {
            $json[] = array(
              'res' => $row['res']
            );
          }
          $mysqli->close();
          $jsonstring = json_encode($json);
          echo $jsonstring;
        }
      } else {
        if ($q == '5') {
          $query = 'SELECT EMAIL, PASS  from usuarios';
          $results = mysqli_query($mysqli, $query);

          if (!$results) {
            die('Error consultas');
          } else {
            $json = array();
            while ($row = mysqli_fetch_array($results)) {
              $json[] = array(
                'email' => $row['EMAIL'],
                'pass' => $row['PASS']
              );
            }
            $mysqli->close();
            $jsonstring = json_encode($json);
            echo $jsonstring;
          }
        }
      }
    }
  }
}
