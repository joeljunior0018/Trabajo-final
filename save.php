<?php
$d=$_GET['d'];
if($d==1)
{
  save_cliente();
}
if($d==2)
{
  save_categoria();
}
function save_cliente()
{
  include ('db.php');
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $query = "INSERT INTO cliente(nombre, apellido, direccion, telefono, email, user, pass ) VALUES ('$nombre', '$apellido', '$direccion', '$telefono', '$email', '$user', '$pass')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  header('Location: cliente.php');
}

function save_categoria()
{
  include ('db.php');
  $nombre = $_POST['nombre'];
  $query = "INSERT INTO categoria(nombre) VALUES ('$nombre')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
 
  header('Location: categoria.php');
}
?> 