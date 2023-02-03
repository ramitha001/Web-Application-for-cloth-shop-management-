<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mens Cloth Item's</title>
	<link rel="stylesheet" type="text/css" href="../css/menclothitems.css">
</head>

<body>
	
		<div class="top">
	<header class="header-1" id="header-1">
		
			<div id="first">
				
				 <a href="Home.php" class="logo1"> <img src="../images/Elegant_wardrobe.png" width="365" height="55" class="logo"> 
				 
		     	 </a>
		         
   	</div>
	
	
	<div class="header-2">

        <div id="navigation-bar">

        	<nav class="navbar">
			
				<ul class="list"><b>
            	 	<li><a href="#shirt1">Shirts</a></li>
					<li><a href="#tshirt1">T-Shirts</a></li>
					<li><a href="#short1">Shorts </a></li>
					<li><a href="#trouser1">Trousers</a></li>
					</b>
				</ul>
			</nav>	
		</div>
				
		</div>
	
<!--/*...................................................................................................*/	
/*...........................................SHIRTS..................................................*/	
/*......................................................................................................*/-->	
	
		
		
	<section class="products" id="shirt1">
<div class="shirtsbar">
    <h1 class="heading"> <span> <font size="20px" color="#FFFFFF">&nbsp; Shirts </font></span> </h1>
</div>
    <div class="box-container">
<?php
	include ("../php/newconnection.php");
	?>
	
<?php

            $query = "select * from menproductitems";
            $select_all_mensclothing_query = mysqli_query($conn,$query);

        while($row = mysqli_fetch_assoc($select_all_mensclothing_query)){

        $pname = $row['p_name'];
        $pdece = $row['p_description'];
        $pprice = $row['p_price'];
        $pimg = $row['p_image'];
?>
	<form action="cart.php" method="post">
      <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="../Products Insert/men items/productImages/<?php echo $pimg; ?>" >
                <div class="icons">
                    
                    <button type="submit" name="add_to_cart" class="cart-btn">add to cart</button>
                    
                </div> 
            </div>
            <div class="content">
                <h3><?php echo $pname ?></h3>
                <div class="price"><?php echo $pprice ?> </div>
            </div>
        </div>
		</form>

     <?php } ?>
	</section>
	
<!--/*......................................................................................................*/
/*...........................................T-SHIRTS...................................................*/
/*......................................................................................................*/-->	
	
	
		<section class="products" id="tshirt1">
			<div class="shirtsbar">
    			<h1 class="heading"> <span> <font size="20px" color="#FFFFFF">&nbsp; T-Shirts </font></span> </h1>
</div>
    <div class="box-container">

      <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="../images/t-shirts/2.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>JOBBS TYPO GRAPHIC PRINTED</h3>
                <div class="price"> Rs 1,995.00 <span>Rs 2,200.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="../images/t-shirts/3.jpg" alt="">
                <div class="icons">
                  
                    <a href="cart.php" class="cart-btn">add to cart</a>
                 
                </div>
            </div>
            <div class="content">
                <h3>GRAPHIC PRINTED </h3>
                <div class="price"> ₨ 2,290.00 <span>₨ 2,400.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="../images/t-shirts/4.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3> LCY MENS POLO </h3>
                <div class="price"> ₨ 3,290.00 <span>₨ 3,300.00</span> </div>
            </div>
        </div>
	
		
      <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="../images/t-shirts/5.jpg" alt="">
                <div class="icons">
                   
                    <a href="#" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3>LBB MENS POLO T-SHIRT </h3>
                <div class="price"> ₨ 1,290.00 <span>₨ 1,230.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-17%</span>
            <div class="image">
                <img src="../images/t-shirts/6.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>LGY MENS POLO T-SHIRT</h3>
                <div class="price"> ₨ 2,890.00 <span>₨ 3,100.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/t-shirts/7.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>MENS PREMIUM BASIC POLO</h3>
                <div class="price"> ₨ 1,690.00 <span>₨ 1,870.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/t-shirts/8.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>WHITE BASIC POLO</h3>
                <div class="price"> ₨ 1,560.00 <span>₨ 1,650.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-7%</span>
            <div class="image">
                <img src="../images/t-shirts/9.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>LEGACY PREMIUM BASIC POLO</h3>
                <div class="price"> ₨ 1,240.00 <span>₨ 1,440.00</span> </div>
            </div>
        </div>
		
    </div>
	</section>
	
	
