<?php
session_start();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', );
mysqli_select_db($db ,'dailyneed');


// REGISTER USER
if (isset($_POST['regBtn'])) {
  // receive all input values from the form
  $name =  mysqli_real_escape_string($db,$_POST['name']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $address = mysqli_real_escape_string($db,$_POST['address']);
  $phone = mysqli_real_escape_string($db,$_POST['phone']);
  $password_1 = mysqli_real_escape_string($db,md5($_POST['password_1']));
  $password_2 = mysqli_real_escape_string($db,md5($_POST['password_2']));

  
  if($password_1 !== $password_2)
  {
  	echo "<script> alert('Passwords don't match. Enter Same Passwords.')</script>";
  }
  else{

  $insQuery = "INSERT INTO customer(name,email,address,phone,password_1,password_2) VALUES ('$name','$email','$address','$phone','$password_1','$password_2')";
  if(mysqli_query($db, $insQuery))
  {
    	
    header("Location:index.php");
  }
}

}



if(isset($_POST['loginBtn'])){

  $email =  mysqli_real_escape_string($db,$_POST['email']);
  $password_1 = mysqli_real_escape_string($db,$_POST['password']);

  $password = md5($password_1);
    $query = "SELECT * FROM customer WHERE email='$email' AND password_1='$password'";
    $results = mysqli_query($db, $query);

    $user = mysqli_fetch_assoc($results);
   
    
    if(mysqli_num_rows($results) == 1){
      
       $_SESSION["name"] =  $user["name"];
       $_SESSION["email"] =  $user["email"];
       header("Location:index.php");
      
    }
}





if(isset($_POST['confCart']))
  {
    if(!isset($_SESSION['name']))
    {
      echo "<script> alert('You have to login first');</script>";
    }
    else
    {

      
      
      $code=getCode(8,$_SESSION['name'][0]);
      $email = $_SESSION["email"];
      $tnxQ = mysqli_query($db,"SELECT * FROM topay ");
      // $tnxR = mysqli_fetch_assoc($tnxQ);
      $taka =  $_COOKIE['taka'];
      while($tnxR = mysqli_fetch_assoc($tnxQ))
      {
      if($tnxR['code']===$code){
        $code=getCode(8,$_SESSION['name'][0]);
      }
      }
     
      $insPay = "INSERT INTO topay(email,taka,code) VALUES ('$email','$taka','$code')";
      if(mysqli_query($db, $insPay))
      {
       
        $_SESSION['order'] = $code;
        $_SESSION['taka']  = $taka;
        header("Location:payment.php");
      }
      
    }

  }

  
if(isset($_POST['cPay'])){
////
  $tnx =  mysqli_real_escape_string($db,$_POST['tnxId']);

  echo $tnx;

  $or = $_SESSION['order'];
  $query = "SELECT tnxId,orderId,taka FROM bank.payment WHERE orderId = '$or'";
  $results = mysqli_query($db, $query);

  $user = mysqli_fetch_assoc($results);
  //echo "<script> alert('".$user['tnxId']."')</script>" ;

  $query1 = "SELECT code,taka FROM dailyneed.topay WHERE code = '$or'";
  $results1 = mysqli_query($db, $query1);

  
  if($results){
      if($tnx === $user['tnxId'])
      {
        echo "<script>alert('Payment Success')</script>";
      }
  }
  
}






?>
