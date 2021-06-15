<?php
include 'db_connection.php';
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
      background: url(images/L69.jpg);
    
    }
    td.button
    {
      background:transparent;
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
    </ul>
    <a class="button" href="index.php"><font color="grey">LOGOUT</font></a>
  </div>
</nav><br><br>

 <div class="container">
  <h2><center><u>feedback DATABASE TABLE</u></center></h2><br>
  <table class="table">
 <thead>
      <tr>
      <th><u>ID</u></th>
      <th><u>name</u></th>
      <th><u>email </u></th>          
      <th><u>mobile</u></th>
      <th><u>comments</u></th>
      <th><u>reply</u></th> 
       <th><u>Action</u></th>
       <th></th>
      </tr>
     </thead>
     <tbody>
      <?php
// Attempt select query execution
$sql = "SELECT * FROM feedback ";
if($result = mysqli_query($conn, $sql)){
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['mobile'] . "</td>";
                 echo "<td>" . $row['comments'] . "</td>";
                 echo "<td>" . $row['reply'] . "<td>";
                   
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
      <form action="admin_feedback.php" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label>reply</label>
          <input type="text" id="reply" name="Reply" class="form-control">
        </div>
        </div>
          <div class="modal-footer">
         <button type="submit" class="btn btn-danger" data-dismiss="modal" name="Submit" >Save</button>
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
</html>
<?php 
if(isset($_POST['submit']))
{
$d_name=$_POST['ID'];
$d_spec=$_POST['name'];
$d_address=$_POST['email'];
$d_phone=$_POST['mobile'];
$comments=$_POST['comments'];
$reply=$_POST['reply'];
$sql = "INSERT INTO feedback (reply) VALUES ($reply)";
$run=mysqli_query($conn,$sql);
if($run)
{
  echo "<script>alert('added')</script>";
  echo "<script>window.open('admin_feedback.php','_self')</script>";
}


}

?>