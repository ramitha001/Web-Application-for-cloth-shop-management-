
<html>
	<head>
		<title>inserting new product</title>
		<style type="text/css">
			
			body {
				background-color: wheat;
			}
			
			.insert{
				margin-top: 150px;
			}
		</style>
		
	</head>
	
<body>
	<div id="first">
				
				 <a href="../../html/admin.php" class="logo1"> <img src="../../images/Elegant_wardrobe.png" width="365" height="55" class="logo"> 
				 
		     	 </a>
		         
        	</div>
<form method="POST" action="insertkidboyfunction.php" class="insert" enctype="multipart/form-data">

	<h2 align="center"> <b>Kid's Cloths</b> </h2>
	<table width="600" align="center" border="10" >
		
		<tr>
			<td align="center" bgcolor="yellow" colspan="6"
			><h1>Insert New Product Here</h1></td>
		</tr>
		
		<tr>
			<td align="right">Product Name:</td>
			<td><input type="text" name="pname" size="30"
			></td>
		</tr>
		
		<tr>
			<td align="right">Product description :</td>
			<td><input type="text" name="pdescription" size="30"
			></td>
		</tr>
		
		<tr>
			<td align="right">price:</td>
			<td><input type="text" name="pprice" size="30"
			></td>
		</tr>
		
		<tr>
			<td align="right">product Image:</td>
			<td><input type="file" name="pimage"></td>
		</tr>
		
		<tr>
			<td align="center" colspan="6"><input type=
			"submit" name="submit" value="Insert now"></td>
		</tr>
		
		<tr>
			<td align="center" colspan="6">
				<input type="submit" name="submit" value="Back" formaction="../../html/admin.php#product" ></td>
		</tr>


	</table>
</form>
</body>
</html>

