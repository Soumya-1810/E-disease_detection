<?php
$conn=mysqli_connect('localhost','root','','login');
$id=$_GET['ID'];
$sql="select * from search_doctor where ID='$id'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($run))
{
  $name=$row['DOCTORS_NAME'];
  $speciality=$row['DOCTOR_SPECIALITY']; 
  $address=$row['ADDRESS'];
  $phone=$row['DOCTORS_PHONE_NO'];
  
}

?>

<!DOCTYPE html>
<html>
<head>
  
 <link rel="stylesheet" href="CSS/EcoMaster.css">
 <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <title>UPDATE FORM</title>

</head>
<body>
<div class="box">
  <center>
   <h1 align="center">EDIT ACCOUNT</h1>
  </center>
  <form  action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label>Doctor id</label>
    <input type="text" name="id" class="form-control" required="" value="<?php echo($id) ?>">
  </div>
  <div class="form-group">
    <label>Doctor Name</label>
    <input type="text" name="dname" class="form-control" required="" value="<?php echo($name) ?>">
  </div>
  <div class="form-group">
    <label>Doctor Speciality</label>
    <input type="text" name="speciality" class="form-control" required="" value="<?php echo($speciality) ?>">
  </div>
  
  <div class="form-group">
    <label>Doctor Address</label>
    <input type="text" name="address" class="form-control" required="" value="<?php echo($address) ?>">
  </div>
  <div class="form-group">
    <label>Doctor Contact No</label>
    <input type="text" name="phone" class="form-control" required="" value="<?php echo($phone) ?>">
  </div>
  <div class="text-center">
    <button  type="submit" class="btn btn-primary" name="submit">Update Now</button>
  </div>
    </form>
</div>
</body>
</html>
<?php 
if(isset($_POST["submit"]))
{          $dis_id=$_POST["id"];
          $bno=$_POST["dname"];
          $aa11=$_POST["speciality"];
          $aa22=$_POST["address"];
          $aa33=$_POST["phone"];
          $update="update search_doctor set DOCTORS_NAME='$bno',DOCTOR_SPECIALITY='$aa11',ADDRESS='$aa22', DOCTORS_PHONE_NO='$aa33' where ID='$dis_id'";
          $run=mysqli_query($conn,$update);
          if (!$run) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
          if($run)
          {
             echo "<script>alert('successfully updated')</script>";
             echo "<script>window.open('table4.php','_self')</script>";
          }
          else
          {
           echo "<script>alert('failed')</script>"; 
          }
 }
?>