<!doctype html>
<?php

include ("../../php/newconnection.php");

if(isset($_POST['submit'])){

	 $p_name = $_POST['pname'];
	 $p_description = $_POST['pdescription'];
	 $p_price = $_POST['pprice'];
	 $p_image= $_FILES['pimage']['name'];
	 $image_tmp= $_FILES['pimage']['tmp_name'];

	
	
	move_uploaded_file($image_tmp,"C:\wamp64\www\Elegant_wardrobe_online\Products Insert\kid items\productImages/$p_image");
	
	$insert_query = "insert into kidboyproductitems(p_name, p_description, p_price, p_image)";
	$insert_query.= "VALUES('{$p_name}','{$p_description}','{$p_price}','{$p_image}')";
	

	$add = mysqli_query($conn,$insert_query);
		if(!$add){
			$msg ="Couldn't Add";
			echo "<script type='text/javascript'>alert('$msg');</script>"; 
            die("Query Failed ." . mysqli_error($conn));
            header("refresh:1; url=insertkidboy.php");
        }
        else{
            $msg = "Added ";
            echo "<script type='text/javascript'>alert('$msg');</script>"; 
            header("refresh:1; url=insertkidboy.php");
        }
	
	}
	

?>