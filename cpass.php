<?php 
include("header.php"); 
include("slider.php"); 
include("usernav.php"); 
?>    
    
    
    
    
  <div class="content">
    <div class="content_resize">
      <?php
      $email=$_SESSION['unm'];
      echo "<script>window.location='mailapi/examples/mail.php?email=$email'</script>";
      ?>  
      </div>
      <div class="clr"></div>
    </div>
  </div>
    
 <?php 
include("footer.php"); 
?>   
    
  
    
    
