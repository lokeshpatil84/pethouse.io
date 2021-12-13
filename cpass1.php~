<?php 
include("header.php"); 
include("slider.php"); 
include("usernav.php"); 
?>    
    
    
    
    
  <div class="content">
    <div class="content_resize">
      <form method="post">
      <label>New password</label>
      <input type="password" name="npassword"/>
      <br/><br/>
      <label>Confirm New password</label>
      <input type="password" name="cnpassword"/>
      <br/><br/>
      <input type="submit" name="s" value="Change password"/>
      <br/><br/>
      </form>
      
      <?php
      $email=$_REQUEST['email'];
      if(isset($_REQUEST['s']))
      {
        extract($_REQUEST);
        if($npassword==$cnpassword)
        {
           $query="update plogin set password='$npassword' where username='$email'";
           $query1="update pregister set password='$npassword' where email='$email'";
            if(mysqli_query($con,$query) && mysqli_query($con,$query1))
  {
    echo "<script>alert('password changed successfully')</script>";
    echo "<script>window.location='login.php'</script>";
  }
        }
        else
        {
          echo "<script>alert('New password and confirm new password not matched enter again')</script>";
        }
      }
      ?>  
      </div>
      <div class="clr"></div>
    </div>
  </div>
    
 <?php 
include("footer.php"); 
?>   
    
  
    
    
