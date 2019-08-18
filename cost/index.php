<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>R-Bank World most grgossing bank </title>
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
          <a class="navbar-brand navbar-left" style="margin-right: 45%;" href="index.html">R - BANK </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          	<li><a href="index.php">Home</a></li>
            <li><a href="">Membership</a></li>
            <li><a href="">About</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="regForm"  > 
        <h1> Member Login</h1>
        <form method="post" onsubmit="return validateForm();">
          <div class="form-group  has-feedback">
            <label >Account No</label>
            <input type="text" class="form-control" id="accNo" placeholder="Enter Acc No" name="accNo" >
            <span class="glyphicon glyphicon-user form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label>PIN</label>
            <input type="password" class="form-control" id="ID" placeholder="Enter PIN" name="pin">
            <span class="glyphicon glyphicon-lock form-control-feedback" ></span>   
          </div>

          <button type="submit" name="memberLogin" class="btn btn-danger">Login</button>
       </form>
      </div>   

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>