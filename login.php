
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
  <!-- Bootstrap core CSS -->
  <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
</head>
<?php
require_once "Style/cabecera.php";
?>
<style>
.bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

@media (min-width: 768px) {
  .bd-placeholder-img-lg {
    font-size: 3.5rem;
  }
}
</style>
<!-- Custom styles for this template -->
<link href="Style/css/signin.css" rel="stylesheet">
<body class="text-center">

  <main class="form-signin">
    <form action="validar_Login.php" method="post">
      <center>
        <img class="mb-4" src="Style/img/sony-logo.png" alt="" width="150" >
      </center>
    <!--  <h1 class="h3 mb-3 fw-normal">Iniciar Sesión</h1> -->
      <center>
        <div class="form-floating">
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="No. Empleado">
          <label for="floatingInput">Nombre</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
          <label for="floatingPassword">Contraseña</label>
        </div>
      </center>

      <button class="w-100 btn btn-lg btn-dark" type="submit">Ingresar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
  </main>

  <?php
  require_once "Style/footer.php";
  ?>
</body>
</html>
