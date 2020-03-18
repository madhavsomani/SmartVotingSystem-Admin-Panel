<?php 
	
	//If a post request comes to this script 
	if($_SERVER['REQUEST_METHOD']=='POST'){	
		//getting username password and phone number 
		$username = $_POST['username'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
                $name = $_POST['name'];
                $aadharcard= $_POST['aadharcard'];
		$image = $_POST['image'];
                $vote = "NOT VOTED";
		
		//Importing the db connection script 
		require_once('dbConnect.php');
		
                   $path = "PhotoUpload/$username.png";

                  $actualpath = "http://hntdatabase.16mb.com/$path";

		//Creating an SQL Query 
		$sql = "INSERT INTO androidotp (name,username, password, phone, aadharcard, vote) values ('$name','$username','$password','$phone','$aadharcard','$vote')";
		
		//If the query executed on the db successfully 
		if(mysqli_query($con,$sql)){
                         
                        file_put_contents($path,base64_decode($image));
			echo '{"ErrorMessage":"Success"}';
		}else{
			//printing the failure message in json 
			echo '{"ErrorMessage":"Failure"}';
		}
		
		//Closing the database connection 
		mysqli_close($con);
	}			