<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Library Management System : The great tool for library </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	


    
</head>
<body>
	
 
        


    <div class="regForm" style="text-align: center;" > 
        <h1> Library Management</h1>
        <form method="POST">
           <button type="submit" name="about" class="btn btn-danger" >About Me</a>
           <button type="submit" name="books" class="btn btn-danger" onclick="location.href='#'">Deposit</button>
           <a type="submit" name="send" class="btn btn-danger" href = 'send.php'>Send Money</a>
           <a type="submit" name="pay" class="btn btn-danger" href='pay.php'>Payment</a>
           <button type="submit" name="change" class="btn btn-danger" onclick="location.href='checkout.php'">Apply for Change</button>
           <button type="submit" name="logout" class="btn btn-danger" onclick="location.href='index.php'">Logout</button>
       </form>
  </div>   

  <div class="ta">
  <?php
       $id=$_SESSION['id'];
       if (isset($_POST['about'])) {
         

          $query_mem="SELECT * from customer where id='$id'";
          $resu = mysqli_query($db, $query_mem);
          $d= mysqli_fetch_assoc($resu);
         
          echo '<div class="row">';
          echo '<div class="col-sm-5" background-color:lightblue;>';
          echo '<p>Name</p> </div>';
          echo '<div class="col-sm-3 col-md-6" style="background-color:gray;">
              <p>'.$d["name"].'</p></div>';  
          echo '</div>';

          echo '<div class="row">';
          echo '<div class="col-sm-5" background-color:lightblue;>';
          echo '<p>Email</p> </div>';
          echo '<div class="col-sm-3 col-md-6" style="background-color:gray;">
              <p>'.$d["email"].'</p></div>';  
          echo '</div>';

          echo '<div class="row">';
          echo '<div class="col-sm-5" background-color:lightblue;>';
          echo '<p>Adress</p> </div>';
          echo '<div class="col-sm-3 col-md-6" style="background-color:gray;">
              <p>'.$d["address"].'</p></div>';  
          echo '</div>';

          echo '<div class="row">';
          echo '<div class="col-sm-5" background-color:lightblue;>';
          echo '<p>ACC No.</p> </div>';
          echo '<div class="col-sm-3 col-md-6" style="background-color:gray;">
              <p>'.$d["accNo"].'</p></div>';  
          echo '</div>';
           
          }?> 


      </div> 

     
     
     
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html