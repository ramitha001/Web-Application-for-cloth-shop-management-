<?php
	
	include('../../php/newconnection.php');

	if(isset($_POST['delete']))
	{
		$p_name = $_POST['p_name'];
		
		$sql = "DELETE FROM menproductitems WHERE p_name='$p_name' ";
		$query_run = mysqli_query($conn , $sql);
		
		if($query_run)
		{
			 $msg = " Succesfully Deleted  ";
    		echo "<script type='text/javascript'>alert('$msg');</script>";
			header ("location:display.php");
		}
		else
		{
			echo '<script> alert("Data Not Deleted"); </script>';
		}
	}

?>
