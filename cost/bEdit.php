<?php include('server.php') ?>
<?php 
   $id=$_GET['id'];
   $user_check_query = "SELECT * FROM book where isbn='$id'";
  $result = mysqli_query($db, $user_check_query);
  while ( $user = mysqli_fetch_assoc($result)) {
     # code...
    $name=$user['name'];
    $isbn=$user['isbn'];
    $author=$user['author'];
    $publisher=$user['publisher'];
    $quantity=$user['quantity'];
    $description=$user['description'];
  
    # code...
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
        <form method="post">
          <div class="form-group  has-feedback">
            <label >Name</label>
            <input type="text" class="form-control" id="Name"  value="<?php echo $name ?>" name="name" >
            <span class="glyphicon glyphicon-book form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label>ISBN</label>
            <input type="text" class="form-control" id="ID" value="<?php echo $isbn  ?>" name="isbn">
            <span class="glyphicon glyphicon-qrcode form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label>author</label>
            <input type="text" class="form-control" id="dept" value="<?php echo $author  ?>" name="author">
            <span class="glyphicon glyphicon-user form-control-feedback" ></span>   
          </div>
           
           <div class="form-group  has-feedback">
            <label>publisher</label>
            <input type="text" class="form-control" id="phone" value="<?php echo $publisher  ?>" name="publisher" >
            <span class="glyphicon glyphicon-globe form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label >Quantity</label>
            <input type="text" class="form-control" id="email" value="<?php echo $quantity  ?>"name="quantity">
            <span class="lyphicon glyphicon-cloud form-control-feedback" ></span>   
          </div>    
           <div class="form-group  has-feedback">
            <label>Description</label>
            <input type="text" class="form-control" id="phone" value="<?php echo  $description  ?>" name="description" >
            <span class="glyphicon glyphicon-list-alt form-control-feedback" ></span>   
          </div>
          <button type="submit" name="bookUpdate" class="btn btn-danger">Confirm</button>
        </form> 
     </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>