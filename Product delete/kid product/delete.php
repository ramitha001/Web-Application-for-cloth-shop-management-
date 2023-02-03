<?php
	
	include('../../php/newconnection.php');

	if(isset($_POST['delete']))
	{
		$p_name = $_POST['p_name'];
		
		$sql = "DELETE FROM kidboyproductitems WHERE p_name='$p_name' ";
		$query_run = mysqli_query($conn , $sql);
		
		if($query_run)
		{
			echo '<script> alert("Data Deleted"); </script>';
			header ("location:display.php");
		}
		else
		{
			echo '<script> alert("Data Not Deleted"); </script>';
		}
	}

?>
