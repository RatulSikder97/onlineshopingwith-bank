<?php include "server.php"?>



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
        <div class="search-container">
          <form action="/action_page.php">
            <input class="form-control" type="text" placeholder="Search.." name="search">
            <button  type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>

        <a href=""> Needs Help ?</a>
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
      
      
        <div id="table-title">
          <p>Order Detail</p>
        </div>


      <div id="otable " >
        <p style="text-align: center">
          <?php
            
    
                        
            if(isset($_POST['orderList'])){
            

                if(!isset($_SESSION['name']))
    {
      echo "<script> alert('You have to login first');</script>";
    }
    else{
            $email=$_SESSION['email'];
            $results = mysqli_query($db, "select orderId,count(orderId) from ordertr where email ='$email' group by orderId ");
            $order = array();
            while($user = mysqli_fetch_assoc($results))
            {
                array_push($order,$user['orderId']);
            }
            
            for($i=0;$i<sizeof($order);$i++)
            {
            echo "<table class='table table-bordered'  >";
            echo "<tr><td><b>OrderId: {$order[$i]}</b></td></tr>";
            echo "<tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            </tr>";
            
            $results1 = mysqli_query($db, "select name,count,taka from ordertr where orderId = '$order[$i]'");
            while($user1 = mysqli_fetch_assoc($results1))
            {
                echo "<tr>
                        <td>{$user1['name']}</td>
                        <td>{$user1['count']}</td>
                        <td>{$user1['taka']}</td>
                    </tr>";
            }
            echo "</table></br></br>";
                

            }
        }}
            
          ?>

        
        </p>
         
     </div>
    <form method="post">
        <p style="text-align: center"><button class = "pbtn btn btn-success" name='orderList'>All Orders</button></p>
        
    </form>
    </div>
    
    







<script type="text/javascript">
  
  $(document).ready( function () {
 
  loadCart();
  
  


});


     function displayCart()
     {
      var cartArray = listCart();
      var output ='<tr><th style="width:30%">Product</th><th style="width:10%">Price</th><th style="width:8%">Quantity</th><th style="width:10%" class="text-center">Subtotal</th><th style="width:10%" class="text-center">Action</th></tr>';
      var total=0;
      for(i in cartArray)
      {     
            output +="<tr> <td >"+cartArray[i].name+"</td> <td>"+cartArray[i].price+'</td> <td><button  class="add" data-name="'+cartArray[i].name +'" >+</button>  '+cartArray[i].count+'  <button  class="sub btn btn-danger" data-name="'+cartArray[i].name +'" >-</button>'+"</td> <td>"+cartArray[i].count*cartArray[i].price+'</td> <td><button  class="del btn btn-danger" data-name="'+cartArray[i].name +'" >x</button></td></tr>  ';
            total +=cartArray[i].count*cartArray[i].price;
      }
      document.cookie = "taka"+" ="+total;
      output += "<tr ><td colspan='3' > Total Price </td><td> "+total+"</td></tr>";
      $(".show").html(output);
     }

     $(".show").on("click",".add",function(event){
          var name = $(this).attr("data-name");
          updateCount(name);
         location.reload();
     })
     $(".show").on("click",".sub",function(event){
          var name = $(this).attr("data-name");
          removeItemFromCart(name);
         location.reload();
     })
      $(".show").on("click",".del",function(event){
          var name = $(this).attr("data-name");
          
          removeItemFromCartAll(name);
         location.reload();
     })
  

 
  //********************************
  //functions
  var cart = [];

  var Item = function(name,price,count){
        this.name = name
        this.price = price
        this.count = count
  };
     
    //addItemToCart()
    function addItemToCart(name, price, count)
    {
      for (var i in cart) {
        if(cart[i].name === name)
        {
          cart[i].count +=count;
          return;
        }
        
      }
      var item = new Item(name, price, count);
      cart.push(item);
      saveCart();     
      
    }
    function updateCount(name){
      for (var i in cart) {
        if(cart[i].name === name)
        {
          cart[i].count +=1;
          
        }
    }
    saveCart(); 
    }
    
    
    //removeItemFromCart()
    function removeItemFromCart(name)
    {
       for (var i in cart) {
        if(cart[i].name === name)
        {
          cart[i].count --;
          if (cart[i].count===0) {
            cart.splice(i,1);
          }
          
          break;
        }
        
      }
      saveCart();
    }
    

    //removeItemFromCartAll()
    function removeItemFromCartAll(name)
    {
      for (var i in cart) {
        if(cart[i].name === name)
        {
          cart.splice(i,1);
          break;
        }
        
      }
      saveCart();
    }

    
   
   
    //clearCart()
    function clearCart()
    {
      cart = [];
      saveCart();
    }


    //countCart()--> return total items no
    function countCart(){
      var totalCount =0;
      for(var i in cart)
      {
          totalCount += cart[i].count;   
      }
      return totalCount;
    }

 

    //totalCart()-->return total cost
    function totalCart(){
      var totalCost =0;
      for(var i in cart)
      {
          totalCost += cart[i].count * cart[i].price;   
      }
      return totalCost;
    }
    
    
    //list cart --> array of all items
    function listCart()
    {
      var cartCopy =[];
      for(var i in cart)
      {
        var item = cart[i];
        var itemCopy = {};
        for(var p in item)
        {
          itemCopy[p]=item[p];
        } 
        cartCopy.push(itemCopy)
      }
      return cartCopy;
    }


    //saveCart()
    function saveCart()
    {
      localStorage.setItem("shoppingCart",JSON.stringify(cart));
    }
   

    //loadCart()
    function loadCart()
    {
      cart = JSON.parse(localStorage.getItem("shoppingCart"));

    }
    
    
   
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