<?php 
include("header.php"); 
include("slider.php"); 
include("nav.php"); 
?>    
    
    
    
    
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
            <h1>Category List!!!</h1>
        <style>
        #maindiv
        {
           height:300px;
           width:600px;
        }
        #subdiv
        {
           height:100px;
           width:200px;
           float:left;
        }
        </style>   
        <br/>
        <div id="maindiv">
         <?php 
         $query="select * from pcategory order by catid desc limit 0,9";
         $res=mysqli_query($con,$query);
         while($row=mysqli_fetch_array($res)):
         ?>
           <div id="subdiv">
           <a href="subcatview.php?catnm=<?php echo $row[1]; ?>">
           <center>
           <img src="upload/<?php echo $row[2]; ?>" height="60" width="130"/>
           <br/>
           <h3 style="color:white;font-size:15px;">
           <?php echo $row[1]; ?>
           </h3>
           <br/>
           </center>
           </a>
           </div>
         <?php endwhile; ?>           
        </div>  
      
        </div>
      <br/>
      </div>

       <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="index.php"><span>Home</span></a></li>
          <li><a href="about.php"><span>About Us</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
          <li><a href="service.php"><span>Service</span></a></li>
          <li><a href="login.php"><span>Login</span></a></li>
          </ul>
        </div>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
    
 <?php 
include("footer.php"); 
?>   
    
  
    
    
