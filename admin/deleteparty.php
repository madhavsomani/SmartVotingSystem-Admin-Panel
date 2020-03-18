<?php

  require_once('dbConnect.php');
 


if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysqli_query($con,"delete from partydata where id='$id'");
if($query1)
{
header('location:partyinformation.php');
}
}
?>