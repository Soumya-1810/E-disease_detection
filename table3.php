<?php
include 'db_connection1.php';
$conn = OpenCon();
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
      color: white;
    }
    body
    {
      background: url(images/L70.jpg);
    
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
        <a class="nav-link" href="#">animal_disease<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Animal_disease.php">User's View</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="admin_feedback.php">FEEDBACK</a>
      </li>
    </ul>
    <a class="button" href="table.php"><font color="grey">LOGOUT</font></a>
  </div>
</nav><br><br>

 <div class="container">
  <h2><center><u> ANIMAL_DISEASE EDITABLE DATABASE TABLE</u></center></h2><br>
  <table class="table">
 <thead>
      <tr>
     <th><u>ID</u></th>
      <th><u>SYMPTOMS</u></th>
      <th><u>SYMPTOMS_1</u></th>          
      <th><u>SYMPTOMS_2</u></th>
      <th><u>Disease</u></th>
      <th><u>Cure</u></th> 
       <th><u>Action</u></th>
       <th></th>
      </tr>
     </thead>
     <tbody>
      <?php
// Attempt select query execution
$sql = "SELECT * FROM animal_disease ";
if($result = mysqli_query($conn, $sql)){
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['d_id'] . "</td>";
                echo "<td>" . $row['symptom1'] . "</td>";
                echo "<td>" . $row['symptom2'] . "</td>";
                echo "<td>" . $row['symptom3'] . "</td>";
                 echo "<td>" . $row['d_name'] . "</td>";
                  echo "<td>" . $row['Cure'] . "</td>";
                  echo "<td><a href='update3.php?d_id=".$row['d_id']."'>UPDATE</a></td>";
                   echo "<td><td><a href='delete3.php?d_id=".$row['d_id']."'>DELETE</a></td></td>";
                   
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
   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">ADD NEW SYMPTOMS</button>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">EDIT</h4>
      </div>
      <form action="table.php" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label>Symptoms</label>
          <input type="text" id="s1" name="Symptoms" class="form-control">
        </div>
        <div class="form-group">
          <label>Symptoms_1</label>
          <input type="text" id="s2" name="Symptoms_1" class="form-control">
        </div>
        <div class="form-group">
          <label>Symptoms_2</label>
          <input type="text" id="s3" name="Symptoms_2" class="form-control">
        </div>
        <div class="form-group">
          <label>Disease</label>
          <input type="text" id="s4" name="Disease" class="form-control">
        </div>
        <div class="form-group">
          <label>Cure</label>
          <input type="text" id="s5" name="Cure" class="form-control">
        </div>
        </div>
          <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal" name="Submit" onclick="myFunction()" >Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>

  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
<script>
  function myFunction() {
  var name=document.getElementById("s1").value;
  var a= document.getElementById("s2").value;
  var ema=document.getElementById("s3").value;
        var mob=document.getElementById("s4").value;
        var address=document.getElementById("s5").value;
        
        if(name == null || a == null || ema == null || mob == null || address == null)
        {
            alter("Enter All Field");
        }
        else{
            var dataString = 'e1='+ name +'&f1='+ a +'&g2='+ ema +'&g3='+ mob +'&g4='+ address;
   $.ajax({
type: "POST",
url: "table_3.php",
data: dataString,
cache: false,
success: function(result){
 alert("SUCCESSFULLY ADDED");
}
        });
        }
        }
  </script>
</html>
