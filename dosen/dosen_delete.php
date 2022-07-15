<?php
include "../connection.php";
$id = $_GET['id'];
$result = mysqli_query($con, "DELETE FROM dosen WHERE id=$id");
header("Location:../admin/?page=dosen-show");
// echo "<meta http-equiv='refresh' content='0; url=../?page=mahasiswa-show'>";