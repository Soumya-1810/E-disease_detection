<?php
$conn=mysqli_connect('localhost','root','','project');
$bno=$_GET["d_id"];
$query ="DELETE from plant_disease where d_id='$bno'";
$run=mysqli_query($conn,$query);
if($run)
{
  echo "<script>alert('deleted')</script>";
  echo "<script>window.open('table2.php','_self')</script>";
}

?>