<!--	/*...............................................................................................*/	
/*...........................................Shorts..................................................*/	
/*......................................................................................................*/-->	
	
	<section class="products" id="short1">
<div class="shirtsbar">
    <h1 class="heading"> <span> <font size="20px" color="#FFFFFF">&nbsp; Shorts </font></span> </h1>
</div>
    <div class="box-container">

      <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="../images/shorts/1.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>JOBBS MENS JOGGER SHORT</h3>
                <div class="price"> Rs 1,195.00 <span>Rs 1,230.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="../images/shorts/2.jpg" alt="">
                <div class="icons">
                  
                    <a href="cart.php" class="cart-btn">add to cart</a>
                 
                </div>
            </div>
            <div class="content">
                <h3>JOBBS MENS NIGHTWEAR SHORT</h3>
                <div class="price"> ₨ 850.00 <span>₨ 900.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="../images/shorts/3.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3> JOBBS NIGHT SHORT </h3>
                <div class="price"> ₨ 740.00 <span>₨ 800.00</span> </div>
            </div>
        </div>



      <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="../images/shorts/4.jpg" alt="">
                <div class="icons">
                   
                    <a href="#" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3>MOOSE STRETCH PREMIUM SHORT </h3>
                <div class="price"> ₨ 1,490.00 <span>₨ 1,630.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-17%</span>
            <div class="image">
                <img src="../images/shorts/5.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>MENS PLAIN LINEN SHORT</h3>
                <div class="price"> ₨ 2,550.00 <span>₨ 2,700.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/shorts/6.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>MENS PLAIN LINEN SHORT</h3>
                <div class="price"> ₨ 1,340.00 <span>₨ 1,560.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/shorts/7.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>MENS PLAIN LINEN SHORT</h3>
                <div class="price"> ₨ 1,090.00 <span>₨ 1,250.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-7%</span>
            <div class="image">
                <img src="../images/shorts/8.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>MENS SPORTS SHORT</h3>
                <div class="price"> ₨ 860.00 <span>₨ 900.00</span> </div>
            </div>
        </div>
		
    </div>
	</section>
	
	<!--/*...............................................................................................*/
/*...........................................Trouser...................................................*/
/*......................................................................................................*/-->	
	
	
		<section class="products" id="trouser1">
			<div class="shirtsbar">
    			<h1 class="heading"> <span> <font size="20px" color="#FFFFFF">&nbsp; Trousers </font></span> </h1>
</div>
    <div class="box-container">

      <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="../images/trousers/1.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>VANTAGE BLACK FORMAL TROUSER</h3>
                <div class="price"> Rs 2,298.00 <span>Rs 2,400.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="../images/trousers/2.jpg" alt="">
                <div class="icons">
                  
                    <a href="cart.php" class="cart-btn">add to cart</a>
                 
                </div>
            </div>
            <div class="content">
                <h3>MENS FORMAL PANTS </h3>
                <div class="price"> ₨ 2,630.00 <span>₨ 2,780.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="../images/trousers/3.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3> MENS TAPERED FIT FORMAL TROUSER </h3>
                <div class="price"> ₨ 3,290.00 <span>₨ 3,300.00</span> </div>
            </div>
        </div>
	
		
      <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="../images/trousers/4.jpg" alt="">
                <div class="icons">
                   
                    <a href="#" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3>EDGE MENS JOGGER PANT </h3>
                <div class="price"> ₨ 2,870.00 <span>₨ 3,280.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-17%</span>
            <div class="image">
                <img src="../images/trousers/5.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>ERGE JOGGER PANT</h3>
                <div class="price"> ₨ 2,350.00 <span>₨ 2,450.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/trousers/6.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>LICC MENS DENIM JEAN</h3>
                <div class="price"> ₨ 2,490.00 <span>₨ 2,870.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/trousers/7.jpg" alt="">
                <div class="icons">
                    
					<form action="cart.php" class="cart-btn" method="post">add to cart</form>
                    
                </div>
            </div>
            <div class="content">
                <h3>BIGG BOSS SLIM FIT STRETCH</h3>
                <div class="price"> ₨ 1,260.00 <span>₨ 1,330.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-7%</span>
            <div class="image">
                <img src="../images/trousers/8.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>JOBBS STRETCH JEANS</h3>
                <div class="price"> ₨ 1,580.00 <span>₨ 1,600.00</span> </div>
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
