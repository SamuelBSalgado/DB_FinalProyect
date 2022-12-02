<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Styles/buscar-style.css">
  <title>Buscar</title>
</head>

<body>
  <img class="logo" src="../Icons/Ocio.png" alt="" width="90" height="90">
  <div class="header">
    <label class="text">Usuario:
      <?php
        session_start();
        echo $_SESSION["NOMBRE"] . ' ' . $_SESSION["APATERNO"];
      ?>
    </label>
  </div>

  <div class="home">
    <button style="cursor: pointer" id="logout" onclick="location.href='../Views/inicio.php'">HOME</button>
  </div>
<br>
  <div class="logOut">
    <button style="cursor: pointer" id="logout" onclick="location.href='../PHP/logout.php'">LOGOUT</button>
  </div>
<br>
  <div class="reservas">
    <button style="cursor: pointer" onclick="location.href='../Views/miperfil.php'">Mis reservaciones</button>
  </div>
    <!-- Aqui el usuario busca por codigo los centros. Ten cuidado con no mover esos displays, busca un estilo que solo modifique lo visual y no su distribucion, o si lo haces, puedes meter todo los divs del form en otro div al que le pones estilo !-->

  <div style="display: flex;">
    <div>
      <label for="codigoSearch">Buscar por codigo: </label>
    </div>

    <div id="divBuscar">
      <div>
        <input type="text" id="search">
      </div>
      <div id="divResultados">
        
      </div>
    </div>

    <div>
      <button id="btnBuscar" onclick="sendRequest();" style="cursor: pointer">BUSCAR</button>
    </div>
  </div>

  <!-- En este div se guarda la info del centro !-->

  <div id='centrosInfo'>
    <div id='info'>
      
    </div>
  </div>

  <div id='divFecha'>
    <br>
    <label><b>Seleccione una fecha y elija una activiad:<b></label>
    <input id='fecha' type='datetime-local'>
  </div>
  <!-- En este div se muestra la info de las salas que contiene el centro seleccionado!-->

  <div id='salasInfo'>
    
  </div>





  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="../JS/app.js"></script>
</body>

</html>