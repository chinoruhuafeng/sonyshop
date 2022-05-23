<?php
session_start();
require_once "bd_conecxion.php";
$nombre=$_POST['nombre'];
$password=$_POST['password'];
$consulta = "SELECT *  FROM usuarios WHERE nombre='$nombre' and password='$password' ";
$resultado = mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
if($fila['id_nivel']==1) {
  $_SESSION['nombre'] = $nombre;
  header("location:admin/index.php");
} else {
  if ($fila['id_nivel']==2) {
    $_SESSION['nombre'] = $nombre;
    header("location:empleado/index.php");
  }
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>
