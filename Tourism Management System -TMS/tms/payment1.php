<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"tms");

$cardname=$_POST['cardname'];
$cardnumber=$_POST['cardnumber'];
$expmonth=$_POST['expmonth'];
$expyear=$_POST['expyear'];
$cvv=$_POST['cvv'];
$qr="insert into payment values('','$cardname','$cardnumber','$expmonth','$expyear','$cvv')";
mysqli_query($con,$qr); 
if($qr)
{
 echo "<script>alert('sucesss');</script>";
 header('location:payment.php');
}
else
{    
	echo "<script>alert('Unsuccess');</script>";
}
?>