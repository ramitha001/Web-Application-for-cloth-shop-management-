<html>
<head>
<meta charset="utf-8">

<title>Women's  Cloth</title>
	<style type="text/css">
		
		body {			
			width:auto;
		}
		
		.table {
			text-align: center;
			font-size: 23px;
			border-radius: 20px;
			border-color:#254DCB; 
			box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
		}
		
		
		table {
 			 border: 2;
  			 width: 100%;
			 border-radius: 20px;
		}

		th {
 			 text-align: center;
  			 padding: 15px;
			 background-color: #B0D2E5;
		}

		tr:nth-child(even) {background-color: #F8E6CA;}

		.btn{
			font-size: 20px;
			border-radius: 15px;
		}
		
		
		
	</style>

 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
</head>

<body>
<h1 align="center" > <font color="#66D83E"> <font size="30">  Women's Cloth Items </font>  </font>  </h1>
<center>
    <table class="table" border="2">
        <tr>
          <th>Women ID</th>
          <th>Product Name</th>
		  <th>product description</th>
          <th>Product Price</th>
		  <th>Update Product</th>	
        
        </tr>
        <?php
        {
			include ("../../php/newconnection.php");
			
          $query = "select * from womenproductitems";
          $select_cloths = mysqli_query($conn, $query);

          while ($row = mysqli_fetch_assoc($select_cloths)) {
            $p_women_id = $row['p_women_id'];
            $p_name = $row['p_name'];
            $p_description = $row['p_description'];
            $p_price = $row['p_price'];
            


            echo "<tr>";
            echo "<td>$p_women_id</td>";
            echo "<td>$p_name</td>";
            echo "<td>$p_description</td>";
            echo "<td>$p_price</td>";
           
            echo "<td><a href='women update function.php?edit={$p_women_id}'>Update</a></td>";
                      
            echo "</tr>";
          }
        }
        ?>

      </table>
    <p>
      <a href="../../html/admin.php#update"><input type="button" name="button" id="button" value="Back" class="btn"></a>
    </p>
      </center>
   
      </body>
</html>