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
if(isset($_REQUEST['name']))
{

	  $name=$_REQUEST['name'];
	 
//create query
$query="select * from pfreeads where name='$name'";

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
}
?>
</table>
</center>
<?php
if(isset($_REQUEST['uid']))
{
 $pas=$_REQUEST['uid'];
  //create connection
  //create query
  $query1="delete from pfreeads where uid='$pas'";
  
  //execute query
  $res1=mysqli_query($con,$query1);
  if($res1)
  {
    /*echo "<h1>Record deleted</h1>";
    header("location:selectall.php");*/
    echo "<script>alert('Record deleted successfully..')</script>";
    echo "<script>window.location='usermain.php'</script>";
  }
  else
  {
    /*echo "<h1>Record not deleted</h1>";
    header("location:selectall.php");*/
    echo "<script>alert('Record not deleted successfully..')</script>";
    echo "<script>window.location='delete.php'</script>";
  }
}
?>
