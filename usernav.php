<?php
$res=!isset($_SESSION['unm']);
$res1=$_SESSION['role']!="user";
if($res || $res1)
{
  echo "<script>alert('Invalid user,please login first')</script>";
  echo "<script>window.location='login.php'</script>";
}
?>
<?php
     $name=$_SESSION['unm']
	 
     ?>
      <div class="searchform">

      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="usermain.php"><span>Home</span></a></li>
          <li><a href="useraddpost.php"><span>Add Post</span></a></li>

          <li><a href='delete.php?name=<?php echo $name ?>'><span>Delete Post</span></a></li>
          <li><a href="login.php"><span>Logout</span></a></li> 
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
