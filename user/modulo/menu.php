
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Sony</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <!-- **************************************-->
          <?php
          $conexion = mysqli_connect("localhost", "root", "", "sony");
          $sql = "SELECT * FROM categoria ";
          $resultado = $conexion->query($sql);
          if($resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()){
              ?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="user/categoria/categoria.php?id=<?php echo $row['id']; ?>"><?php echo $row['descripcion']; ?></a>
          </li>
          <?php

        }
      }
      $conexion->close();
      ?>
        </ul>
        <!-- **************************************-->
          <a class="btn btn-warning" aria-current="page" href="login.php">Inicial sesion</a>
          &nbsp
        <form class="d-flex" action="user/consultas/busqueda.php" method="GET">
          <input class="form-control me-2" type="search" placeholder="Marca,Modelo,Categoria?" aria-label="Search" name="txt_nombre" id="txt_nombre">
          <input type="submit" class="btn btn-outline-success" name="buscar" id="buscar" value="Buscar">
        </form>
      </div>
    </div>
  </nav>
</header>
