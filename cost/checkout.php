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
            <li><a href="libraryManager.php">Admin Login</a></li>
            <li><a href="memberRegistration.php">Membership</a></li>
            <li><a href="">View Books</a></li>
            <li><a href="">About</a></li>
          </ul>

          <!-- <form class="navbar-form navbar-right" action="">
		      <div class="form-group">
		        <input type="text" class="form-control" placeholder="Search">
		      </div>
              <button type="submit" class="btn btn-default">Search</button>
          </form> -->
        </div>
      </div>
    </nav>

        <!--Reg from-->
     <div class="regForm"  > 
        <h1> Registration </h1>
        <form method="post" onsubmit="return validateForm();">
          <div class="form-group  has-feedback">
            <label >Student ID</label>
            <input type="text" class="form-control" id="Name" placeholder="Enter Student ID" name="sid" >
            <span class="glyphicon glyphicon-book form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label>ISBN</label>
            <input type="text" class="form-control" id="ID" placeholder="Enter your ISBN No" name="isbn">
            <span class="glyphicon glyphicon-qrcode form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label>Issue Date</label>
            <input type="date" class="form-control" id="dept" placeholder="Enter  date: yyyy-mm-dd" name="issue">
            <span class="glyphicon glyphicon-calender form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label>Deadline</label>
            <input type="date" class="form-control" id="dept" placeholder="Enter Deadline date: yyyy-mm-dd" name="deadline">
            <span class="glyphicon glyphicon-user form-control-feedback" ></span>   
          </div>

          <button type="submit" name="checkOut" class="btn btn-danger">Check out</button>
        </form> 
     </div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>