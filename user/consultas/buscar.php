<?php
include './../../bd_conecxion.php';
if (isset($_GET['buscar'] )) {
  $txt_nombre=$_GET['txt_nombre'];
  $consulta=$conexion->query("SELECT refracion.id AS id,
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
                  where categoria.descripcion LIKE '$txt_nombre%'");
    while ($row =$consulta->fetch_array()) {
      ?>
      <!--************************ -->
      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo $row['catalago']; ?></h2>
          <p class="lead"><b>Precio:<?php echo $row['costo']; ?></b></p>
          <p class="lead"><b>Numero de parte:<?php echo $row['version']; ?></b></p>
          <p class="lead"><b>Marca:<?php echo $row['marca']; ?></b></p>
          <p class="lead"><b>Modelo<?php echo $row['modelo']; ?></b></p>

        </div>
        <div class="col-md-5">
       <img src="../../<?php echo $row['imagen']; ?>" width="60%" height="50%" alt="">
        </div>
      </div>

      <!-- /END THE FEATURETTES -->
      <?php
    }
}// fin de if
?>
