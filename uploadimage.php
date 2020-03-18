<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $image = $_POST['image'];

 $username= $_POST['username'];
 
 require_once('dbConnect.php');
 
 $path = "PhotoUpload/$username.png";
 
 $actualpath = "http://hntdatabase.16mb.com/$path";
 
 $sql = "INSERT INTO userimage (username,imagepath) VALUES ('$username','$actualpath')";
 
 if(mysqli_query($con,$sql)){
 file_put_contents($path,base64_decode($image));
 echo "Successfully Uploaded";
 }
 
 mysqli_close($con);
 }else{
 echo "Error";
 }