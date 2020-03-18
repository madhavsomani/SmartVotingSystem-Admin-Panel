<html>
   
   <head>
      <meta charset="UTF-8">
      <title>Update a Record in MySQL Database</title>
     <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
      <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">
   </head>
   
   <body>
      <?php
       if($_SERVER['REQUEST_METHOD']=='POST'){	

                 //Importing the db connection script 
		require_once('dbConnect.php');
		
		//getting username password and phone number 
		$partyname= $_POST['partyname'];
		
		$partydiscription= $_POST['partydiscription'];
                 
                  $filetmp = $_FILES["file_img"]["tmp_name"];
	          $filename = $_FILES["file_img"]["name"];
	          $filetype = $_FILES["file_img"]["type"];
	         
		  $path = "/home/u321446594/public_html/partyimage/$partyname.png";

                  $actualpath = "http://hntdatabase.16mb.com/partyimage/$partyname.png";

                   move_uploaded_file($filetmp,$path);


		//Creating an SQL Query 
		$sql = "INSERT INTO partydata (partyname ,partyimagelocation , partydiscription) values ('$partyname ','$actualpath','$partydiscription')";
		
		if(mysqli_query($con,$sql)){
                          
                         header('Location: http://hntdatabase.16mb.com/admin/partyinformation.php');
			 
		}else{
			//printing the failure message in json 
			echo '{"ErrorMessage":"Failure"}';
		}
		mysqli_close($con);
         }else {
            ?>
       
             <div class="form">
		
				<ul class="tab-group">
					<li class="tab"><a href="#update">Update Party</a></li>
				</ul>
              
		      <div class="tab-content">
			  
				<form method = "post" action = "<?php $_PHP_SELF ?>" enctype="multipart/form-data">

			  <div id="update">
				
				<form method = "post" action = "<?php $_PHP_SELF ?>" enctype="multipart/form-data">
                   
                      <div class="field-wrap">
						<label>
							Party Name<span class="req">*</span>
						</label>
							<input name = "partyname" required autocomplete="off" type = "text" id = "partyname">
					   </div>
					 
					 <div class="field-wrap">
						<label>
							Discription<span class="req">*</span>
						</label>
							<input name = "partydiscription" type = "text" required autocomplete="off" id = "partydiscription">
					   </div>
                  
                     <div class="field-wrap">
						
							<input type="file" name="file_img" />
					   </div>
                  
                  
                     <button class="button button-block" name = "update" type = "submit" 
                              id = "update" value = "Update">Update</button>
                     
                </form>
			   
			   </div>
			   
        
             </div>
      
          </div>
         <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
            <?php
         }
      ?>
      
   </body>
</html>			