<!DOCTYPE html>
<html>
<head>
  <title>doctor profile</title>
  <style>
    *{
      background-color: black;
      font-family: Algerian;
    }
    .grid {
  display: grid;
  grid-template-columns: repeat(3, 2fr);
  justify-items: center;
  align-items: center;
  grid-gap: -1px;
}
 .grid2
 {
  display: grid;
  grid-template-columns: repeat(3, 2fr);
  justify-items: center;
  align-items: center;
  grid-gap: -1px;
}

.flip-card {
  border-style: hidden;
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 90%;
  text-align: center;
  transition: transform 1.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front,
.flip-card-back {
  position: absolute;
  width: 100%;
  height: 90%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #222e36ef;
  color: white;
  transform: rotateY(180deg);
}
h1,h3
{
  color: white;
  text-align: center;
  font-family: Algerian;
}
h2
{
  color: white;
}
.glow {
  font-size: 40px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px black, 0 0 20px black, 0 0 30px black, 0 0 40px black, 0 0 50px black, 0 0 60px black, 0 0 70px black;
  }
  
  to {
    text-shadow: 0 0 20px blue, 0 0 30px blue, 0 0 40px blue, 0 0 50px blue, 0 0 60px blue, 0 0 60px blue, 0 0 80px blue;
  }
}
</style>
</head>
<body>
    <a class="button" href="Plant_disease.php"><font color="grey">LOGOUT</font></a>

<h1 class="glow"><u>doctor details</u></h1>
<h3 class="glow"><u>Hover over the image below for doctor details:</u></h3>
<h2><u>PLANT NURSERY:-</u></h2>
<section id="team">
  <div class="container">
    <div class="grid">
      <!-- #str heroes -->
      <!-- #abaddon -->
      <?php
      include 'db_connection.php';
             $conn = OpenCon();
             $symptoms="select * from search_doctor_plant ";
              $run=mysqli_query($conn,$symptoms);
              while($row=mysqli_fetch_array($run))
              {

                  $img=$row['image'];
       ?>
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="images/<?php echo($img) ?>" alt="Avatar" style="width:400px;height:300px;" />
          </div>
          <div class="flip-card-back">
            <?php
            
                echo "<b><u><br>DOCTORS NAME:<br></u></b>" .$row["DOCTORS_NAME"]. "<b><u><br>DOCTOR_SPECIALITY:-<br></u></b>" .$row["DOCTOR_SPECIALITY"]. "<b><u><br>ADDRESS:-<br></u></b>" .$row["ADDRESS"]. "<b><u><br>MOBILE:-<br></u></b>" .$row["DOCTORS_PHONE_NO"]."<br>" ;
              
             ?>
          </div>
        </div>
      </div>
      <?php 
        }
       ?>    
     

    </div>
  </div>
  

</section>

</body>
</html>
