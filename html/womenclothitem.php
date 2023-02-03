<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Women's Cloth Item's</title>
	<link rel="stylesheet" type="text/css" href="../css/womenclothitems.css">
</head>

<body>
	
	<div class="top">
	<header class="header-1" id="header-1">
		
			<div id="first">
				
				 <a href="Home.php" class="logo1"> <img src="../images/Elegant_wardrobe.png" width="365" height="55" class="logo"> 
				 
		     	 </a>
		         
   	</div>
	
	<h1 align="center"> <font size="30px" color="#2805D7"> Women's Items </font> </h1>
	
	<div class="header-2">

        <div id="navigation-bar">

        	<nav class="navbar">
			
				<ul class="list"><b>
            	 	<li><a href="#Skirt1">Skirt</a></li>
					<li><a href="#Blouses1">Blouses</a></li>
					<li><a href="#Jeans1">Jeans </a></li>
					<li><a href="#saree1">saree</a></li>
					</b>
				</ul>
			</nav>	
		</div>
				
		</div>
	
<!--/*...................................................................................................*/	
/*...........................................Skirts..................................................*/	
/*......................................................................................................*/-->	
	
	<section class="products" id="Skirt1">
<div class="shirtsbar">
    <h1 class="heading"> <span> <font size="20px" color="#FFFFFF">&nbsp; Skirts </font></span> </h1>
</div>
    <div class="box-container">
		<?php
	include ("../php/newconnection.php");
	?>
	
<?php

            $query = "select * from womenproductitems";
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
                <img src="../Products Insert/women items/productImages/<?php echo $pimg; ?>" >
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
            <span class="discount">-5%</span>
            <div class="image">
                <img src="../images/Skirts/3.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3> AMANI PAIGE PRINTED MIDI SKIRT </h3>
                <div class="price"> ₨ 2,360.00 <span>₨ 2,450.00</span> </div>
            </div>
        </div>



      <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="../images/Skirts/4.jpg" alt="">
                <div class="icons">
                   
                    <a href="#" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3> LAUREL GATHERED WAIST LINEN SKIRT </h3>
                <div class="price"> ₨ 2,390.00 <span>₨ 2,450.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-17%</span>
            <div class="image">
                <img src="../images/Skirts/5.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>AMANI WOMENS TIERED MIDI SKIRT</h3>
                <div class="price"> ₨ 2,390.00 <span>₨ 2,560.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/Skirts/6.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>AMANI WOMENS TIERED MIDI SKIRT</h3>
                <div class="price"> ₨ 2,690.00 <span>₨ 2,870.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/Skirts/7.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>WOMENS DITSY FLORAL MIDI SKIRT</h3>
                <div class="price"> ₨ 3,200.00 <span>₨ 3,340.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-7%</span>
            <div class="image">
                <img src="../images/Skirts/8.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>WOMENS DITSY FLORAL MIDI SKIRT</h3>
                <div class="price"> ₨ 1,050.00 <span>₨ 1,250.00</span> </div>
            </div>
        </div>
		
    </div>
	</section>
	
	
	
	<!--/*...................................................................................................*/	
/*........................................ Blouses & Shirts.............................................*/	
/*......................................................................................................*/-->	
	
	<section class="products" id="Blouses1">
<div class="shirtsbar">
    <h1 class="heading"> <span> <font size="20px" color="#FFFFFF">&nbsp;  Blouses & Shirts </font></span> </h1>
