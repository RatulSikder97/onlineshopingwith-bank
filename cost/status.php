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
      <h1> Member Status</h1>
      <form method="post">
        <a href="memberManage.php" class="btn btn-danger">Members List</a>
      </form>
    </div>  

  
   <div class="ta" >
      <?php
         $id = $_GET['id'];
         
    
          $query_mem="SELECT * from customer WHERE id='$id'";
          $result1 = mysqli_query($db, $query_mem);
          $d= mysqli_fetch_assoc($result1);
          $accNo= $d['accNo'];

          $cq="SELECT * from transfer WHERE accNo='$accNo'";
          $result2 = mysqli_query($db, $cq);

          $cq1="SELECT * from money WHERE accNo='$accNo'";
          $result3 = mysqli_query($db, $cq1);
          $d3= mysqli_fetch_assoc($result3);
         
          echo "<p> Current Balance : {$d3['taka']}</p>";
          echo "<table class='table table-hover table-responsive table-bordered'>";
          echo "<tr>
                 <th>Acc No</th>
                 <th>Description</th>
                 <th>Amount</th>       
               </tr>";

          while($d2= mysqli_fetch_assoc($result2)){
          echo "<tr>";
            echo "<td>{$d2['accNo']}</td>";
            echo "<td>{$d2['status']}</td>";
            echo "<td>{$d2['taka']}</td>";
          echo "</tr>";}
        ?> 
    </div>

       
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>