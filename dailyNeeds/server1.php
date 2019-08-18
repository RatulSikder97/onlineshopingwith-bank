<?php
include("server.php");
$cart=json_decode($_POST['cart'],true);
print_r($cart[0]['price']);

$code = $_SESSION['order'];
$email = $_SESSION['email'];
for($i=0;$i<sizeof($cart);$i++)
{
    $name = $cart[$i]['name'];
    $taka = $cart[$i]['price'];
    $count = $cart[$i]['count'];
    mysqli_query($db, "INSERT INTO orderTr(email,name,count,taka,orderId) VALUES ('$email','$name','$count','$taka','$code')");

}

?>