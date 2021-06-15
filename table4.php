<?php
//include 'db_connection.php';
//$conn = OpenCon();
$conn=mysqli_connect('localhost','root','','login');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style>
    *
    {
      font-family: Algerian;
      color: black;
    }
    body
    {
      background: url(images/L72.jpg);
    
    }

     div label
    {
      color: black;
    }
    table {
    table-layout: fixed;
    width: 100%;   
}  
td
{
    max-width: 100px;
    word-wrap: break-word;
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
        <a class="nav-link" href="#">human_doctor<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="doctor.php">User's View</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="admin_feedback.php">FEEDBACK</a>
      </li>
    </ul>
    <a class="button" href="table.php"><font color="grey">LOGOUT</font></a>
  </div>
</nav><br><br>

 <div class="container">
  <h2><center><u> human_doctor EDITABLE DATABASE TABLE</u></center></h2><br>
  <table class="table">
 <thead>
      <tr>
     <th><u>ID</u></th>
      <th><u>DOCTOR'S NAME</u></th>
      <th><u>DOCTOR_SPECIALITY</u></th>          
      <th><u>ADDRESS</u></th>
      <th><u>DOCTOR'S_PHONE_NO</u></th>
       <th><u>Action</u></th>
       <th></th>
      </tr>
     </thead>
     <tbody>
      <?php
// Attempt select query execution
      
$sql = "SELECT * FROM search_doctor ";
if($result = mysqli_query($conn, $sql)){
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['DOCTORS_NAME'] . "</td>";
                echo "<td>" . $row['DOCTOR_SPECIALITY'] . "</td>";
                echo "<td>" . $row['ADDRESS'] . "</td>";
                 echo "<td>" . $row['DOCTORS_PHONE_NO'] . "</td>";
                  echo "<td><b><a href='update_doctor.php?ID=".$row['ID']."'>UPDATE</a></b></td>";
                   echo "<td><a href='delete4.php?ID=".$row['ID']."'>DELETE</a></td>";
                   
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } 
    else{
        echo "No records matching your query were found.";
    }  
 

?>   
     </tbody>
   </table>
   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">ADD NEW DOCTOR</button>
</div>


  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center>ADD</center></h4>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
          <label>DOCTORS NAME</label>
          <input type="text" id="D1" name="NAME" class="form-control">
        </div>
        <div class="form-group">
          <label>DOCTOR_SPECIALITY</label>
          <input type="text" id="D2" name="SPECIALITY" class="form-control">
        </div>
        <div class="form-group">
          <label>ADDRESS</label>
          <input type="text" id="D3" name="ADDRESS" class="form-control">
        </div>
        <div class="form-group">
          <label>DOCTOR'S_PHONE_NO</label>
          <input type="text" id="D4" name="PHONE" class="form-control">
        </div>
        <div class="form-group">
          <label>IMAGE</label>
          <input type="file" id="I1" name="photo" class="form-control">
        </div>
        </div>
          <div class="modal-footer">
         <button type="submit" class="btn btn-danger" name="submit">Save</button>
           </form>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      
      </div>
    </div>

  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
<script>
/*  function myFunction() {
  var name=document.getElementById("D1").value;
  var a= document.getElementById("D2").value;
  var ema=document.getElementById("D3").value;
        var mob=document.getElementById("D4").value;
         var add=document.getElementById("I1").value;
       
        
        if(name == null || a == null || ema == null || mob == null || add == null )
        {
            alter("Enter All Field");
        }
        else{
            var dataString = 'e1='+ name +'&f1='+ a +'&g2='+ ema +'&g3='+ mob + '&g4='+ add ;
   $.ajax({
type: "POST",
url: "table_4.php",
data: dataString,
cache: false,
success: function(result){
 alert("SUCCESSFULLY ADDED");
}
        });
        }
        }  */
  </script>
</html>
<?php 
if(isset($_POST['submit']))
{

$conn=mysqli_connect('localhost','root','','login');//write your db connection here
$d_name=$_POST['NAME'];
$d_spec=$_POST['SPECIALITY'];
$d_address=$_POST['ADDRESS'];
$d_phone=$_POST['PHONE'];
$img=$_FILES['photo']['name'];
$tmp_img=$_FILES['photo']['tmp_name'];
move_uploaded_file($tmp_img, "images/$img");
$sql = "INSERT INTO search_doctor(DOCTORS_NAME, DOCTOR_SPECIALITY,ADDRESS,DOCTORS_PHONE_NO,image) VALUES ('$d_name','$d_spec','$d_address','$d_phone','$img')";
$run=mysqli_query($conn,$sql);
if($run)
{
  echo "<script>alert('added')</script>";
  echo "<script>window.open('table4.php','_self')</script>";
}


}

?>