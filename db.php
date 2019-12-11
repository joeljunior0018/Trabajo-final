<?php
session_start();
$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'srnutricional'
) or die(mysqli_erro($mysqli));
?>