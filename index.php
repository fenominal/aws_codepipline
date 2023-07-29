<?php require("top.php");?>

        <!-- Start Slider Area -->

        <!-- Start Slider Area -->
		<section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
					<marquee     style="color:blue;"><b> <i padding="10px">"આત્મનિર્ભર ભારત"                                     "Let's Together To Make Strong India"</b></i></marquee>
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Types Of Stores</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product__list clearfix mt--30">
							<?php
								$categories="";
								$records = mysqli_query($con,"select * from categories where status=1"); // fetch data from database

								while($list = mysqli_fetch_array($records))
								{
							?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb" >
                                        <a href="city.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images" >
                                        </a>
                                    </div>
								
                                    <div class="fr__product__inner">
										
									
                                        
                                        <ul class="fr__pro__prize">
                                            
											<li><h4><a href="city.php?id=<?php echo $row['id'];?>&p_id=<?php echo $list['id']; ?>"><?php echo $list['categories']?></a></h4></li>
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
