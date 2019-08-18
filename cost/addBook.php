<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Library Management System : The great tool for library </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script>
    function validateForm()
    {
        var error="";
        if (document.getElementById("Name").value=="")
        {
            error+="Enter your Name\n";
            document.getElementById("Name").style.borderColor="RED";
        }
        if (document.getElementById("ID").value=="")
        {
            error+="Enter your ID no\n";
            document.getElementById("ID").style.borderColor="RED";
        }
        if (document.getElementById("dept").value=="")
        {
            error+="Enter your Department\n";
            document.getElementById("dept").style.borderColor="RED";
        }
        if (document.getElementById("phone").value=="")
        {
            error+="Enter your phone\n";
            document.getElementById("phone").style.borderColor="RED";
        }
        if (document.getElementById("email").value=="")
        {
            error+="Enter your email\n";
            document.getElementById("email").style.borderColor="RED";
        }
        
        if (error!="") {
          alert(error);
          return false;
        }
    }
    </script>
    
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
           <li><a href="libraryManager.php">Admin</a></li>
            <li><a href="">Membership</a></li>
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
            <label >Name</label>
            <input type="text" class="form-control" id="Name" placeholder="Name" name="name" >
            <span class="glyphicon glyphicon-book form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label>ISBN</label>
            <input type="text" class="form-control" id="ID" placeholder="Enter your ISBN No" name="isbn">
            <span class="glyphicon glyphicon-qrcode form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label>author</label>
            <input type="text" class="form-control" id="dept" placeholder="Enter authors name" name="author">
            <span class="glyphicon glyphicon-user form-control-feedback" ></span>   
          </div>
           
           <div class="form-group  has-feedback">
            <label>publisher</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter Publisher Name" name="publisher" >
            <span class="glyphicon glyphicon-globe form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label >Quantity</label>
            <input type="text" class="form-control" id="email" placeholder="Enter Quantity" name="quantity">
            <span class="lyphicon glyphicon-cloud form-control-feedback" ></span>   
          </div>    
           <div class="form-group  has-feedback">
            <label>Description</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter Description" name="description" >
            <span class="glyphicon glyphicon-list-alt form-control-feedback" ></span>   
          </div>
          <button type="submit" name="addBook" class="btn btn-danger">Add</button>
        </form> 
     </div>
      

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>