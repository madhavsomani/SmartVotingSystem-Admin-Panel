<?php 
	
	//If a post request comes to this script 
	if($_SERVER['REQUEST_METHOD']=='POST'){	
		//getting username password and phone number 
		$username = $_POST['username'];
                $vote = $_POST['votepartyname'];
		
		
		//Importing the db connection script 
		require_once('dbConnect.php');
		
            
            //Verify
		$result = mysqli_query($con,"SELECT vote FROM androidotp WHERE username='$username' LIMIT 1");
                $row = $result->fetch_assoc();
                
		//If the query executed on the db successfully 
		if(($row['vote'])!="NOT VOTED"){
                        echo '{"ErrorMessage":"voted"}';
		}else{
			
		   //Creating an SQL Query 
		   $sql = "UPDATE androidotp SET vote='$vote' WHERE username='$username'";
		
		   //If the query executed on the db successfully 
	   	      if(mysqli_query($con,$sql)){
                        
	             	echo '{"ErrorMessage":"Success"}';
	         	}else{
			//printing the failure message in json 
			echo '{"ErrorMessage":"Failure"}';
		      }

		}

		//Closing the database connection 
		mysqli_close($con);
	}						