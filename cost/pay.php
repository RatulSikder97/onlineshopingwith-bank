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
	
 
        


    <div class="regForm" style="text-align: center;" > 
        <h1> Library Management</h1>
        <form method="POST">
           <a type="submit" name="back" class="btn btn-danger"   href="member.php"  >Back</a>
           
       </form>
  </div>   
  <div class="regForm " > 
        <h1> Member Login</h1>
        <form method="post" onsubmit="return validateForm();">
          <div class="form-group  has-feedback">
            <label >Account No</label>
            <input type="text" class="form-control" id="accNo" placeholder="Enter Acc No" name="accNo" >
            <span class="glyphicon glyphicon-user form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label >Pay code</label>
            <input type="text" class="form-control" id="code" placeholder="Enter order code" name="code" >
            <span class="glyphicon glyphicon-user form-control-feedback" ></span>   
          </div>

        
          <div class="form-group  has-feedback">
            <label >Amount</label>
            <input type="text" class="form-control" id="taka" placeholder="Enter amount in taka" name="taka" >
            <span class="glyphicon glyphicon-user form-control-feedback" ></span>   
          </div>

          <div class="form-group  has-feedback">
            <label>PIN</label>
            <input type="password" class="form-control" id="ID" placeholder="Enter PIN" name="pin">
            <span class="glyphicon glyphicon-lock form-control-feedback" ></span>   
          </div>

          <button type="submit" name="pay" class="btn btn-danger">Login</button>
       </form>
      </div>  
     
     
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html