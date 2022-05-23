<?php
include '../modulo/header2.php';
?>

<body>
  <?php
  include '../modulo/menu2.php';
  ?>

  <main>
    <center><h1 class="featurette-heading">Categoria de Main Board</h1></center>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- ********************************* -->
      <?php
      include './../../bd_conecxion.php';
      if(!empty($_REQUEST["nume"])){ $_REQUEST["nume"] = $_REQUEST["nume"];}else{ $_REQUEST["nume"] = '1';}
      if($_REQUEST["nume"] == "" ){$_REQUEST["nume"] = "1";}
      $articulos=mysqli_query($conexion,"SELECT refracion.id AS id,
      categoria.descripcion as catalago,
      marca.marca as marca,
      modelo.modelo as modelo,
      refracion.version as version,
      refracion.imagen AS imagen ,
      bodega.descripcion  as bodega,
      cuarto.cuarto as cuarto,
      seccion.seccion as seccion,
      refracion.costo AS costo ,
      refracion.cantidad as cantidad FROM refracion
      inner JOIN categoria ON refracion.id_categoria=categoria.id
      INNER JOIN marca ON refracion.id_marca=marca.id
      INNER JOIN modelo ON refracion.id_model=modelo.id
      INNER JOIN locacion ON refracion.ubicacion=locacion.id
      inner JOIN bodega ON locacion.id_bodega=bodega.id
      INNER JOIN cuarto ON locacion.id_cuarto= cuarto.id
      INNER JOIN seccion ON locacion.id_seccion = seccion.id
      where refracion.id_categoria='1';");
      $num_registros=@mysqli_num_rows($articulos);
      $registros= '3';
      $pagina=$_REQUEST["nume"];
      if (is_numeric($pagina))
      $inicio= (($pagina-1)*$registros);
      else
      $inicio=0;
      $busqueda=mysqli_query($conexion,"SELECT refracion.id AS id,
      categoria.descripcion as catalago,
      marca.marca as marca,
      modelo.modelo as modelo,
      refracion.version as version,
      refracion.imagen AS imagen ,
      bodega.descripcion  as bodega,
      cuarto.cuarto as cuarto,
      seccion.seccion as seccion,
      refracion.costo AS costo ,
      refracion.cantidad as cantidad FROM refracion
      inner JOIN categoria ON refracion.id_categoria=categoria.id
      INNER JOIN marca ON refracion.id_marca=marca.id
      INNER JOIN modelo ON refracion.id_model=modelo.id
      INNER JOIN locacion ON refracion.ubicacion=locacion.id
      inner JOIN bodega ON locacion.id_bodega=bodega.id
      INNER JOIN cuarto ON locacion.id_cuarto= cuarto.id
      INNER JOIN seccion ON locacion.id_seccion = seccion.id
      where refracion.id_categoria='1' LIMIT $inicio,$registros;");
      $paginas=ceil($num_registros/$registros);
      ?>
      <!-- ********************************* -->
      <?php while ($resultado = mysqli_fetch_assoc($busqueda)){ ?>
          <!--************************ -->
          <!-- START THE FEATURETTES -->
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading"><?php echo $resultado['catalago']; ?></h2>
              <p class="lead"><b>Precio:<?php echo $resultado['costo']; ?></b></p>
              <p class="lead"><b>Numero de parte:<?php echo $resultado['version']; ?></b></p>
              <p class="lead"><b>Marca:<?php echo $resultado['marca']; ?></b></p>
              <p class="lead"><b>Modelo<?php echo $resultado['modelo']; ?></b></p>

            </div>
            <div class="col-md-5">
              <img src="../../<?php echo $resultado['imagen']; ?>" width="60%" height="50%" alt="">
            </div>
          </div>
          <!-- /END THE FEATURETTES -->
   <?php } ?>
    </div><!-- /.container -->
    <!--**********************************-->
    <!-- paginacion //////////////////////////////////////-->
    <div class="container-fluid  col-12">
      <ul class="pagination pg-dark justify-content-center pb-5 pt-5 mb-0" style="float: none;" >
        <li class="page-item">
          <?php
          if($_REQUEST["nume"] == "1" ){
            $_REQUEST["nume"] == "0";
            echo  "";
          }else{
            if ($pagina>1)
            $ant = $_REQUEST["nume"] - 1;
            echo "<a class='page-link' aria-label='Previous' href='mainboard.php?nume=1'><span aria-hidden='true'>&laquo;</span><span class='sr-only'>Previous</span></a>";
            echo "<li class='page-item '><a class='page-link' href='mainboard.php?nume=". ($pagina-1) ."' >".$ant."</a></li>"; }
            echo "<li class='page-item active'><a class='page-link' >".$_REQUEST["nume"]."</a></li>";
            $sigui = $_REQUEST["nume"] + 1;
            $ultima = $num_registros / $registros;
            if ($ultima == $_REQUEST["nume"] +1 ){
              $ultima == "";}
              if ($pagina<$paginas && $paginas>1)
              echo "<li class='page-item'><a class='page-link' href='mainboard.php?nume=". ($pagina+1) ."'>".$sigui."</a></li>";
              if ($pagina<$paginas && $paginas>1)
              echo "
              <li class='page-item'><a class='page-link' aria-label='Next' href='mainboard.php?nume=". ceil($ultima) ."'><span aria-hidden='true'>&raquo;</span><span class='sr-only'>Next</span></a>
              </li>";
              ?>
            </ul>
          </div>
          <!-- end paginacion ///////////////////////// -->
          <!--**********************************-->

    <?php
    include '../modulo/footer2.php';
    ?>

  </body>
  </html>
