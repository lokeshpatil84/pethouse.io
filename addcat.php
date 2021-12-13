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
             <td colspan="2"><center><h2 style="color:white">Add catgory!!!</h2></center></td>
            </tr>
            <tr>
             <td><font color="white">Category Name</font></td>
             <td><input type="text" name="catnm"/></td>
            </tr>
            <tr>
             <td><font color="white">Category Image</font></td>
             <td><input type="file" name="catimg"/></td>
            </tr>
            <tr>
             <td colspan="2"><center>
             <input type="submit" name="s" value="Add Category"/>
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
  $fname=$_FILES['catimg']['name'];
  $tmpname=$_FILES['catimg']['tmp_name'];
  
  $str="abcdef123ghijklmno456pqrst789uvw0";
  $str=str_shuffle($str);
  $str=substr($str,0,4);
  
  $newfname=$str.'-'.$fname;
  
  $des="upload/$newfname";
  
  move_uploaded_file($tmpname,$des); 
  $query="insert into pcategory values(NULL,'$catnm','$newfname')";
  if(mysqli_query($con,$query)):
   echo "<script>alert('Category added successfully')</script>";
   echo "<script>window.location='addcat.php'</script>";
  else:
    echo "<script>alert('Category not added')</script>";
   echo "<script>window.location='addcat.php'</script>";
  endif;
}
?>   
    
  
    
    
