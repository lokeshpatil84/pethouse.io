<?php 
include("header.php"); 
include("slider.php"); 
include("nav.php"); 
?>    
    
    
    
    
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <?php
          $subcatnm=$_REQUEST['subcatnm'];
          if(isset($_REQUEST['city']))
          {
          $city=$_REQUEST['city']; 
          $query="select * from pfreeads where  catnm='$subcatnm' && city='$city'";
          }
          else
          {
            $query="select * from pfreeads where catnm='$subcatnm'";
          }
          $res=mysqli_query($con,$query);
          $num=mysqli_num_rows($res);
          echo "<font style='font-size:20px; font-weight:bold;'>Category :$subcatnm</font><br/><br/>";
          echo "<font style='font-size:15px;'>Total Ads : $num</font>";
          while($row=mysqli_fetch_array($res)):
          ?>  
          
          
          <br/><br/>
          <table style="border:4px solid #3EC0A9; border-radius:20px;" height="150" width="600">
          <tr>
           <td width='30%' rowspan='3'>
           <center>
           <img src="upload/<?php echo $row[4]; ?>" height='100' width='100' />
       
 <img src="upload/<?php echo $row[5]; ?>" height='100' width='100' />
          
 <img src="upload/<?php echo $row[6]; ?>" height='100' width='100' />
          
 <img src="upload/<?php echo $row[7]; ?>" height='100' width='100' />
          		  </center>
           </td>
           <td style='color:white'>Title: <?php echo $row[1]; ?></td> 
           <td style='color:white'>Category: <?php echo $row[2]; ?></td></tr>
   <tr>
           <td style='color:white'>mobile no: <?php echo $row[9]; ?></td>         
		  <td style='color:white'>City: <?php echo $row[10]; ?></td> 
		   <tr rowspan='3'>
           <td style='color:white'>description: <?php echo $row[3]; ?></td>
          </tr>
          </table>
          
          
          <?php endwhile; ?>
          
        </div>
          
      
      </div>

       <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Filter</span> Post</h2>
          <div class="clr"></div>
          Filter By City:
          <br/><br/>
          <form method="post">
          <select name='city'>
          <option>select city</option>
          <option>indore</option>
          <option>ujjain</option>
          <option>bhopal</option>
          <option>pune</option>
		  <option>mumbai</option>

          </select>
          &nbsp;&nbsp;&nbsp;
          <input type="submit" name="filter" value="Filter"/> 
          </form>
        </div>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
    
 <?php 
include("footer.php"); 
if(isset($_REQUEST['filter']))
{
  $subcatnm=$_REQUEST['subcatnm'];
  $city=$_REQUEST['city'];
  echo "<script>window.location='viewads.php?subcatnm=$subcatnm&city=$city'</script>";
}
?>   
    
  
    
    
