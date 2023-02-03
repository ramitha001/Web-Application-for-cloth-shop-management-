<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="../product update/men/menupdatefunctioncss.css">
</head>
<body>
	
	<?php

	if(isset($_POST ['submit']))
		{
			include ('../php/newconnection.php');
			
			if ($_POST['search']){
			$search = $_POST ['search'];
			
			echo $search;
			
			$sql    = 'SELECT * FROM menproductitems WHERE p_name = "'.$search.'"' ;
			
			$result = mysqli_query ($conn , $sql) or die ("Couldn't execute query. " . mysqli_error ($conn));
				
			$sql2 = 'SELECT * FROM womenproductitems WHERE p_name = "'.$search.'"';
			$result2 = mysqli_query ($conn , $sql2) or die ("Couldn't execute query. " . mysqli_error ($conn));
				
			$sql3 = 'SELECT * FROM kidboyproductitems WHERE p_name = "'.$search.'"';
			$result3 = mysqli_query ($conn , $sql3) or die ("Couldn't execute query. " . mysqli_error ($conn));
				
			
			
			if (mysqli_num_rows ($result) > 0)
			{
				$row = mysqli_fetch_array ($result);
				
				?>
                <div class="updateform">
                <form name="form" method="post" action="">
                  <label class="lable">product name :</label> <input type="text" name="pname" value="<?php echo $row ['p_name'] ?>"/> <br />
                  <label class="lable"> product description:</label> <input type="text" name="description" value="<?php echo $row ['p_description'] ?>" /> <br />
                  <label class="lable">product price  : </label> <input type="text" name="pprice" value="<?php echo $row ['p_price'] ?>" /> <br />
                  <label class="lable">product image: </label> 
                  <img src="../Products Insert/men items/productImages/<?php echo $row ['p_image'] ?>" width="170" height="200" alt=""/>
                  <button onClick="history.back()" class="button"> Back </button> </div>
                 </form>
                 
                    </div>
                    <?php   
							
			}
			
			else if (mysqli_num_rows ($result2) > 0)
			{
				$row = mysqli_fetch_array ($result2);
				
				?>
                <div class="updateform">
                <form name="form" method="post" action="">
                  <label class="lable">product name :</label> <input type="text" name="pname" value="<?php echo $row ['p_name'] ?>"/> <br />
                  <label class="lable"> product description:</label> <input type="text" name="description" value="<?php echo $row ['p_description'] ?>" /> <br />
                  <label class="lable">product price  : </label> <input type="text" name="pprice" value="<?php echo $row ['p_price'] ?>" /> <br />
                  <label class="lable">product image: </label> 
                  <img src="../Products Insert/women items/productImages/<?php echo $row ['p_image'] ?>" width="170" height="200" alt=""/>
					<div class="Back">      
						<button onClick="history.back()" class="button"> Back </button> </div>
                 </form>
                 
                    </div>
                    <?php   
							
			}
				
			else if (mysqli_num_rows ($result3) > 0)
			{
				$row = mysqli_fetch_array ($result3);
				
				?>
                <div class="updateform">
                <form name="form" method="post" action="">
                  <label class="lable">product name :</label> <input type="text" name="pname" value="<?php echo $row ['p_name'] ?>"/> <br />
                  <label class="lable"> product description:</label> <input type="text" name="description" value="<?php echo $row ['p_description'] ?>" /> <br />
                  <label class="lable">product price  : </label> <input type="text" name="pprice" value="<?php echo $row ['p_price'] ?>" /> <br />
                  <label class="lable">product image: </label> 
                  <img src="../Products Insert/kid items/productImages/<?php echo $row ['p_image'] ?>" width="170" height="200" alt=""/>
                  <button onClick="history.back()" class="button"> Back </button> </div>
                 </form>
                 
                    </div>
                    <?php   
							
			}
				
				
			else
			  {
				  echo " NO result found";
			  }
		}
		}
		else
		{
			header ("Location: Home.php");
		}

?>
	
</body>
</html>