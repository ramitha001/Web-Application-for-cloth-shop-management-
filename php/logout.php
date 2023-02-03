<?php

	session_start ();
	
	if(session_destroy())
		
		{
			/*echo '<h1> you have been successfully logout </h1>';*/
			header("refresh:0; url=../html/Home.php");
		}

?>
