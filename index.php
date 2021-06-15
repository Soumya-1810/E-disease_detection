<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/style1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/jquery-ui.min(2).css"/>
  <script >
    $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</head>
<body>
  </script>
  <style>
    body {
    background-color: black;
}
h2
{
  color:white;
}
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
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
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only"></span></a>
      </li>
      <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="human.php">Human Disease Diagnosis</a>
          <a class="dropdown-item" href="#">Plant Disease Diagnosis</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Animal Disease Diagnosis</a>
        </div>-->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li><li class="nav-item">
        <a class="nav-link" href="home.php">Log Out</a>
      </li>

      </ul>
      
</script>
  </div>
</nav>
<!--<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/L8.jpg" alt="Los Angeles" width="1100" height="100">
      <div class="carousel-caption">
        <b><h3 style="color: black;">Benjamin Franklin</h3></b>
        <p style="color: black;">“An ounce of prevention is worth a pound of cure.”</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/L10.jpg" alt="Chicago" width="1100" height="100">
      <div class="carousel-caption">
        <b><h3 style="color: black;">Mokokoma Mokhonoana</h3></b>
        <p style="color: black;">“It is usually impossible to know when you have prevented an accident.”</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/L11.jpg" alt="New York" width="1100" height="100">
      <div class="carousel-caption">
        <b><h3 style="color: black;">Harvey Cushing</h3></b>
        <p style="color: black;">“It is usually impossible to know when you have prevented an accident.”</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<u><h2 class="text-center">About us </h2></u></h3>
	</div>
     <div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/L.jpg" class="img-fluid aboutimg ">
			
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<u><h2 class="display-4"> DISEASE DETECTION</h2></u>
			<p class="py-3">In the medical diagnostic system procedures, elucidation of the etiology of the disease or conditions of interest, that is, what caused the disease or condition and its origin is not entirely necessary. Such elucidation can be useful to optimize treatment, further specify the prognosis or prevent recurrence of the disease or condition in the future.</p>
			<a href="about.php" class="btn btn-success">click for more!!</a>
			
		</div>
	</div>
</section>-->

<section class="my-5">
	<div class="py-5">
		<u><h2 class="text-center">FACILITIES WE PROVIDE: </h2></u>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
			<div class="card" >
          <img class="card-img-top" src="images/L23.jpg" alt="Card image">
            <div class="card-body">
             <h4 class="card-title">HUMAN DISEASE DIAGNOSIS</h4>
              <p class="card-text">In this the disease related to human are treated.</p>
             <a href="Search_disease.php" class="btn btn-primary">Proceed Further...</a>
  </div>
</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-12">
			<div class="card" >
          <img class="card-img-top" src="images/L14.jpeg" alt="Card image">
            <div class="card-body">
             <h4 class="card-title">PLANT DISEASE DIAGNOSIS</h4>
              <p class="card-text">In this the disease related to human are treated.</p>
             <a href="Plant_disease.php" class="btn btn-primary">Proceed Further...</a>
  </div>
</div>
				
			</div><div class="col-lg-4 col-md-4 col-12">
			<div class="card" >
          <img class="card-img-top" src="images/L13.jpeg" alt="Card image">
            <div class="card-body">
             <h4 class="card-title">ANIMAL DISEASE DIAGNOSIS</h4>
              <p class="card-text">In this the disease related to human are treated.</p>
             <a href="Animal_disease.php" class="btn btn-primary">Proceed Further...</a>
  </div>
</div>
				
			</div>
		</div>
	</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>




