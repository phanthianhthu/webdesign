<?php
include_once("connection.php");
?>
     <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/h4-slide44.jpg" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Local Brand <span class="primary"><strong></strong></span>
							</h2>
							<h4 class="caption subtitle">T-Shirt</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="img/h4-slide2.jpg" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								by one, get one <span class="primary">50% <strong>off</strong></span>
							</h2>
							<h4 class="caption subtitle">young and dynamic.*</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="img/h4-slide33.jpg" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								T-Shirt <span class="primary">Store <strong>Local Brand</strong></span>
							</h2>
							<h4 class="caption subtitle">Select Item</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="img/h4-slide44.jpg" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
								T-Shirt <span class="primary">Local <strong>Brand</strong></span>
							</h2>
							<h4 class="caption subtitle">young and dynamic</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <!--Gioi thieu cac chuc nang-->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Exchange, return every 30 days</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free ship</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Payment security</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New Product</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Product</h2>
                        <div class="product-carousel">
                        
                        <!--Load san pham tu DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
		
			            
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
				            <!--Một sản phẩm -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="product-imgs/<?php echo $row['Pro_image']?>" width="150" height="150">
                                    <div class="product-hover">
                                        <a href="?func=dathang&ma=<?php echo  $row['Product_ID']?>" class="add-to-cart-link" ><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="?page=quanly_chitietsanpham&ma=<?php echo  $row['Product_ID']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="?page=quanly_chitietsanpham&ma=<?php echo  $row['Product_ID']?>"><?php echo  $row['Product_Name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['Price']?></ins> <del><?php echo  $row['oldPrice']?></del>
                                </div> 
                            </div>
                
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/brand11.jpg" alt="">
                            <img src="img/brand22.jpg" alt="">
                            <img src="img/brand44.png" alt="">
                            <img src="img/brand55.jpg" alt="">
                            <img src="img/brand55.jpg" alt="">
                            <img src="img/brand11.jpg" alt="">
                            <img src="img/brand22.jpg" alt="">
                            <img src="img/brand44.jpg" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
   
    
   
  