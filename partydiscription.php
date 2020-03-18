<?php 

 require_once('dbConnect.php');
 
 $sql = "SELECT * FROM partydata";
 
 $r = mysqli_query($con,$sql);
 
if($r)
{
   while($row=mysqli_fetch_array($r))
   {

     $flag[]=$row;
   }

  print(json_encode($flag));
}


 mysqli_close($con);

?>

	