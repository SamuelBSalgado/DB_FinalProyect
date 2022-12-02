<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Styles/miperfil-style.css">
  <title>Reservaciones</title>
</head>

<body>
<img id="logo" src="../Icons/Ocio.png" alt="" width="90" height="90">
  <div class="header">
    <label class="text">Socio:
      <?php
      session_start();
      echo $_SESSION["NOMBRE"] . ' ' . $_SESSION["APATERNO"];
      ?>
    </label>
  </div>

    <div class="botonLogOut">
      <button id="logout" onclick="location.href='../PHP/logout.php'">LOGOUT</button>
    </div>
<br>
    <div class="botonHome">
      <button id="logout" onclick="location.href='../Views/inicio.php'">HOME</button>
    </div>
  
  <div>
    <h2>Mis reservaciones:</h2>
  </div>
  <div id='showReservaciones'></div>



  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="../JS/reservaciones.js"></script>
  <script src="../JS/app.js"></script>
</body>

</html>