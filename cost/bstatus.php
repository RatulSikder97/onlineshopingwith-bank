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
<body style="background-color: rgba(0,255,255,.8);">
	
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
            <li><a href="">Admin Login</a></li>
            <li><a href="memberRegistration.php">Membership</a></li>
            <li><a href="">View Books</a></li>
            <li><a href="">About</a></li>
          </ul>

        
        </div>
      </div>
    </nav>

    <div class="regForm"  style="text-align: center;" > 
        <h1> Member Management</h1>
        <form method="post">
          <a href="memberManage.php" class="btn btn-danger">Members List</a>
      
         <!-- <button type="submit" name="update" class="btn btn-danger" onclick="">Update</button>
         <button type="submit" name="remove" class="btn btn-danger" onclick="">Remove Member</button> -->
       </form>
      </div>  

  
     <div class="ta" >
      <?php
         $id = $_GET['id'];
         echo "<table class='table table-hover table-responsive table-bordered'>";
            echo "  <tr>
          <th>Name</th>
          <th>isbn</th>
          <th>Total Quantity</th>
          </tr>";
            
          $query_mem="SELECT * from book WHERE isbn='$id'";
          $query_mem2="SELECT * FROM checkout WHERE isbn='$id'";
          $result1 = mysqli_query($db, $query_mem);
          $result2 = mysqli_query($db, $query_mem2);
          
          while($d= mysqli_fetch_assoc($result1)){
            echo "<tr>";
              echo "<td>{$d['name']}</td>";
              echo "<td>{$d['isbn']}</td>";
              echo "<td>{$d['quantity']}</td>";
            echo "</tr>";}
        ?>
           
     </div>

       
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>