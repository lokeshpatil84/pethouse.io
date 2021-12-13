<?php 
include("header.php"); 
include("slider.php"); 
include("usernav.php"); 
?>    
    
    
    
    
  <h1>All student records!!!</h1>
  <center>
<table border="2" cellsapcing="5" cellpadding="10" bgcolor="white">
<tr>
 <th>title</th>
 <th>catgory</th>
 <th>description</th>
 <th>name</th>
 <th>mobile</th>
 <th>city</th>
</tr>
<?php

//connection with database

	 
//create query
$query="select * from pfreeads ";

//execute query
$res=mysqli_query($con,$query);

//convert resultset into array

while($row=mysqli_fetch_array($res))
{
  echo "<tr>";
  echo "<td>$row[1]</td>";
  echo "<td>$row[2]</td>";
  echo "<td>$row[3]</td>";
  echo "<td>$row[8]</td>";
  echo "<td>$row[9]</td>";
  echo "<td>$row[10]</td>";
  echo "<td color><a href='delete.php?uid=$row[0]'>DELETE</a></td>";
  echo "</tr>";
}

?>
</table>
</center>
