 <?php include "newconnection.php";	?>
<?php
if (isset($_POST['username']))
{
	session_start();	
	$_SESSION['name']=$_POST['username'];	
}
?>
<?php
 $message ="";
 if(count($_POST) >0)
		{
			$username=$_POST['username'];
			$pass = md5($_POST['password']);
			$usertype=$_POST['usertype'];		
			$sql = "SELECT * FROM empreg WHERE fname='".$username."' and password = '".$pass."' and usertype='".$usertype."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)==1)
				{
					while($row=mysqli_fetch_array($result))
							{
								echo'<script type="text/javascript">alert("you are login successfully and you are logined as ' .$row['usertype'].'")		</script>';
							}
			if($usertype==="admin")
				{ 
?>
					<script type="text/javascript">
						window.location.href="../html/admin.php";
                    </script>
		<?php
				}else
					{
		?>
					<script type="text/javascript">
						window.location.href="../html/Home.php";
                     </script>
		<?php
					}
		}else
		 	{
				echo 'Please Enter valid details ';
			}
		}
?>


						

<html>
<head>
<title> User Login </title>
<link rel="stylesheet" type="text/css" href="../css/loginform.css" />
<style type="text/css">
body {
	
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<p> </p>
<p></p>
<p> </p>


     <div class="container">
        <h2>Login</h2>
<form name="Login" method="post" action="" align="center">
   		      <p>
   		        <input type="text" name="username" id="username" placeholder="username" >
   		        <input type="password" name="password" id="password" placeholder="Password" >
   		      </p>
   		      <p>
   		        <label for="usertype">usertype</label>
   		        <select name="usertype" id="usertype">
   		          <option value="admin">admin</option>
   		          <option value="user">user</option>
	            </select>
   		      </p>
       		     <div class="btns">
          		  <button type="submit" name="submit" > Login </button>
            	  <a href="../html/registerform.html"><button type="button" id="sign-up">Sign Up</button></a>
                  <button type="reset"> Reset </button>
					 <button type="submit" formaction="../html/Home.php"> Back </button>
           		 </div>
            
        	</form>
    </div>
	
        	
    
</form>
</body>
</html>