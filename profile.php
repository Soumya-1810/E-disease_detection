<!DOCTYPE html>
<html>
<head>
	<title>PROFILE DETAILS</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
    
*{
  margin: 0;
  padding: 20;
  font-family: Algerian;
  
 }
.div {
  width:300px;
  margin: auto;
  border: 1px solid black;
  padding-top: 70px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
}
.container {
  max-width: 500px;
  margin: auto;
  background: black;
  padding: 10px;
  background-position: center;
}

  </style>

</head>
<body>
	<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Search Disease</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Search Doctor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Logout</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
    <section class="section-default">
      <h1>PROFILE DETAILS</h1>
      <form action="register.php" method="post">
        <input type="text" name="user" placeholder="Username"><br>
        <input type="text" name="e-mail" placeholder="E-mail"><br>
        <input type="password" name="pwd" placeholder="Password"><br>
    </section>
  </div>
</body>
</html>