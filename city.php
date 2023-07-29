<?php require("top.php");?>

		<section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Select The <b>CITY</b> Where you want home delivery </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product__list clearfix mt--30">
							<?php
								$categories_id="";
								$categories_id = $_GET['id'];
						
								//echo $categories_id;
								$records = mysqli_query($con,"select * from city"); // fetch data from database

								while($list = mysqli_fetch_array($records))
								{
							?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                  
                                 
                                    <div class="fr__product__inner">
										
									
                                        
                                        <ul class="fr__pro__prize">
                                            
											<li><h4><a href="store.php?id=<?php echo $list['id']?>&id1=<?php echo $categories_id;?>"><?php echo $list['city']?></a></h4></li>
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
