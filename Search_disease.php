<!DOCTYPE html>
<html>
<head>
  <title>Search disease</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
    
    body, html 
    {
  height: 100%;
     }

* {
  margin: 0;
  padding: 50;
  font-family: Algerian;
  box-sizing: border-box;
  font-size: 15px;
}

.bg-image {
  /* The image used */
  background-image: url("images/L9.jpg");

  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 1000px;
  height: 650px;
  padding: 70px;
  text-align: center;
}
h1
{
  font-size: 70;
}
p
{
  font-size: 50;
}
 div1
 {
  left: 100px;
  position: absolute ;
  top:200px;
  font-size: 40;

 }
  div2
 {
  left: 400px;
  position: absolute ;
  top:200px;
 }
 div3
 {
  left: 700px;
  position: absolute ;
  top:200px;
 }
 div6
 {
  left: 350px;
  position: absolute ;
  top: 350px;
  width: 60%;
  background-color:transparent;
  font-size: 16px;
}
div4
{
  left: 300px;
  position: absolute ;
  top: 280px;
  font-size: 45;
  width: 60%;
}
button1 {
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 60%;
}
button
{
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 60%;
}
option
{
  background-color: white;
}
#SYMPTOMS
{
  background: grey;
  padding: 5px;
  color: #000;
  width:220px;
  height: 45px;
  cursor: pointer;
}
div5
{
  left: 100px;
  position: absolute ;
  top: 410px;
  font-size: 15;
}

</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">DISEASE DETECTION</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Search Disease<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="doctor.php">VIEW Doctor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feedback.php">Feedback</a>
      </li>
    </ul>
    <a class="button" href="index.php"><font color="grey">LOGOUT</font></a>
  </div>
</nav><br>
<div class="bg-image"></div>

<div class="bg-text">
  <u><h1>SEARCH DISEASE</h1></u>
  <h4>ENTER SYMPTOMS HERE(DON'T LEAVE ANY DROPDOWN BLANK)</h4>
  <?php
   $con=mysqli_connect('localhost','root','','project');   
   ?>
<form action="" method="post">
 <div1 class="dd">
  <label>TYPE 1:</label>
  <select name="symptom1" id="SYMPTOMS">
    <option value="wrong"> Select Symptoms</option>
  <?php
  $get_symptoms="select * from disease";
   $run=mysqli_query($con,$get_symptoms);
   while($row=mysqli_fetch_array($run))
  { 
    $s1=$row['symptom1'];
    echo "<option value=".$s1.">".$s1."</option>";
  }

   ?>
  </select>
</div1>
<div2 class="dd">
  <label>TYPE 2:  </label>
  <select name="symptom2" id="SYMPTOMS" onchange="">
    <option value="wrong"> Select Symptoms</option>
   <?php
  $get_symptoms="select * from disease";
   $run=mysqli_query($con,$get_symptoms);
   while($row=mysqli_fetch_array($run))
  { 
    $s2=$row['symptom2'];
    echo "<option value=$s2> $s2</option>";
  }

   ?>
  </select>
</div2>
<div3 class="dd">
  <label>TYPE 3:  </label>
  <select name="symptom3" id="SYMPTOMS">
    <option value="wrong"> Select Symptoms</option> 
    <?php
  $get_symptoms="select * from disease";
   $run=mysqli_query($con,$get_symptoms);
   while($row=mysqli_fetch_array($run))
  { 
    $s3=$row['symptom3'];
    echo "<option value=$s3> $s3</option>";
  }

   ?>
  </select>
 
</div3>

<div4 class="form-group">
   <input type="submit" class="btn btn-primary form-control" name="submit" value="Submit">
</div4>
</form>
<?php
 $s1="";
 $s2="";
 $s3="";
 $disease="";
 $cure="";
if(isset($_POST['submit']))
{
  $s1=$_POST['symptom1'];
  $s2=$_POST['symptom2'];
  $s3=$_POST['symptom3'];
  if($s1=="wrong"||$s2=="wrong"||$s3=="wrong")
  {
    echo "<script>alert('wrong symptoms selection')</script>";
    echo "<script>window.open('Search_disease.php','_self')</script>";
  }
  
  $select_disease="select * from disease where symptom1='$s1' AND symptom2='$s2' AND symptom3='$s3'";
  $run=mysqli_query($con,$select_disease);
 $row=mysqli_fetch_array($run);
  if($row){  
  $disease=$row['d_name'];
  $cure=$row['Cure'];
}
else{
  $disease="No disease found";  
  $Cure="No disease found";
}
}
?>


<div5>
  <u><h3><label>DISEASE DETAILS:</label></h3></u>
   </div5>
   <div6>
    <textarea class="form-control" id="DISEASE_DETAILS" rows="9"><?php  echo "Symptom 1:".$s1." \nSymptom 2:".$s2."\nSymptom 3:".$s3."\n\n Disease:".$disease. "\nCure:".$cure ?></textarea>
    </div6>
</div>
</body>
</html>