<?php
$res=!isset($_SESSION['unm']);
$res1=$_SESSION['role']!="admin";
if($res || $res1)
{
  echo "<script>alert('Invalid user,please login first')</script>";
  echo "<script>window.location='login.php'</script>";
}
?>
      <div class="searchform">

      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="adminmain.php"><span>Home</span></a></li>
          <li><a href="addcat.php"><span>Add category</span></a></li>
          <li><a href="addsubcat.php"><span>Add sub category</span></a></li>
		  <li><a href="delete1.php"><span>delete post</span></a></li>
          <li><a href="login.php"><span>Logout</span></a></li> 
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

