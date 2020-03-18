<?php 

 require_once('dbConnect.php');
 
 $sql = "SELECT * FROM androidotp";
 
 $r = mysqli_query($con,$sql);
 
if($r)
{
   echo "<table border='1' width='100%' class='table-fill'>"; 
        
        echo "<tr >";
        echo "<th > Name </th>"; 
        echo "<th > Username</th>";
        echo "<th > Password</th>"; 
        echo "<th > Phone No</th>";
        echo "<th > Aadhar Card No</th>"; 
        echo "<th > Vote</th>";
        echo "<th > UserPhoto</th>";
        echo "<th > FingerPrint Data</th>";
        echo "</tr>"; 
      

   while($row=mysqli_fetch_array($r))
   {

        
        echo "<tr>";
        echo "<td  align='center'>" . $row['name'] . "</td>"; 
        echo "<td  align='center'>" . $row['username'] . "</td>";
        echo "<td  align='center'>" . $row['password'] . "</td>"; 
        echo "<td  align='center'>" . $row['phone'] . "</td>";
        echo "<td  align='center'>" . $row['aadharcard'] . "</td>"; 
        echo "<td  align='center'>" . $row['vote'] . "</td>";
        echo "<td  align='center'><img width='100' height='100' src='PhotoUpload/".$row['username'].".png'></td>";
        echo "<td  align='center'><img width='100' height='100' src='fingeruploads/".$row['username'].".bmp'></td>";
        echo "</tr>";
        
   }

  echo "</table>";
}


 mysqli_close($con);

?>


	