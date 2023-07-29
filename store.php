
<?php require("top.php");?>

        
        
        <!-- Start Slider Area -->
		<section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Store List</h2>
                        </div>
                    </div>
                </div>
		
					
                <div class="row">
                    <div class="product__list clearfix mt--30">
							<?php
								$categories="";
								$name="";
								//echo $_GET['id'];
								//echo $_GET['id1'];
								
								$city_id= $_GET['id'];
								$categories_id= $_GET['id1'];
								
								$records = mysqli_query($con,"select * from store where status=1 and categories_id=$categories_id and city_id=$city_id"); // fetch data from database
								
								while($list = mysqli_fetch_array($records))
								{
							?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                       <a href="store_product.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                        </a>
                                    </div>
                                    
                                    <div class="fr__product__inner">
										
									
                                        
                                        <ul class="fr__pro__prize">
                                            
											<li><h4><a href="store_product.php?id=<?php echo $list['id']?>"><?php echo $list['store_name']?></a></h4></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
							<?php } ?>
                        </div>
                </div>
            </div>
        </section>						

<?php require("footer.php");?>

