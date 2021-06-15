<?php
$conn=mysqli_connect('localhost','root','','login');
$id=$_GET['ID'];
echo $id;
$delete="delete from search_doctor_plant where ID='$id'";
$run=mysqli_query($conn,$delete);
if($run)
{
  echo "<script>alert('deleted')</script>";
  echo "<script>window.open('table5.php','_self')</script>";
}
?>