</div>
    <div class="box-container">

      <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="../images/Blouses & Shirts/1.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>GIVO BLENDA SMOCKED HEM TOP</h3>
                <div class="price"> Rs 1,890.00 <span>Rs 2,000.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="../images/Blouses & Shirts/2.jpg" alt="">
                <div class="icons">
                  
                    <a href="cart.php" class="cart-btn">add to cart</a>
                 
                </div>
            </div>
            <div class="content">
                <h3> AMANI ELIZE PEPLUM TOP</h3>
                <div class="price"> ₨ 2,100.00 <span>₨ 2,300.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="../images/Blouses & Shirts/3.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3> AMANI PEPLUM TOP </h3>
                <div class="price"> ₨ 2,360.00 <span>₨ 2,450.00</span> </div>
            </div>
        </div>



      <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="../images/Blouses & Shirts/4.jpg" alt="">
                <div class="icons">
                   
                    <a href="#" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3> AMANI GRETA BELL SLEEVE TOP </h3>
                <div class="price"> ₨ 2,390.00 <span>₨ 2,450.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-17%</span>
            <div class="image">
                <img src="../images/Blouses & Shirts/5.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>AMANI GRETA SLEEVE TOP</h3>
                <div class="price"> ₨ 2,390.00 <span>₨ 2,560.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/Skirts/6.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>AMANI WOMENS TIERED MIDI SKIRT</h3>
                <div class="price"> ₨ 2,690.00 <span>₨ 2,870.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/Skirts/7.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>WOMENS DITSY FLORAL MIDI SKIRT</h3>
                <div class="price"> ₨ 3,200.00 <span>₨ 3,340.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-7%</span>
            <div class="image">
                <img src="../images/Skirts/8.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>WOMENS DITSY FLORAL MIDI SKIRT</h3>
                <div class="price"> ₨ 1,050.00 <span>₨ 1,250.00</span> </div>
            </div>
        </div>
		
    </div>
	</section>
	
	
		<!--/*...................................................................................................*/	
/*........................................ Jeans.............................................*/	
/*......................................................................................................*/-->	
	
	<section class="products" id="Jeans1">
<div class="shirtsbar">
    <h1 class="heading"> <span> <font size="20px" color="#FFFFFF">&nbsp;  Jeans </font></span> </h1>
</div>
    <div class="box-container">

      <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="../images/Jeans/1.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>MISS ME DISTRESSED SKINNY JEAN</h3>
                <div class="price"> Rs 1,890.00 <span>Rs 2,000.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="../images/Jeans/2.jpg" alt="">
                <div class="icons">
                  
                    <a href="cart.php" class="cart-btn">add to cart</a>
                 
                </div>
            </div>
            <div class="content">
                <h3> AMANI SLIM CUT DENIM JEAN</h3>
                <div class="price"> ₨ 2,100.00 <span>₨ 2,300.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="../images/Jeans/3.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3> LICC FLARED DENIM JEAN </h3>
                <div class="price"> ₨ 2,360.00 <span>₨ 2,450.00</span> </div>
            </div>
        </div>



      <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="../images/Jeans/4.jpg" alt="">
                <div class="icons">
                   
                    <a href="#" class="cart-btn">add to cart</a>
                   
                </div>
            </div>
            <div class="content">
                <h3> MISS ME WOMENS HIGH RISE DENIM </h3>
                <div class="price"> ₨ 2,390.00 <span>₨ 2,450.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-17%</span>
            <div class="image">
                <img src="../images/Jeans/5.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3> HIGH RISE DENIM</h3>
                <div class="price"> ₨ 2,390.00 <span>₨ 2,560.00</span> </div>
            </div>
        </div>

      <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/Jeans/6.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>MISS ME HIGH WAIST SKINNY JEANS</h3>
                <div class="price"> ₨ 2,690.00 <span>₨ 2,870.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="../images/Jeans/7.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>LICC LADIES DENIM SKINNY JEANS</h3>
                <div class="price"> ₨ 3,200.00 <span>₨ 3,340.00</span> </div>
            </div>
        </div>

		 <div class="box">
            <span class="discount">-7%</span>
            <div class="image">
                <img src="../images/Jeans/8.jpg" alt="">
                <div class="icons">
                    
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    
                </div>
            </div>
            <div class="content">
                <h3>LADIES DENIM</h3>
                <div class="price"> ₨ 1,050.00 <span>₨ 1,250.00</span> </div>
            </div>
        </div>
		
    </div>
	</section>
	
			<!--/*...................................................................................................*/	
/*........................................ Saree.............................................*/	
/*......................................................................................................*/-->	
	


		 
		
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
