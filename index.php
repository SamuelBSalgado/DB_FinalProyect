<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv='cache-control' content='no-cache'>
  <meta http-equiv='expires' content='0'>
  <meta http-equiv='pragma' content='no-cache'>

  <link rel="stylesheet" href="Styles/login.css">
  <title>LOGIN</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="Styles/bootstrap.min.css">
</head>

<body class="text-center" style="background-color: lightblue">
  <main class="form-signin w-100 m-auto">
    <form action="PHP/login.php" method="post">
      <!-- En este div se devuelve el error !-->
      <div>
        <?php
        if (isset($_GET["error"])) {
          echo $_GET["error"];
        }
        ?>
      </div>

<!-- Div container del DOM -->
      <div class="container" style="padding-left: 350px; padding-right: 350px; padding-top: 50px">
        <img class="mb-4" src="Icons/Ocio.png" alt="" width="90" height="90">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
          <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="nombre">Email address</label>
        </div>

        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="password">Password</label>
        </div>

        <div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </div>
      </div>
  </form>
</main>
</body>

<br>
<br>



  
</body>
</html>