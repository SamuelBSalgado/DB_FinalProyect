<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv='cache-control' content='no-cache'>
  <meta http-equiv='expires' content='0'>
  <meta http-equiv='pragma' content='no-cache'>
  <title>Sistema de Reservas</title>
  <link rel="stylesheet" href="../Styles/inicio.css">
</head>

<body>
  <img id="logo" src="../Icons/Ocio.png" alt="" width="90" height="90">
  <div class="header">
    <div class="bienvenida">
      <div id="text">
      <label id="label" for="">Bienvenido:
        <?php
        session_start();
        echo $_SESSION["NOMBRE"] . ' ' . $_SESSION["APATERNO"];
        ?>
      </label>
      </div>
    </div>

    <div class="botones">
      <div id="botonesEdit">
        <div id="modificar">
      <?php
        if ($_SESSION['TIPO'] == 'Admin') {
          echo "<a href='../Views/crearCentro.php'><button id='btnBuscar'>MODIFICAR CENTROS</button></a>";
        }
        ?>
        <br>
        <br>
      </div>
      <div id="logOut">
    <button id="logout" onclick="location.href='../PHP/logout.php'">LOGOUT</button>
      </div>
      <br>
  <!-- Si el usuario es admin se le muestran opciones para crear un nuevo centro !-->

    <div id="buscar">
  <!-- Estos botones aparecern para admins y para socios normales y te llevan a esos documentos !-->
      <button id='btnBuscar' onclick="location.href='../Views/buscar.php'">BUSCAR</button>
    </div>
      </div>
    </div>
  </div>

  <div>
    <div>
      Consulta 1:
      <button id="q1">Cantidad de reservas en el sistema</button>
    </div>

    <div>
      Consulta 2:
      <button id="q2">Mostrar los usuarios admins</button>
    </div>
    
    <div>
      Consulta 3:
      <button id="q3">Salas con mas de 30m2</button>
    </div>
    
    <div>
      Consulta 4:
      <button id="q4">Nombres de los socios en orden</button>
    </div>
    
    <div>
      Consulta 5:
      <button id="q5">Mostrar emails y passwords</button>
    </div>
  </div>
  <div id="res"></div>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="../JS/inicio.js"></script>
</body>
</html>