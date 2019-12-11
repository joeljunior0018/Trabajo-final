<?php
include("db.php");
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM cliente WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  header('Location: cliente.php');
}
?>


<?php
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM categoria WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  
  header('Location: categoria.php');
}
?>