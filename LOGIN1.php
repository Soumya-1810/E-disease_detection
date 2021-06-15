

<?php
include 'db_connection.php';
$conn = OpenCon();
if(isset($_POST["login-submit"])){ // Fetching variables of the form which travels in URL
$uname = $_POST["user"];
$pass = $_POST["password"];
$query ="Select * from user_register where username=? and password=? ";
try{
  $smt=$conn->prepare($query);
  $smt->bind_param("ss", $uname, $pass);
  if($smt->execute())
  {
      if($smt->fetch())
      {
        $redirect = 'index.php';
        header('Location: ' . $redirect);
      }
      else
      {
        echo '<script>alert("Invalid Input")</script>';
      }
  }
}
catch(Exception $e){
die('Error: ' . $e->getMessage());
echo "please try again";
echo $e->getMessage();
}
}
CloseCon($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <title>LOGIN FORM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
    
*{
  margin: 0;
  padding: 50;
  font-family: Algerian;
  box-sizing: border-box; 
 }
body 
{
    background-color: black;
}
div 
{
  width: 320px;
  background: #000;
  height: 700px;
  color: #fff;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%,-50%);
  box-sizing: border-box;
  padding: 70px;
}
div p
{
  margin: 0;
  padding: 0;
}
div a
{
  text-decoration: none;
  font-size: 12px;
  line-height: 20px;
  color: darkgrey;
}
h1
{
  margin: -40;
  padding: 0 0 80px;
  text-align: center;
  font-size: 36px;
}
div input[type="text"], input[type="password"]
{
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 22px;
}
div label
{
  font-size: 22px;
}

  </style>
</head>
<form action="index.php" method="post">
<body>
<div class="container">
  <b><u><h1>LOGIN FORM</h1></u></b>
  <form action="LOGIN1.php" class="needs-validation" novalidate method="post">
    <div1 class="form-group">
      <u><label for="user">Username:</label></u>
      <input type="text" class="form-control" id="user" placeholder="Enter username" name="user" required>
      <div2 class="valid-feedback">Valid.</div2>
      <div3 class="invalid-feedback">Please fill out this field.</div3>
    </div1>
    <div4 class="form-group">
      <u><label for="pwd">Password:</label></u>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
      <div5 class="valid-feedback">Valid.</div5>
      <div6 class="invalid-feedback">Please fill out this field.</div6>
    </div4>
    <div7 class="form-group form-check">
      <label class="form-check-label">
        <br><input class="form-check-input" type="checkbox" name="remember" required> Remember Me
        <div8 class="valid-feedback">Valid.</div8>
        <div9 class="invalid-feedback">Check this checkbox to continue.</div9>
      </label>
    </div7>
    <button type="submit" name="login-submit">Submit</button><br>
  </form>
  <br><button type="submit" name="logout-submit">Logout</button><br> 
  <br><a href="Signup.php">IF NEW USER.....SIGNUP NOW!</a>
  <form action="includes/logout.inc.php" class="needs-validation" novalidate>
  </form> 
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>

 










