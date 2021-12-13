<?php
if(isset($_SESSION['unm']))
{
  session_destroy();
}
?>
      <div class="searchform">
        <form id="formsearch" name="formsearch" method="post" action="addpost.php">
           </form>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.php"><span>Home</span></a></li>
          <li><a href="about.php"><span>About Us</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
          <li><a href="service.php"><span>Service</span></a></li>
          <li><a href="register.php"><span>Register</span></a></li> 
          <li><a href="login.php"><span>Login</span></a></li> 
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
