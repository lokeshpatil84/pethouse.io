<?php 
include("header.php"); 
include("slider.php"); 
include("nav.php"); 
?>    
    
    
    
    
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
            <h1>Sub Category List!!!</h1>
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
        #sb_menu1 li a
        {
          color:black;
          font-size:15px;
          font-family:italic;
          text-decoration:underline;
        }
        </style>   
        <br/>
        <div id="maindiv">
         <?php 
         $catnm=$_REQUEST['catnm'];
         $query="select * from psubcategory where catnm='$catnm' order by subcatid desc limit 0,9";
         $res=mysqli_query($con,$query);
         while($row=mysqli_fetch_array($res)):
         ?>
           <div id="subdiv">
           <a href="viewads.php?subcatnm=<?php echo $row[2]; ?>">
           <center>
           <img src="upload/<?php echo $row[3]; ?>" height="60" width="130"/>
           <br/>
           <h3 style="color:white;font-size:15px;">
           <?php echo $row[2]; ?>
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
          <h2 class="star"><span>Category</span></h2>
          <div class="clr"></div>
          <ul id="sb_menu1" class="sb_menu">
          <?php
             $query="select * from pcategory";
             $res=mysqli_query($con,$query);
             while($row=mysqli_fetch_array($res)):
             echo "<li><a   href='subcatview.php?catnm=$row[1]'>$row[1]</a></li>";
             endwhile; 
             ?>
          </ul>
        </div>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
    
 <?php 
include("footer.php"); 
?>   
    
  
    
    
