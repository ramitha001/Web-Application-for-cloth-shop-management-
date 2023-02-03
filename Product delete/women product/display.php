<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> delete women product </title>
	<style type="text/css">
		body {
			background-image: url("../../images/1.jpg");
		}
		
		.table{
			margin-top: 70px;
		}
		
		.font{
			margin-top: 50px;
		}
		
		.btnback {
			margin-left: 650px;
			margin-top: 50px;
			font-size: 20px;
			border-radius: 15px;
		}
	</style>
</head>

<body>
		<div >
		<div>
			<h2 align="center" class="font"> <font size="20">Delete Women's Clothing Items</font></h2>
	</div>

	<?php
	
		include("../../php/newconnection.php");
	
		$query = "SELECT * FROM womenproductitems ";
		$query_rum = mysqli_query($conn,$query);
			?>
			
	<table border="2" bgcolor="#E58C8D" bordercolor="#4CE8BF" align="center" class="table">
		<thead>
				<tr>
					<th>Product Name</th>
					<th>Product Description</th>
					<th>Product Price</th>
					<th>Product Image</th>
					<th> Delete </th>
				</tr>
			</thead>
			
	<?php
		if($query_rum)
		{
			while($row = mysqli_fetch_array($query_rum))
			{
				?>
			
					<tbody>
						<tr>
						<th> <?php echo $row['p_name'];  ?> </th>
						<th> <?php echo $row['p_description']; ?> </th>
						<th> <?php echo $row['p_price']; ?> </th>
						<th> <?php echo $row['p_image']; ?> </th>
						
							
					
		
					<form action="delete.php" method="post">
						<input type="hidden" name="p_name" value="<?php echo $row['p_name'] ?>">
						<th><input type="submit" name="delete" value="Delete"> </th>
					</form>
			
			</tr>
						</tbody>
			<?php
				
				
				
				
				
			}
		}
		else{
				echo "No Record Founded";
		}
	?>
			</table>
			</div>

	<a href="../../html/admin.php"><input type="submit" value="Back" class="btnback" ></a>
	
</body>
</html>