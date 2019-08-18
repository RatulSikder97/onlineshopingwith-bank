<?php include "server.php"?>
<?php
  if(isset($_GET['confCart']))
  {
    if(!isset($_SESSION['name']))
    {
      echo "<script> alert('You have to login first');</script>";
    }
    else
    {
      header("location:payment.html");
    }

    
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> সারাদিনের যাবতীয় সবকিছু এখানে পাওয়া যাবে</title>
   
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <script src="https://code.jquery.com/jquery-1.11.3.js" integrity="sha256-IGWuzKD7mwVnNY01LtXxq3L84Tm/RJtNCYBfXZw3Je0=" crossorigin="anonymous"></script>

   
</head>
<body>
  <div class="wrapper-wide">
    <div id="header">
      <div id="sidebar" >
        <div class="sidebar-header">
                  <h3>Category</h3>
              </div>

              <ul class="list-unstyled components">
                  
                  <li class="active">
                      <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                      <ul class="collapse list-unstyled" id="homeSubmenu">
                      <li>
	                            <a href="fruit.php">Fruit</a>
	                        </li>
	                        <li>
	                            <a href="veg.php">Fresh Vegitable</a>
	                        </li>
	                        <li>
	                            <a href="fish.php">Fish and Meat</a>
	                        </li>
							            <li>
	                            <a href="grocery.php">Grocery</a>
	                        </li>
							            <li>
	                            <a href="tech.php">Technetian</a>
	                        </li>
                      </ul>
                  </li>
              </ul>
        
      </div>

      <div class="topnav">
        <button class="openbtn" id="sidebarCollapse">☰</button>
        <a href=""> DAILY NEEDS</a>
        
       
        <a href="" style = "float: right"> Needs Help ?</a>
        <a href="login.php" id="log"> Login <i class="fa fa-user"></i> </a>
        <a href="#" id="user" style="display: none;"><?php echo "<a>".$_SESSION["name"]."</a>";?></a>
        <a id="logu" href="index.php?logout='1'" name = 'logout' style="display: none;">Logout</a>
        
        <!--Login user subtab-->
        <?php 
        if (isset($_SESSION["name"])) {
        $hide = 'log';
        $show = 'user';
        $show2 = 'logu';
        echo "<script type=\"text/javascript\">document.getElementById('".$hide."').style.display = 'none';</script>";
        echo "<script type=\"text/javascript\">document.getElementById('".$show."').style.display = 'block';</script>";
        echo "<script type=\"text/javascript\">document.getElementById('".$show2."').style.display = 'block';</script>";
           }
             ?>
       
        <a href="finalcart.php" > Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>

      </div>
    </div>

    <div id="content">
     
        
      <div class="regForm"  > 
				<h1> Payment</h1>
				<form method="post" >
					<div class="form-group  has-feedback">
					<label >Amount </label>
					<input type="text" class="form-control" value="<?php echo $_SESSION["taka"]; ?>  TAKA" disabled >

					</div>

					<div class="form-group  has-feedback">
					<label>Order Code</label>
          <input type="text" class="form-control" value="<?php echo $_SESSION["order"]; ?> " disabled >

					</div>
          <div class="form-group  has-feedback">
					<label>TNX ID</label>
          <input type="text" class="form-control" placeholder = "Enter TNX ID " name = "tnxId">

					</div>

					<button type="submit" name="cPay" class="btn btn-danger">Confirm Payment</button>
					
				</form>
			</div>         
    </div>
   
    </div>
    
    

<script>
$(document).ready( function () {
 
 loadCart();
 
 $.ajax({
       url:'server1.php',
       method:'post',
       data:{cart : JSON.stringify(cart)},
       success:function(res)
       {
         console.log(res);
       }


   })
    var cart =[]
   function loadCart()
    {
      cart = JSON.parse(localStorage.getItem("shoppingCart"));

    }
    //clearCart()
    function clearCart()
    {
      cart = [];
      saveCart();
    }function saveCart()
    {
      localStorage.setItem("shoppingCart",JSON.stringify(cart));
    }
   
    clearCart()

});
</script>






  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });
        });
    </script>
</body>
</html>