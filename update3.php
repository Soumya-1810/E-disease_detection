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
<?php
$conn=mysqli_connect('localhost','root','','project');//write your own database connection.

$sql = "SELECT symptom1, symptom2, symptom3, d_name, Cure FROM animal_disease WHERE d_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET['d_id']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($symptom1, $symptom2, $symptom3, $d_name, $Cure);
$stmt->fetch();
$stmt->close();
$id=$_GET['d_id'];
?>  
<div class='form-group'>
   <div class="box">
  <center>
   <h1 align="center">EDIT ACCOUNT</h1>
  </center>
  <form  action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label>id</label><br>
    <input type="text" name="id" class="form-control" required="" value="<?php echo($id) ?>">
  </div>
  <div class="form-group">
    <label>SYMPTOM_1</label><br>
    <input type="text" name="dname" class="form-control" required="" value="<?php echo($symptom1) ?>">
  </div>
  <div class="form-group">
    <label>SYMPTOM_2</label><br>
    <input type="text" name="speciality" class="form-control" required="" value="<?php echo($symptom2) ?>">
  </div>
  
  <div class="form-group">
    <label>SYMPTOM_3</label><br>
    <input type="text" name="address" class="form-control" required="" value="<?php echo($symptom3) ?>">
  </div>
  <div class="form-group">
    <label>DISEAE</label><br>
    <input type="text" name="phone" class="form-control" required="" value="<?php echo($d_name) ?>">
  </div>
  <div class="form-group">
    <label>CURE</label><br>
    <input type="text" name="phone" class="form-control" required="" value="<?php echo($Cure) ?>">
  </div>
</div>
<input type='submit' value='Submit' name='submit'>
</div></form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{          $dis_id=$_POST["id"];
          $bno=$_POST["s1"];
          $aa11=$_POST["s2"];
          $aa22=$_POST["s3"];
          $aa33=$_POST["dname"];
          $aa44=$_POST["cure"];
          $sql="UPDATE animal_disease SET symptom1='$bno', symptom2='$aa11', symptom3='$aa22', d_name='$aa33', Cure='$aa44' WHERE d_id='$dis_id'";
          $run_update=mysqli_query($conn,$sql);
          if($run_update)
          {
              echo "<script>alert('successfully updated')</script>";
             echo "<script>window.open('table3.php','_self')</script>";
          }
 }
?>