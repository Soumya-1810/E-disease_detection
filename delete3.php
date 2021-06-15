<?php
$conn=mysqli_connect('localhost','root','','project');
$bno=$_GET["d_id"];
$query ="DELETE from animal_disease where d_id='$bno'";
$run=mysqli_query($conn,$query);
if($run)
{
  echo "<script>alert('deleted')</script>";
  echo "<script>window.open('table3.php','_self')</script>";
}

?>