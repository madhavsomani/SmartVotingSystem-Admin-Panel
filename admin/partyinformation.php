<html>
<head>
<style>
@import url(http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

body {
  background-color: #575972;
  font-family: "Roboto", helvetica, arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
  text-rendering: optimizeLegibility;
}

div.table-title {
   display: block;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
   color: #fafafa;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 1300px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
  border-bottom: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}

</style>
</head>
<body>


<?php 

 require_once('dbConnect.php');
 
 $sql = "SELECT * FROM partydata";
 
 $r = mysqli_query($con,$sql);
 
if($r)
{
   echo "<table class='table-fill'>"; 
        
        echo "<thead>";
        echo "<tr >";
        echo "<th class='text-left' > Party Name </th>"; 
        echo "<th class='text-left' > Discription</th>";
        echo "<th class='text-left' > Party LOGO</th>"; 
        echo "<th class='text-left'> Delete Entry</th>";
        echo "</tr>"; 
        echo "</thead>";
        echo "<tbody class='table-hover'>";
      

   while($row=mysqli_fetch_array($r))
   {
        $partyname = $row['partyname'];
        echo "<tr>";
        echo "<td  class='text-left'>" . $row['partyname'] . "</td>"; 
        echo "<td  class='text-left'>" . $row['partydiscription'] . "</td>";
        echo "<td  class='text-left'><img width='100' height='100' src='".$row['partyimagelocation']."'></td>";
        echo "<td class='text-left' ><a href='deleteparty.php?id=".$row['id']."'><img width='75' height='75' src='http://hntdatabase.16mb.com/admin/delete.png'></a></td>";
        echo "</tr>";
        
   }

  echo "</tbody>";
  echo "</table>";
}


 mysqli_close($con);

?>

</body>
</html>


		 