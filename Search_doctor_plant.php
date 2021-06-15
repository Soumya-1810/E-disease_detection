<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  margin: 0;
  padding: 50;
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("images/L32.jpg");

  min-height: 680px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 470px;
  bottom: 05px;
  margin: 100px;
  max-width: 500px;
  padding: 20px;
  background-color: navy blue;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
  font-family: Algerian;
}

/* Set a style for the submit button */
.btn {
  background-color: black;
  color: white;
  padding: 22px 24px;
  border: solid black;
  cursor: pointer;
  width: 30%;
  opacity: 0.8;
  font-family: Algerian;
}

.btn:hover {
  opacity: 1;
}
h2
{
  font-size: 50;
  background-color: black;
  color: white;
  font-family: Algerian;
}
h1
{
  font-family: Algerian;
}
#SYMPTOMS
{
   width: 100%;
  background: grey;
  padding: 15px;
  color: #000;
  margin: 5px 0 22px 0;
  border: none;
  cursor: pointer;
  font-family: Algerian;
}
div4
{
  
  padding: 40px; 
  width: 340px;
  resize: vertical;
  overflow: auto;
}
table.center {
    margin-left: auto;
    margin-right: auto;
  }
 table
     {
          border-collapse: separate;
          border-spacing: 0 25px;
          
      }
  th{
         background-color: black;
         font-size: 22px;
         color: white;
    }
  th,td
  {
        width: 200px;
        text-align: center;
        border: 1px solid white;
        padding: 10px;
        color: white;
        background-color: black;
  } 
  td{
    font-size: 15px;
  }
  p
  {
    background-color: black;
    color: white;
    font-family: Courier NewS;
      } 
</style>
</head>
<body>

<b><u><center><h2> SPECIALIST DOCTOR'S DETAILS ACCORDING TO DISEASE</h2></center></u></b>
<div class="bg-img">
  <form action="/action_page.php" class="container">
    <b><u><center><h1>DOCTOR DETAILS</h1></center></u></b><br>
     <div1 class="dd">
    <label for="DOCTOR"><u><b><h1>DISEASES:-</h1></b></u></label>
    <select name="SYMPTOMS" id="SYMPTOMS">
    <option value="none" selected disabled hidden> Select diease</option>
    </select>
     <button type="submit" class="btn">SUBMIT</button>
    </div1><br>
     <div4 class="dd">
    <?php
$link = mysqli_connect("localhost", "root", "", "login");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM profile ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='center'>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>USERNAME</th>";
                echo "<th>E-mail</th>";
                echo "<th>HUMAN DISEASE</th>";
                echo "<th>PLANT DISEASE</th>";
                echo "<th>ANIMAL DISEASE</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['USERNAME'] . "</td>";
                echo "<td>" . $row['E-MAIL'] . "</td>";
                echo "<td>" . $row['HUMAN DISEASE'] . "</td>";
                 echo "<td>" . $row['PLANT DISEASE'] . "</td>";
                  echo "<td>" . $row['ANIMAL DISEASE'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>   

  </div4>
  </form>
</div>

<p>This example creates a form on a responsive image. Try to resize the browser window to see how it always will cover the whole width of the screen, and that it scales nicely on all screen sizes.</p>

</body>
</html>
