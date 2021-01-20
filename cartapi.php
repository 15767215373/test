<?php
$conn=mysqli_connect("localhost","root","root","info");
mysqli_query($conn,"set names utf8");
$sql="select * from cart";
$res=mysqli_query($conn,$sql);
$cartdata=[];
while($row=mysqli_fetch_assoc($res)){
    $cartdata[]=$row;
}
echo "<pre>";
print_r($cartdata);
?>