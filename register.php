<?php 
include("header.php"); 
include("slider.php"); 
include("nav.php"); 

?>    
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
            
           <h1>Register here!!!</h1>
           <br/><br/>
           <form method="post">
            <label style='color:white;font-size:20px;' >Name</label>
            <input type="text" name="name" required=""/>
            <br/><br/>
            <label style='color:white;font-size:20px;'>Password</label>
            <input type="password" name="password"  />
            <br/><br/> 
            <label style='color:white;font-size:20px;' >Email</label>
            <input type="email" name="email" />
            <br/><br/> 
            <label style='color:white;font-size:20px;' >Mobile</label>
			 <input type="text" maxlength="10"  pattern="[0-9]{10}"
     name="mobile">
            <br/><br/> 
            <input type="submit" name="s" value="Register"/>
           </form>
          
          
        </div>
          
      
      </div>

       <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="index.php"><span>Home</span></a></li>
          <li><a href="about.php"><span>About Us</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
          <li><a href="service.php"><span>Service Us</span></a></li>
          <li><a href="login.php"><span>Login</span></a></li>
          </ul>
        </div>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
    
 <?php 
include("footer.php"); 
if(isset($_REQUEST['s']))
{
  extract($_REQUEST);
  $str="0123456789abcdefghijklmno123456pqrstuvwxyz7890";
  $str=str_shuffle($str);
  $uid=substr($str,0,4);
  
  $query="insert into pregister values('$uid','$name','$password','$email','$mobile')";
  $query1="insert into plogin values('$uid','$name','$password','user')";
  if(mysqli_query($con,$query) && mysqli_query($con,$query1))
  {
    echo "<script>alert('Register successfully')</script>";
    echo "<script>window.location='login.php'</script>";
  }
  else
  {
    echo "<script>alert('Registration failed')</script>";
    echo "<script>window.location='register.php'</script>";
  }
}
?>   
    
  
    
    
