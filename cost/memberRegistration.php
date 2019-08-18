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
        </div>
      </div>
    </nav>
    
    <!--Reg from-->
     <div class="regForm"  > 
        <h1>Create An Account</h1>
        <form method="post" onsubmit="return validateForm();">
          <div class="form-group  has-feedback">
            <label >Name</label>
            <input type="text" class="form-control" id="Name" placeholder="Name" name="name" >
            <span class="glyphicon glyphicon-user form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label>Address</label>
            <input type="text" class="form-control" id="address" placeholder="Enter Adress" name="address">
            <span class="glyphicon glyphicon-sunglasses form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label>Phoine No.</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
            <span class="glyphicon glyphicon-user form-control-feedback" ></span>   
          </div>
           

          <div class="form-group  has-feedback">
            <label >E-mail</label>
            <input type="E-mail" class="form-control" id="email" placeholder="Enter your e-mail" name="email">
            <span class="glyphicon glyphicon-envelope form-control-feedback" ></span>   
          </div> ]

          <div class="form-group  has-feedback">
            <label >Account No</label>
            <input type="text" class="form-control" id="accNo" placeholder="" name="accNo">
            <span class="glyphicon glyphicon-envelope form-control-feedback" ></span>   
          </div> 

            <div class="form-group  has-feedback">
            <label >PIN</label>
            <input type="password" class="form-control" id="pin"  name="pin">
            <span class="glyphicon glyphicon-envelope form-control-feedback" ></span>   
          </div>

            

          <button type="submit" name="reg" class="btn btn-danger">Create Account</button>
        </form> 
     </div>
      

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>