<?php 
include("header.php"); 
include("slider.php"); 
include("usernav.php"); 
?>    
    
    
    
    
  <div class="content">
    <div class="content_resize">
     <?php
     $email=$_SESSION['unm'];
     ?>       
      <center>
            <h1>User Free Ads</h1>
           <br/>
              <form method="post" enctype="multipart/form-data">
            <table border="2" cellspacing="5" cellpadding="10">
           
            <tr>
             <td><font color="white">Title</font></td>
             <td><input type="text" name="title" required=""/></td>
            </tr>
            <tr>
             <td><font color="white">Category</font></td>
             <td>
                <select name="catnm">
             <option>select category</option>
             <?php
             $query="select * from psubcategory";
             $res=mysqli_query($con,$query);
             while($row=mysqli_fetch_array($res)):
             echo "<option>$row[2]</option>";
             endwhile; 
             ?>
             </select>
             </td>
            </tr>
            <tr>
             <td><font color="white">Description</font></td>
             <td>
             <textarea name="des" rows="7" cols="30" required=""></textarea>
             </td>
            </tr>
            <tr>
             <td><font color="white">Images for Ads</font></td>
             <td>
             <input type="file" name="img1" required=""/>
             <input type="file" name="img2"/>
             <input type="file" name="img3"/>
             <input type="file" name="img4"/>
            </td>
            </tr>
            <tr>
             <td><font color="white">Name</font></td>
             <td><input readonly type="text" name="name"required="" value="<?php echo $email; ?>"/></td>
            </tr>
            <tr>
             <td><font color="white">Mobile</font></td>
			   <td>    
			 <input type="text" maxlength="10"  pattern="[0-9]{10}"
     name="mobile">
             </td>
            </tr>
            <tr>
             <td><font color="white">City</font></td>
             <td><input type="text" name="city" required=""/></td>
            </tr>
            <tr>
             <td colspan="2"><center>
             <input type="submit" name="s" value="Add Free Post" required=""/>
             </center></td>
            </tr>
            </table>
            </form>
          
          
          <br/><br/>
            </center>               
      
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
    
 <?php 
include("footer.php"); 
if(isset($_REQUEST['s']))
{
  extract($_REQUEST);
  $img1=$_FILES['img1']['name'];
  if($img1==NULL)
    $img1="1.jpg";
  else
    move_uploaded_file($_FILES['img1']['tmp_name'],"upload/$img1");
    
  $img2=$_FILES['img2']['name'];
  if($img2==NULL)
    $img2="1.jpg";
  else
    move_uploaded_file($_FILES['img2']['tmp_name'],"upload/$img2"); 
    
  $img3=$_FILES['img3']['name'];
  if($img3==NULL)
    $img3="1.jpg";
  else
    move_uploaded_file($_FILES['img3']['tmp_name'],"upload/$img3");   
    
  $img4=$_FILES['img4']['name'];
  if($img4==NULL)
    $img4="1.jpg";
  else
    move_uploaded_file($_FILES['img4']['tmp_name'],"upload/$img4");
  
  $query="insert into pfreeads values(NULL,'$title','$catnm','$des','$img1','$img2','$img3','$img4','$name','$mobile','$city')";
  if(mysqli_query($con,$query))
  {
    echo "<script>alert('Post added successfully...')</script>";
    echo "<script>window.location='useraddpost.php'</script>";
  }
  else
  {
    echo "<script>alert('Post not added...')</script>";
    echo "<script>window.location='useraddpost.php'</script>";
  }
}
?>   
    
  
    
    
