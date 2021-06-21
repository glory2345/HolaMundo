<?php

include("db.php");

if(isset($_GET['Id'])) {
  $Id = $_GET['Id'];
  $query = "DELETE FROM persona WHERE Id = $Id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Alumno Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>