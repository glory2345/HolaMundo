<?php
include("db.php");
$Nombre = '';
$Ap_paterno= '';
$Ap_materno= '';
$Telefono= '';
$Correo= '';
$Carrera= '';


if  (isset($_GET['Id'])) {
    $Id = $_GET['Id'];
    $query = "SELECT * FROM persona WHERE Id=$Id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $Nombre = $row['Nombre'];
        $Ap_paterno = $row['Ap_paterno'];
        $Ap_paterno = $row['Ap_materno'];
        $Ap_paterno = $row['Telefono'];
        $Ap_paterno = $row['Correo'];
        $Ap_paterno = $row['Carrera'];
      }
}

if (isset($_POST['update'])) {
    $Id = $_GET['Id'];
    $Nombre= $_POST['Nombre'];
    $Ap_paterno = $_POST['Ap_paterno'];
    $Ap_materno = $_POST['Ap_materno'];
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];
    $Carrera = $_POST['Carrera'];

    $query = "UPDATE persona set Nombre = '$Nombre', Ap_paterno = '$Ap_paterno', Ap_materno = '$Ap_materno', Telefono = '$Telefono', Correo = '$Correo', Carrera = '$Carrera' WHERE Id=$Id";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'alumno Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header('Location: index.php');
  }

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?Id=<?php echo $_GET['Id']; ?>" method="POST">
        <div class="form-group">
          <input name="Nombre" type="text" class="form-control" value="<?php echo $Nombre; ?>" placeholder="Update Nombre">
        </div>
        <div class="form-group">
          <input name="Ap_paterno" type="text" class="form-control" value="<?php echo $Ap_paterno; ?>" placeholder="Update Ap_paterno">
        </div>
        <div class="form-group">
          <input name="Ap_materno" type="text" class="form-control" value="<?php echo $Ap_materno; ?>" placeholder="Update Ap_materno">
        </div>
        <div class="form-group">
          <input name="Telefono" type="text" class="form-control" value="<?php echo $Telefono; ?>" placeholder="Update Telefono">
        </div>
        <div class="form-group">
          <input name="Correo" type="text" class="form-control" value="<?php echo $Correo; ?>" placeholder="Update Correo">
        </div>
        <div class="form-group">
          <input name="Carrera" type="text" class="form-control" value="<?php echo $Carrera; ?>" placeholder="Update Carrera">
        </div>
        <button class="btn btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
