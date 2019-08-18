<?php include('server.php') ?>
<?php
  
   $id=$_GET['id'];
   $user_check_query = "SELECT * FROM customer WHERE id='$id'";
  $result = mysqli_query($db, $user_check_query);
  
  while ( $user = mysqli_fetch_assoc($result)) 
  {
    $name=$user['name'];
    $email=$user['email'];
    $address=$user['address'];
    $phone=$user['phone'];
    $accNo=$user['accNo'];
  }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Library Management System : The great tool for library </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 
    
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
        <h1> Update User </h1>
        <form method="post">
          <div class="form-group  has-feedback">
            <label >Name</label>
            <input type="text" class="form-control" id="Name" value='<?php echo $name ?>' name="name" >
            <span class="glyphicon glyphicon-user form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label>Address</label>
            <input type="text" class="form-control" id="address" value="<?php echo $address ?>"  name="address">
            <span class="glyphicon glyphicon-sunglasses form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label>Email</label>
            <input type="text" class="form-control" id="email" value="<?php echo $email ?>" name="email">
            <span class="glyphicon glyphicon-user form-control-feedback" ></span>   
          </div>
           
           <div class="form-group  has-feedback">
            <label>Phone No.</label>
            <input type="text" class="form-control" id="phone" value="<?php echo $phone ?>" name="phone" >
            <span class="glyphicon glyphicon-earphone form-control-feedback" ></span>   
          </div>
         
          <div class="form-group  has-feedback">
            <label >ACC No</label>
            <input type="text" class="form-control" id="accNo" value="<?php echo $accNo ?>" name="accNo">
            <span class="glyphicon glyphicon-envelope form-control-feedback" ></span>   
          </div>    
          <button type="submit" name="update" class="btn btn-danger">Update</button>
        </form> 
     </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>