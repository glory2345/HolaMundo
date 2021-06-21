<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'alumnos'
) or die(mysqli_erro($mysqli));

?>