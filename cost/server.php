<?php

session_start();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'bank');

function getToken($length,$code){
	$token = "";
	$codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ12345678@";
	
	
	$max = strlen($codeAlphabet);
	$max1 = strlen($code); // edited

   for ($i=0; $i < $length/2-3; $i++) {
	$token .= $codeAlphabet[random_int(0, $max-1)];
	
   }
   
   for ($i=$length/2-3; $i < $length; $i++) {
	
	$token .= $code[random_int(0, $max1-1)];
   }
   

   return $token;
}
// REGISTER USER
if (isset($_POST['reg'])) {

	// receive all input values from the form
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$address = mysqli_real_escape_string($db, $_POST['address']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$accNo = mysqli_real_escape_string($db, $_POST['accNo']);
	$pin = mysqli_real_escape_string($db, $_POST['pin']);
	$pin_2 = mysqli_real_escape_string($db, $_POST['pin_2']);
	

	// a user already exist  or not
	$user_check_query = "SELECT * FROM customer WHERE accNo='$accNo' OR email='$email' ";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);
    
    if ($user) 
    {
    	if($user['email']==$email)
    	{
           echo "<script> alert('already have an account with this email')</script>";
    	}
    }
    else
	{
       
	   $query = "INSERT INTO customer (name, address, phone ,email,accNo,pin)
		VALUES('$name', '$address', '$phone','$email','$accNo','$pin')";
    	mysqli_query($db, $query);
    	header("location: memberManage.php");
	}	
}


if (isset($_POST['memberLogin'])) {
    
	$accNo = mysqli_real_escape_string($db, $_POST['accNo']);
	
	$pin = mysqli_real_escape_string($db, $_POST['pin']);
	$query_mem="SELECT * from customer where accNo = '$accNo' ";
	$resu = mysqli_query($db, $query_mem);
	$d= mysqli_fetch_assoc($resu);
	$id = $d['id'];
    
    
    if(($d['pin']===$pin) && ($d['accNo']===$accNo))
    {
	   echo "<script> alert('login success') </script>" ;
	   $_SESSION['id']=$id;
       header("location: member.php?id=$id");
    }
    else
    {
		
    	echo "<script> alert('".getToken(12,"22334")."')</script>";
    }	
}


if (isset($_POST['logout'])) {
	  session_abort();
	  echo '<script> console.log("55565"); </script>';
	  header("location: index.php");
	 
	  
}

//member update

if(isset($_POST['update']))
{
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$address = mysqli_real_escape_string($db, $_POST['address']);
	$accNo = mysqli_real_escape_string($db, $_POST['accNo']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$email = mysqli_real_escape_string($db, $_POST['email']);

   
	$query_mem="UPDATE customer SET name='$name',address='$address',phone='$phone',email='$email',accNo = '$accNo' where  accNo = '$accNo'";
	 mysqli_query($db, $query_mem);
     header('location:memberManage.php');
}

//sendmoney
if(isset($_POST['send']))
{
	$accNo = mysqli_real_escape_string($db, $_POST['accNo']);
	$taka = mysqli_real_escape_string($db, $_POST['taka']);

	$user_check_query = "SELECT * FROM money WHERE accNo='$accNo' ";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);
	
	
    $id = $_SESSION['id'];
	$user_check_query1 = "SELECT * FROM customer WHERE id='$id' ";
	$result1 = mysqli_query($db, $user_check_query1);
	$user1 = mysqli_fetch_assoc($result1);

	$acc1 = $user1['accNo'];

	$user_check_query2 = "SELECT * FROM money WHERE accNo='$acc1' ";
	$result2 = mysqli_query($db, $user_check_query2);
	$user2 = mysqli_fetch_assoc($result2);

	 
	$tnx=getToken(12,$acc1);
	$tnxQ = mysqli_query($db,"SELECT * FROM transfer WHERE accNo='$acc1' ");
	// $tnxR = mysqli_fetch_assoc($tnxQ);

	while($tnxR = mysqli_fetch_assoc($tnxQ))
	{
		if($tnxR['tnxId']===$tnx){
			$tnx=getToken(12,$acc1);
		}
	}

	$m = (int)$user['taka']+ (int) $taka;
	$query_mem="UPDATE money SET taka='$m' where accNo = '$accNo'";
	 mysqli_query($db, $query_mem);

	 $query = "INSERT INTO transfer (accNo, taka, status,sender,tnxId)
		VALUES('$accNo', '$taka', 'Recieved','$acc1','$tnx')";
    	mysqli_query($db, $query);

	
	 
	 $m1 = (int)$user2['taka']-(int)$taka;
	 $query_mem1="UPDATE money SET taka='$m1' where accNo = '$acc1'";
	  mysqli_query($db, $query_mem1);

      $query1 = "INSERT INTO transfer (accNo, taka, status,sender,tnxId)
		VALUES('$acc1', '$taka', 'Send','$accNo','$tnx')";
		mysqli_query($db, $query1);

		header('location:member.php');
		

}

//paymoney
if(isset($_POST['pay']))
{
	$accNo = mysqli_real_escape_string($db, $_POST['accNo']);
	$taka = mysqli_real_escape_string($db, $_POST['taka']);
	$code = mysqli_real_escape_string($db, $_POST['code']);
	$pin = mysqli_real_escape_string($db, $_POST['pin']);

	
	
	
    $id = $_SESSION['id'];
	$user_check_query1 = "SELECT * FROM customer WHERE id='$id' ";
	$result1 = mysqli_query($db, $user_check_query1);
	$user1 = mysqli_fetch_assoc($result1);

	$acc1 = $user1['accNo'];

	if($user1['pin']===$pin)
	{
		$user_check_query = "SELECT * FROM money WHERE accNo='$accNo' ";
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);

	

		$user_check_query2 = "SELECT * FROM money WHERE accNo='$acc1' ";
		$result2 = mysqli_query($db, $user_check_query2);
		$user2 = mysqli_fetch_assoc($result2);


		$tnx=getToken(12,$code);
		$tnxQ = mysqli_query($db,"SELECT * FROM pay WHERE accNo='$acc1' ");
		// $tnxR = mysqli_fetch_assoc($tnxQ);

		while($tnxR = mysqli_fetch_assoc($tnxQ))
		{
		if($tnxR['tnxId']===$tnx){
		$tnx=getToken(12,$code);
		}
		}

		$m = (int)$user['taka']+ (int) $taka;
		$query_mem="UPDATE money SET taka='$m' where accNo = '$accNo'";
		mysqli_query($db, $query_mem);

		$query = "INSERT INTO payment (accNo, taka,sender,orderId,tnxId)
		VALUES('$accNo', '$taka', '$acc1','$code','$tnx')";
		mysqli_query($db, $query);



		$m1 = (int)$user2['taka']-(int)$taka;
		$query_mem1="UPDATE money SET taka='$m1' where accNo = '$acc1'";
		mysqli_query($db, $query_mem1);

		

		header('location:member.php');
	}
	else
	{
		echo "<script>alert('Give Genuine Pin')</script>";
	}

}



//delete member
if(isset($_POST['mdel']))
{
	
	$id = mysqli_real_escape_string($db, $_POST['did']);
	$query_mem="DELETE  FROM customer WHERE id = '$id' ";
     mysqli_query($db, $query_mem);
     header('location: memberManage.php');

    system('net stop "MySQL"'); /* STOP */
    system('net start "MySQL"'); /* START */
    
}




?>