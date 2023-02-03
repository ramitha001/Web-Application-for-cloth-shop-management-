<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <title>men update Function</title>
	<link rel="stylesheet" type="text/css" href="menupdatefunctioncss.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php
	include ("../../php/newconnection.php");
	
if (isset($_GET['edit']))
{
    $pid = $_GET['edit'];
}
$query = "select * from menproductitems where p_men_id = $pid ";
$update_cloths = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($update_cloths))
{
    $id = $row['p_men_id'];
    $name = $row['p_name'];
    $description = $row['p_description'];      
    $price = $row['p_price'];
    $img = $row['p_image'];
}
if (isset($_POST['update']))
{
    $name = $_POST['Name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
   

	
	
   $img= $_FILES['img']['name'];
	 $img_tmp= $_FILES['img']['tmp_name'];

	
	
	move_uploaded_file($img_tmp,"../../Products Insert/women items/productImages/$img");

    $query = "UPDATE menproductitems set ";
    $query .= "p_name = '{$name}', ";
    $query .= "p_description = '{$description}', ";
    $query .= "p_price = '{$price}', ";
    $query .= "p_image   = '{$img}' ";
    $query .= "where p_men_id  = {$id} ";


    $update = mysqli_query($conn, $query);
    $msg = "$name Cloth Detail Succesfully Updated  ";
    echo "<script type='text/javascript'>alert('$msg');</script>";

    if (!$update)
    {
        die("QUERY FAILED" . mysqli_error($conn));
    }
}
?>

<body>


    <div class="updateform">
       <center>
        <h3>Male Cloth Update</h3>

        <form action="" method="POST" enctype="multipart/form-data">

            <p>Men Cloth ID</p>
            <input value="<?php echo $id; ?>" type="text" disabled name="ID" placeholder="">

            <p>Product Name</p>
            <input value="<?php echo $name; ?>" type="text" name="Name" placeholder="">

            <p>product description</p>
            <input value="<?php echo $description; ?>" type="text" name="description" placeholder="">

            <p>Product Price</p>
            <input value="<?php echo $price; ?>" type="text" name="price" placeholder="">
			
            <p>Product Image</p>
            <img width="50" src="../img/<?php echo $img; ?>" alt="" name ="img">
            <input  type="file" name="img">
         </center>
		   
            <button name="update" type="submit">Update</button> <br />
			<button name="Back" type="submit" formaction="mendisplay.php">Back</button>
			
        </form>
    </div>
	
	<div class="updateform2">
     <!-- for white tranceparent-->
    </div>
   
</body>

</html>
