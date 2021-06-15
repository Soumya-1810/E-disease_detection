<?php
include 'db_connection.php';
$conn = OpenCon();
if(isset($_POST["Signup-Submit"])){ // Fetching variables of the form which travels in URL
$id = $_POST['id'];
$uname = $_POST["username"];
$email = $_POST["e-mail"];
$password = $_POST["password"];
$repeat = $_POST["repeat_password"];
//Insert Query of SQL
$query ="INSERT INTO sign_up VALUES (?,?,?,?,?)";
try{
  $smt=$conn->prepare($query);
  $smt->bind_param("issss", $id,$uname,$email,$password,$repeat);
  $smt->execute();
  echo '<script>alert("YOU ARE ADDED SUCCESSFULLY")</script>'; 
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
div a
{
  text-decoration: none;
  font-size: 12px;
  line-height: 20px;
  color: darkgrey;
}
div p
{
  margin: 0;
  padding: 0;
}
h6
{
  margin: -40px;
  padding: 0 0 80px;
  text-align: center;
  font-size: 22px;
}
div input[type="text"], input[type="password"]
{
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;
}
  </style>
</head>
<body>
  <div class="container">
      <u><h6>Signup FORM</h6></u>
      <form action="LOGIN1.php" class="needs-validation" novalidate method="post">
        <div1 class="form-group">
        <u><label for="id">id:</label></u><br>
        <input type="text" name="id" class="form-control" id="id" placeholder="id" required><br>
        <div2 class="valid-feedback">Valid.</div2>
      <div3 class="invalid-feedback">Please fill out this field.</div3>
    </div1>
    <div4 class="form-group">
        <u><label for="user">Username:</label></u><br>
        <input type="text" name="username" class="form-control" id="username" placeholder="Username" required><br>
        <div2 class="valid-feedback">Valid.</div2>
      <div3 class="invalid-feedback">Please fill out this field.</div3>
    </div4>
    <div5 class="form-group">
        <u><label for="e-mail">e-mail:</label></u><br>
        <input type="text" name="e-mail" class="form-control" id="e-mail" placeholder="E-mail" required><br>
        <div2 class="valid-feedback">Valid.</div2>
      <div3 class="invalid-feedback">Please fill out this field.</div3>
    </div5>
    <div6 class="form-group">
        <u><label for="password">Password:</label></u><br>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required><br>
        <div2 class="valid-feedback">Valid.</div2>
      <div3 class="invalid-feedback">Please fill out this field.</div3>
    </div6>
    <div7 class="form-group">
        <u><label for="repeat-password">repeat-password:</label></u><br>
        <input type="password" class="form-control" name="repeat-password" id="repeat_password" placeholder="Repeat Password" required><br>
        <div2 class="valid-feedback">Valid.</div2>
      <div3 class="invalid-feedback">Please fill out this field.</div3>
        <br><button type="submit" name="Signup-Submit">Signup</button>
    </div7>
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