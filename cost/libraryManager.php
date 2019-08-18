<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Library Management System : The great tool for library </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">  
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand navbar-left" style="margin-right: 45%;" href="index.html">E-Library</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          	<li><a href="index.php">Home</a></li>
            <li><a href="libraryManager">Admin</a></li>
            <li><a href="memberRegistration.php">Membership</a></li>
            <li><a href="bookManage.php">View Books</a></li>
            <li><a href="">About</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="regForm" style="text-align: center;" > 
        <h1> Library Management</h1>
        
         <button type="submit" name="memberManage" class="btn btn-danger" onclick="location.href='memberManage.php'">Member Manager</button>
         <button type="submit" name="bookManage" class="btn btn-danger" onclick="location.href='bookManage.php'">Book Manager</button>
         <button type="submit" name="checkout" class="btn btn-danger" onclick="location.href='checkin.php'">Check In</button>
         <button type="submit" name="checkin" class="btn btn-danger" onclick="location.href='checkout.php'">Check Out</button>
         <button type="submit" name="checkin" class="btn btn-danger" onclick="location.href='index.php'">Log Out</button>
       
      </div>   

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>