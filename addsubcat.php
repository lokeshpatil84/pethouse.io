<?php 
include("header.php"); 
include("slider.php"); 
include("adminnav.php"); 
?>    
    
    
    
    
  <div class="content">
    <div class="content_resize">
            <center>
            <form method="post" enctype="multipart/form-data">
            <table border="2" cellspacing="5" cellpadding="10">
            <tr>
             <td colspan="2"><center><h2 style="color:white">Add Sub Category!!!</h2></center></td>
            </tr>
            <tr>
             <td><font color="white">Category</font></td>
             <td>
             <select name="catnm">
             <option>select category</option>
             <?php
             $query="select * from pcategory";
             $res=mysqli_query($con,$query);
             while($row=mysqli_fetch_array($res)):
             echo "<option>$row[1]</option>";
             endwhile; 
             ?>
             </select>
             </td>
            </tr>
              <tr>
             <td><font color="white">Sub Category Name</font></td>
             <td><input type="text" name="subcatnm" required=""/></td>
            </tr>
            <tr>
             <td><font color="white">Sub Category Image</font></td>
             <td><input type="file" name="subcatimg" required=""/></td>
            </tr>
            <tr>
             <td colspan="2"><center>
             <input type="submit" name="s" value="Add Sub Category"/>
             </center></td>
            </tr>
            </table>
            </form>
            </center>            
         <br/><br/>
      </div>
      <div class="clr"></div>
    </div>
  </div>
    
 <?php 
include("footer.php"); 
if(isset($_REQUEST['s']))
{
  $catnm=$_REQUEST['catnm'];
  $subcatnm=$_REQUEST['subcatnm'];
  $fname=$_FILES['subcatimg']['name'];
  $tmpname=$_FILES['subcatimg']['tmp_name'];
  
  $str="abcdef123ghijklmno456pqrst789uvw0";
  $str=str_shuffle($str);
  $str=substr($str,0,4);
  
  $newfname=$str.'-'.$fname;
  
  $des="upload/$newfname";
  
  move_uploaded_file($tmpname,$des); 
  $query="insert into psubcategory values(NULL,'$catnm','$subcatnm','$newfname')";
  if(mysqli_query($con,$query)):
   echo "<script>alert('Sub Category added successfully')</script>";
   echo "<script>window.location='addsubcat.php'</script>";
  else:
    echo "<script>alert('Sub Category not added')</script>";
   echo "<script>window.location='addsubcat.php'</script>";
  endif;
}
?>   
    
  
    
    
