<html>
<head>
<title>FEEDBACK FORM</title>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
<style>
    
*{
  
  font-family: Algerian;
  box-sizing: border-box;

 }
.container 
{
  align-self: center;
}
body 
{
    background-color: white;
    border: solid black;
  border-bottom: 2px solid black;
}
.radio-inline
{
    margin: 0px 40px 20px 0px;
    cursor: pointer;
}
div2
{

  box-sizing: border-box;
  
}
label
{
    color: #000;
    font-size: 20px;
}
div input[type="text"]
{
  border: solid black;
  border-bottom: 2px solid black;
  outline: black;
  height: 40px;
  color: black;
  font-size: 15px;
  align-self: center;
}

.message
{
 outline: none;
 border:none;
 padding: 10px 0px 0px 15px;
 color: #000;
 border-radius: 5px;
 width: 100%; 
}
button
{
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 80%;
}
  </style>

</head>
<body>
  <center>
  <div2>
   <div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <h1 class =" text-center mt-5 font-weight-bold"><center><u>Feedback</u></center></h1>
        <hr class="bg-white">
        <h2 class="text-center"><center><u>
            Please provide your feedback below:</u>
        </center>
        </h2>
       
            <form action="feedback.php" method="POST"><center>           
                <center><div class="row">
                <div class="col-md-2"></div>
                <label class="col-md-4"><center>
                    FULL NAME<br>
                    <input type="text" required="" id="name" name="name" placeholder="SOUMYA SHARMA"><br>
                    </label><br>

                <label class="col-md-4"><center>
                    EMAIL<br>
                    <input type="text" required="" id="email" name="email" placeholder="sharmasoumya@gmail.com"><br></center>
                </label><br><br><br><!--ye 2 <br> maine lagaye hai hta dena-->

                <label class="col-md-4"><center>
                    MOBILE NO.<br>
                    <input type="text" required="" id="mobile"name="mobile" placeholder="8052345154"></center>
                </label><br><br><br><br><br><!--ye 4 <br> maine lagaye hai hta dena-->

                <label class="col-md-4"><center>
                    MESSAGE<br>
                    <textarea id="comments" required="" name="comments" placeholder="WRITE YOUR MESSAGE......" cols="48" rows="5"></textarea></center><br>
                </label>
            </div></center>

            <div class="row">
             <label class="col-md-2"><center>
               <button type="submit" id="submit" name="submit" class="btn btn-primary"> SUBMIT </center></button>  
             </label>
            </div>
        </center>
        </form>
      </center>  
</body>

</html>
<?php
include 'db_connection.php';
$conn = OpenCon();
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$comments=$_POST["comments"];
$sql = "INSERT INTO feedback(name, email, mobile, comments) VALUES ('$name','$email','$mobile','$comments')";
$run=mysqli_query($conn,$sql);
if($run){
echo "<script>alert('feedback successfully registered')</script>";
echo "<script>window.open('feedback.php','_self')</script>";
}
}
?>
