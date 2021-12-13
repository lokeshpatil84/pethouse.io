<?php 
session_start();
$con=mysqli_connect("localhost","root","","pethousefinal") or die("<h1>Problem in database connection</h1>");
?>
<html>
<head>
<title>Pethouse.com</title>
<link rel="icon" href="1.jpg" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-quicksand-700.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<style>
.logo
{
  	
  height:110px;
  color:black;
  font-weight:bold;
  border-radius:20px;
 
}
</style>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1>
        <a href="index.php">
        <font color="orange">P</font>et<font color="orange">H</font>ouse.<font color="blue">com</font> 
        <small>Buy & Sell pet's</small></a>
        </h1>
      </div>
      <div class="clr"></div>
