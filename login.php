<?php 
include("header.php"); 
include("slider.php"); 
include("nav.php"); 
?>    
    
    
    
    
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
            <h1>Login page</h1>
           <br/><br/>
           <form method="post">
            <label style='color:white;font-size:20px;' >Username</label>
            <input type="text" name="username"/>
            <br/><br/>
            <label style='color:white;font-size:20px;'>Password</label>
            <input type="password" name="password"/>
            <br/><br/> 
            <input type="submit" name="s" value="Login"/>
           </form>         
           <?php
           if(isset($_REQUEST['s']))
           {
             $username=$_REQUEST['username'];
             $password=$_REQUEST['password'];
             
             $query="select * from plogin where username='$username' && password='$password'";
             
             $res=mysqli_query($con,$query);
             $num=mysqli_num_rows($res);
             $row=mysqli_fetch_array($res);
             if($num>0)
             {
               $_SESSION['unm']=$username;
               $_SESSION['role']=$row[3];               
               echo "<script>alert('Login successfully')</script>";
               if($row[3]=="admin")  
                  echo "<script>window.location='adminmain.php'</script>";
               if($row[3]=="user")  
                  echo "<script>window.location='usermain.php'</script>";   
  }  
  else
  {
    echo "<script>alert('Login failed')</script>";
    echo "<script>window.location='login.php'</script>";
  }
               
           }
           ?>      
          
          
          
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
?>   
    
  
    
    
