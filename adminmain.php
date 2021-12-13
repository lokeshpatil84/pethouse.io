<?php 
include("header.php"); 
include("slider.php"); 
include("adminnav.php"); 
?>    
    
    
    
    
  <div class="content">
    <div class="content_resize">
            <center>
            <h1>Welcome to admin panel</h1>
            <h2 style="color:white">
            Welcome : 
            <?php
            if(isset($_SESSION['unm']))
            {
              echo $_SESSION['unm'];
            }
            ?>
            </h2>
            </center>            
          
          
          
          

      
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
    
 <?php 
include("footer.php"); 
?>   
    
  
    
    
