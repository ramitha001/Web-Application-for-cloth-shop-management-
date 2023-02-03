
<?php
include ('newconnection.php');

	if(isset($_POST['submit']))
		{
			$fname=$_POST['username'];
			$email=$_POST['email'];
			$pass =($_POST['password']);
			$usertype =$_POST['usertype'];
			
			$pass = md5($pass);
			$sql = "INSERT INTO empreg ". "(fname,email,password,usertype) "."VALUES('$fname','$email','$pass','$usertype')";
			
			$results = mysqli_query($conn,$sql);
				
					if(!$results)
						{
							die ('Could not enter data: '.mysqli_error($conn));
						}
						else
							{
								$msg = " Succesfully Registerd  ";
    							echo "<script type='text/javascript'>alert('$msg');</script>";
								header("refresh:0; url=chechlogin.php");
							}
							}else
								{
									$msg ="Your form is not submitted yet please fill the form and visit again";
									echo "<script type='text/javascript'>alert('$msg');</script>";
								}
							
				
  		
?>

 
sdsdkjias,jasjanasa  asasisjk
hkajsioask
asaesweszsawdsddw
ramitha gurugedhjngjgmasasjkvlkxcvm,iogjmisdjwdkdfjnefiemskfm,skfmsiofmosfjj



fsfj




<div class="main">
	<div class="second">
		
	</div>
</div>