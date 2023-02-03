<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> kid's clothing items</title>
	<link rel="stylesheet" type="text/css" href="../css/kidclothitems.css">
</head>

<body>
	
	<div class="top">
	<header class="header-1" id="header-1">
		
			<div id="first">
				
				 <a href="Home.php" class="logo1"> <img src="../images/Elegant_wardrobe.png" width="365" height="55" class="logo"> 
				 
		     	 </a>
		         
   	</div>
	
	
	<h1 align="center"> <font size="30px" color="#2805D7"> Kid's Items </font> </h1>
	
	<div class="header-2">

        <div id="navigation-bar">

        	<nav class="navbar">
			
				<ul class="list"><b>
            	 	<li><a href="#boy1">Boys Item's</a></li>
					<li><a href="#girl1">Girls Item's</a></li>
					
					</b>
				</ul>
			</nav>	
		</div>
				
		</div>
	
<!--/*...................................................................................................*/	
/*...........................................boys..................................................*/	
/*......................................................................................................*/-->	
	
	<section class="products" id="boy1">
<div class="shirtsbar">
    <h1 class="heading"> <span> <font size="20px" color="#FFFFFF">&nbsp; Boys items </font></span> </h1>
</div>
    <div class="box-container">

		<?php
	include ("../php/newconnection.php");
	?>
	
<?php

            $query = "select * from kidboyproductitems";
            $select_all_mensclothing_query = mysqli_query($conn,$query);

        while($row = mysqli_fetch_assoc($select_all_mensclothing_query)){

        $pname = $row['p_name'];
        $pdece = $row['p_description'];
        $pprice = $row['p_price'];
        $pimg = $row['p_image'];
?>
	
      <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="../Products Insert/kid items/productImages/<?php echo $pimg; ?>" >
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div> 
            </div>
            <div class="content">
                <h3><?php echo $pname ?></h3>
                <div class="price"><?php echo $pprice ?> </div>
            </div>
        </div>

     <?php } ?>

   
		
      <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="../images/kids Items/boy/1.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>BOYS PRINTED CASUAL SHIRT</h3>
                <div class="price"> Rs 1,890.00 <span>Rs 2,000.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="../images/kids Items/boy/2.jpg" alt="">
                <div class="icons">
                  
                    <a href="cart.php" class="cart-btn">add to cart</a>
                 
                </div>
            </div>
            <div class="content">
                <h3>BUG JUNIOR BOYS STRIPED SHIRT</h3>
                <div class="price"> ₨ 2,100.00 <span>₨ 2,300.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="../images/kids Items/boy/3.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3> BOYS GAP CHECKED GRUNGE SHIRT </h3>
                <div class="price"> ₨ 2,360.00 <span>₨ 2,450.00</span> </div>
            </div>
        </div>



      <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="../images/kids Items/boy/4.jpg" alt="">
                <div class="icons">
                   
                    <a href="#" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3> BUG JUNIOR BOYS SHIRT </h3>
                <div class="price"> ₨ 1,390.00 <span>₨ 1,450.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-17%</span>
            <div class="image">
                <img src="../images/kids Items/boy/5.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>BUG JUNIOR BOYS CHECKED SHIRT</h3>
                <div class="price"> ₨ 2,390.00 <span>₨ 2,560.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/kids Items/boy/6.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>BOYS SLEEVE SHIRT</h3>
                <div class="price"> ₨ 2,690.00 <span>₨ 2,870.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/kids Items/boy/7.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>BOYS LONG SLEEVE PRINTED SHIRT</h3>
                <div class="price"> ₨ 1,200.00 <span>₨ 1,340.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-7%</span>
            <div class="image">
                <img src="../images/kids Items/boy/8.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>BOYS LONG PRINTED CASUAL SHIRT</h3>
                <div class="price"> ₨ 2,050.00 <span>₨ 2,250.00</span> </div>
            </div>
        </div>
		
    </div>
	</section>
	
		
		<!--/*...................................................................................................*/	
/*...........................................Girls..................................................*/	
/*......................................................................................................*/-->	
	
	<section class="products" id="girl1">
<div class="shirtsbar">
    <h1 class="heading"> <span> <font size="20px" color="#FFFFFF">&nbsp; girl's items </font></span> </h1>
</div>
    <div class="box-container">

      <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="../images/kids Items/girl/1.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>FLORAL PRINTED FRONT BOW BLOUSE</h3>
                <div class="price"> Rs 1,890.00 <span>Rs 2,000.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="../images/kids Items/girl/2.jpg" alt="">
                <div class="icons">
                  
                    <a href="cart.php" class="cart-btn">add to cart</a>
                 
                </div>
            </div>
            <div class="content">
                <h3>AMY POLKA DOT TOP</h3>
                <div class="price"> ₨ 2,100.00 <span>₨ 2,300.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="../images/kids Items/girl/3.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3> AMY GIRLS BUTTERFLY BLOUSE </h3>
                <div class="price"> ₨ 2,360.00 <span>₨ 2,450.00</span> </div>
            </div>
        </div>



      <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="../images/kids Items/girl/4.jpg" alt="">
                <div class="icons">
                   
                    <a href="#" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3> AMY GIRLS FLORAL PRINTED BLOUSE </h3>
                <div class="price"> ₨ 1,390.00 <span>₨ 1,450.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-17%</span>
            <div class="image">
                <img src="../images/kids Items/girl/5.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>BOW TIE CROPPED BLOUSE</h3>
                <div class="price"> ₨ 2,390.00 <span>₨ 2,560.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/kids Items/girl/6.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>AMY GIRLS PRINTED PIN BLOUSE</h3>
                <div class="price"> ₨ 2,690.00 <span>₨ 2,870.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/kids Items/girl/7.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>AMY SOLID COLOR TOP</h3>
                <div class="price"> ₨ 890.00 <span>₨ 940.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-7%</span>
            <div class="image">
                <img src="../images/kids Items/girl/8.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>AMY OFF SHOULDER TOP</h3>
                <div class="price"> ₨ 750.00 <span>₨ 850.00</span> </div>
            </div>
        </div>
		
    </div>
	</section>
	<footer>
	<div class="footer">
 		<a href="Home.html"><img src="../images/footerlogo.png" class="footerlogo" ></a>
		<p>
		  Online Cloth Shop
		</p>
	</div>
	</footer>
		</header>
	</div>
</body>
</html>
