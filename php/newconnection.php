
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Selecting MySql Database </title>
</head>
<body>

<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	
	$conn = mysqli_connect($dbhost , $dbuser , $dbpass);
	
	if(!$conn)
		{ 
			die ('Could not connect: ' . mysqli_error ($conn));
		}
		/*echo 'Connected Successfully:';*/
		
		$db=mysqli_select_db ($conn , 'elegantwardrobe');
		
		if (!$db)
			{
		/*		echo ' Select Database First';	*/
			}
			else
			{
			/*echo ' Database is Selected';*/
			}
?>

</body>
</html>