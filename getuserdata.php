<?php 
 
 if($_SERVER['REQUEST_METHOD']=='GET'){
 
 $username = $_GET['username'];
 
 require_once('dbConnect.php');
 
 $sql = "SELECT * FROM androidotp WHERE username='".$username."'";
 
 $r = mysqli_query($con,$sql);
 
 $res = mysqli_fetch_array($r);
 
 $result = array();
 
 array_push($result,array(
  "name"=>$res['name'],
  "phone"=>$res['phone'],
  "aadharcard"=>$res['aadharcard'])
 );
 
 echo json_encode(array("result"=>$result));
 
 mysqli_close($con);
 
 }