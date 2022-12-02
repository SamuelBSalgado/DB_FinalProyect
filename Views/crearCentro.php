<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Styles/edit-style.css">
  <title>Crear centro</title>
</head>

<body>
  <img id="logo" src="../Icons/Ocio.png" alt="" width="90" height="90">
  <div class="header">
    <label id="label" for="">Bienvenido:
      <?php
        session_start();
        echo $_SESSION["NOMBRE"] . ' ' . $_SESSION["APATERNO"];
      ?>
    </label>
  </div>

    <div id="home">
      <button id="logout" onclick="location.href='../Views/inicio.php'">HOME</button>
    </div>
  </div>
    <?php
    if ($_SESSION["TIPO"] == 'Admin') {
      if (isset($_GET['id'])) {
        if ($_GET['id'] == '2') {
          echo "<div><h4>Centro creado</h4></div>";
        } else {
          echo "<div><h4>Error al crear centro</h4></div>";
        }
      }
      echo '
  <div>
    <h3>CREAR NUEVO CENTRO:</h3>
    <form action="../PHP/saveCentro.php" method="POST">
      <div>
        <label for="codigo">Codigo: </label>
        <input type="text" id="codigo">
      </div>
      <div>
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre">
      </div>
      <div>
        <label for="calle">Calle: </label>
        <input type="text" id="calle">
      </div>
      <div>
        <label for="ciudad">Ciudad: </label>
        <input type="text" id="ciudad">
      </div>
      <div>
        <label for="telefono">Telefono del responsable: </label>
        <input type="text" id="telefono">
      </div>
      <div>
        <label for="email">Email del responsable: </label>
        <input type="text" id="email">
      </div>
      <div>
      <label>Descripcion:
      <textarea id="des" name="descripcion" cols="40" rows="5"></textarea>
      </label>
      </div>
  
  <button type="submit">CREAR NUEVO CENTRO</button>
  </form>
  </div>
  <div>
  <!-- Estos botones solo le van a aparecer al usuario que tenga permisos de admin !-->
  
  </div>
  ';
    } else {
      $error = 'No tienes acceso a esta pagina';
      header("Location: /ProyectoBD/inicio.php?error=$error");
      die();
    }
    ?>

    <div>
      <label class="modify">Modificar por codigo:</label>
        <input class='codigo' name="codigo" type="text">
      <button class="btnBuscar">BUSCAR CENTRO</button>
      <button class="btnUpdate">ACTUALIZAR DATOS DEL CENTRO</button>

      <button id="btnEliminar">ELIMINAR CENTRO</button>

    </div>
    <div id="showReservaciones">
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="../JS/edit.js"></script>
</body>

</html>