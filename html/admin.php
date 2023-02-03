<?php

	session_start();
	if(!isset($_SESSION['name']))
	{
		header("location: ../php/chechlogin.php");
	}
   $name = $_SESSION['name'];

?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Admin Menu</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	
	<script type="text/jscript">

function confirm_box()
{
var r=confirm("Are you sure!");
if (r==true)
{
	alert("you pressed ok!");
	window.location.href="../php/logout.php";
}
else
{
	alert ("you pressed cancel!");
	
}
	
}
</script>
	
</head>

<body>
	
	
	
	
	<div class="side-navbar">
		<img src="../images/male_user_40px.png" class="navbarimg" alt="">
		 <input type="text" name="textfield" id="textfield" class="userna" placeholder="Welcome  <?php echo $name;  ?> to admin panel">
  		<a href="#home">Home</a>
  		<a href="#product">Products</a>
		<a href="#insert">Delete</a>
  		<a href="#update">Update</a>
  		
		<a href="#" onclick="confirm_box()" value="this is a confirm box">Logout</a>
	</div>

<div class="content-area">
	<div class="wrapper">
		<div id="home" class="banner">
			<div class="text-content">
				<h1 align="center"> <font color="#fff"> admin home page </font></h1>			
			</div>		
		</div>	
		<div id="product" class="product-area">
			<div class="text-content">
				<h3><a href="../Products Insert/men items/insertdata.php"> Men's Items </a></h3>
				<h3><a href="../Products Insert/women items/insertwomendata.php"> Women's Items </a></h3>
				<h3><a href="../Products Insert/kid items/insertkidboy.php"> Kid's Items </a> </h3>
			</div>
		</div>
		
		<div id="insert" class="insert-area">
			<div class="text-content">
				<h3><a href="../Product delete/men product/display.php"> Men's Items </a></h3>
				<h3><a href="../Product delete/women product/display.php"> Women's Items </a></h3>
				<h3><a href="../Product delete/kid product/display.php"> Kid's Items </a> </h3>			
			</div>
		</div>
		
		<div id="update" class="update-area">
			<div class="text-content">
				<h3><a href="../product update/men/mendisplay.php"> Men's Items </a></h3>
				<h3><a href="../product update/women/womendisplay.php"> Women's Items </a></h3>
				<h3><a href="../product update/kid/kiddisplay.php"> Kid's Items </a> </h3>					
			</div>
		</div>
		
	
		
		<div id="logout" class="logout-area">
			<div class="text-content">
				<h2> logout </h2>		
			</div>	
		</div>
	</div> 
</div>
	

	
</body>
</html>
