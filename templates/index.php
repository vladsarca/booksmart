<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/png" href="assets/img/booksmart-favicon1.png"/>
        <link type="text/css" href="assets/css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Shanti&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <title>Booksmart</title>
    </head>
    <body>
        <header class="masthead">
            <?php navi(); ?>
            <div class="container h-50">
              <div class="row h-100 align-items-center">
                    <div class="col-xl-7 col-md-7">
                        <div class="introduction-photo">
                            <img src="assets/img/book-lovers1.png" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-5" id="introduction" style="padding-top: 275px; text-align: center;">
                        <svg class="titlu-booksmart" viewBox="0 0 960 300">
                            <symbol id="s-text">
                                <text text-anchor="middle" x="50%" y="80%">BOOKSMART</text>
                            </symbol>
                        
                            <g class = "g-ants">
                                <use xlink:href="#s-text" class="text-copy"></use>
                                <use xlink:href="#s-text" class="text-copy"></use>
                                <use xlink:href="#s-text" class="text-copy"></use>
                                <use xlink:href="#s-text" class="text-copy"></use>
                                <use xlink:href="#s-text" class="text-copy"></use>
                            </g>
                        </svg>
                            <h3>Read everything, here, now.</h3>
                            <p style="font-size: larger; margin-top: 20px;">While you have the biggest library at your fingertips, you also save the world by using it!<br> No tree is cut down for paper production, as the books are all virtual, obviously.</p>
                            <a class="btn-grad mx-auto" style="background-image: linear-gradient(to right, #DD5E89 0%, #F7BB97  51%, #DD5E89  100%);">Start reading now</a>
                    </div>
              </div>
            </div>
          </header>
        
          <div class="section-block-grey" id="features">
            <div class="container">
                <div class="section-heading center-holder">
                    <h3>Platform features</h3>
                    <div class="section-heading-line"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        <br>incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="row mt-60">
                    <div class="col-md-4 col-sm-12 col-12">
                        <div class="serv-section-2">
                            <div class="serv-section-2-icon"> <i class="fas fa-gem"></i> </div>
                            <div class="serv-section-desc">
                                <h4>Planning</h4>
                                <h5>Business Planning</h5> </div>
                            <div class="section-heading-line-left"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12">
                        <div class="serv-section-2 serv-section-2-act">
                            <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="fas fa-cogs"></i> </div>
                            <div class="serv-section-desc">
                                <h4>Management</h4>
                                <h5>Retirement Planning</h5> </div>
                            <div class="section-heading-line-left"></div>
                           
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12">
                        <div class="serv-section-2">
                            <div class="serv-section-2-icon"> <i class="fas fa-signature"></i> </div>
                            <div class="serv-section-desc">
                                <h4>Accumulation</h4>
                                <h5>Support and Sell</h5> </div>
                            <div class="section-heading-line-left"></div>
                            
                        </div>
                    </div>
                </div>
                <div class="row mt-60">
                    <div class="col-md-4 col-sm-12 col-12">
                        <div class="serv-section-2">
                            <div class="serv-section-2-icon"> <i class="fas fa-shield-alt"></i> </div>
                            <div class="serv-section-desc">
                                <h4>Security </h4>
                                <h5>Secure Business</h5> </div>
                            <div class="section-heading-line-left"></div>
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12">
                        <div class="serv-section-2 serv-section-2-act">
                            <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="far fa-clock"></i> </div>
                            <div class="serv-section-desc">
                                <h4>24/7 Available </h4>
                                <h5>All time available </h5> </div>
                            <div class="section-heading-line-left"></div>
                           
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12">
                        <div class="serv-section-2">
                            <div class="serv-section-2-icon"> <i class="fas fa-signature"></i> </div>
                            <div class="serv-section-desc">
                                <h4> Customer Support </h4>
                                <h5>Support and Sell</h5> </div>
                            <div class="section-heading-line-left"></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <section id="trending" style="background-image: url(assets/img/white-book-page.jpg); background-size: cover;">
        <div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="h1-carousel">Trending <b>Books</b></h1>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://covers.openlibrary.org/b/olid/OL24976655M-M.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>The Jungle Book</h4>
									<p class="item-price"><span></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://covers.openlibrary.org/b/id/8234346-M.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Don Quixote of la Mancha</h4>
									<p class="item-price"><span></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://covers.openlibrary.org/b/id/1030452-L.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>1000 chairs</h4>
									<p class="item-price"><span></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>			
                        <div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://covers.openlibrary.org/w/id/3179668-L.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>The Adventures of Tom Sawyer</h4>
									<p class="item-price"><span></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>					
							
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
</section>
<div id="generic_price_table">   
    <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--PRICE HEADING START-->
                        <div class="price-heading clearfix">
                            <h1 class="h1-carousel"><b>Subscriptions</b></h1>
                        </div>
                        <!--//PRICE HEADING END-->
                    </div>
                </div>
            </div>
            <div class="container">
                
                <!--BLOCK ROW START-->
                <div class="row">
                    <div class="col-md-4">
                    
                        <!--PRICE CONTENT START-->
                        <div class="generic_content  clearfix" style="background: #f6f6f6; box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.16);">
                            
                            <!--HEAD PRICE DETAIL START-->
                            <div class="generic_head_price clearfix">
                            
                                <!--HEAD CONTENT START-->
                                <div class="generic_head_content clearfix">
                                
                                    <!--HEAD START-->
                                    <div class="head_bg"></div>
                                    <div class="head">
                                        <span>Basic</span>
                                    </div>
                                    <!--//HEAD END-->
                                    
                                </div>
                                <!--//HEAD CONTENT END-->
                                
                                <!--PRICE START-->
                                <div class="generic_price_tag clearfix">	
                                    <span class="price">
                                        <span class="sign">$</span>
                                        <span class="currency">99</span>
                                        <span class="cent">.99</span>
                                        <span class="month">/MON</span>
                                    </span>
                                </div>
                                <!--//PRICE END-->
                                
                            </div>                            
                            <!--//HEAD PRICE DETAIL END-->
                            
                            <!--FEATURE LIST START-->
                            <div class="generic_feature_list">
                                <ul>
                                    <li><span>2GB</span> Bandwidth</li>
                                    <li><span>150GB</span> Storage</li>
                                    <li><span>12</span> Accounts</li>
                                    <li><span>7</span> Host Domain</li>
                                    <li><span>24/7</span> Support</li>
                                </ul>
                            </div>
                            <!--//FEATURE LIST END-->
                            
                            <!--BUTTON START-->
                            <div class="generic_price_btn clearfix">
                                <a class="" href="">Sign up</a>
                            </div>
                            <!--//BUTTON END-->
                            
                        </div>
                        <!--//PRICE CONTENT END-->
                            
                    </div>
                    
                    <div class="col-md-4">
                    
                        <!--PRICE CONTENT START-->
                        <div class="generic_content  clearfix" style="background: #f6f6f6;box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.16);">
                            
                            <!--HEAD PRICE DETAIL START-->
                            <div class="generic_head_price clearfix">
                            
                                <!--HEAD CONTENT START-->
                                <div class="generic_head_content clearfix">
                                
                                    <!--HEAD START-->
                                    <div class="head_bg"></div>
                                    <div class="head">
                                        <span>Standard</span>
                                    </div>
                                    <!--//HEAD END-->
                                    
                                </div>
                                <!--//HEAD CONTENT END-->
                                
                                <!--PRICE START-->
                                <div class="generic_price_tag clearfix">	
                                    <span class="price">
                                        <span class="sign">$</span>
                                        <span class="currency">199</span>
                                        <span class="cent">.99</span>
                                        <span class="month">/MON</span>
                                    </span>
                                </div>
                                <!--//PRICE END-->
                                
                            </div>                            
                            <!--//HEAD PRICE DETAIL END-->
                            
                            <!--FEATURE LIST START-->
                            <div class="generic_feature_list">
                                <ul>
                                    <li><span>2GB</span> Bandwidth</li>
                                    <li><span>150GB</span> Storage</li>
                                    <li><span>12</span> Accounts</li>
                                    <li><span>7</span> Host Domain</li>
                                    <li><span>24/7</span> Support</li>
                                </ul>
                            </div>
                            <!--//FEATURE LIST END-->
                            
                            <!--BUTTON START-->
                            <div class="generic_price_btn clearfix">
                                <a class="" href="">Sign up</a>
                            </div>
                            <!--//BUTTON END-->
                            
                        </div>
                        <!--//PRICE CONTENT END-->
                            
                    </div>
                    <div class="col-md-4">
                    
                        <!--PRICE CONTENT START-->
                        <div class="generic_content  clearfix" style="background: #f6f6f6; box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.16);">
                            
                            <!--HEAD PRICE DETAIL START-->
                            <div class="generic_head_price clearfix">
                            
                                <!--HEAD CONTENT START-->
                                <div class="generic_head_content clearfix">
                                
                                    <!--HEAD START-->
                                    <div class="head_bg"></div>
                                    <div class="head">
                                        <span>Unlimited</span>
                                    </div>
                                    <!--//HEAD END-->
                                    
                                </div>
                                <!--//HEAD CONTENT END-->
                                
                                <!--PRICE START-->
                                <div class="generic_price_tag clearfix">	
                                    <span class="price">
                                        <span class="sign">$</span>
                                        <span class="currency">299</span>
                                        <span class="cent">.99</span>
                                        <span class="month">/MON</span>
                                    </span>
                                </div>
                                <!--//PRICE END-->
                                
                            </div>                            
                            <!--//HEAD PRICE DETAIL END-->
                            
                            <!--FEATURE LIST START-->
                            <div class="generic_feature_list">
                                <ul>
                                    <li><span>2GB</span> Bandwidth</li>
                                    <li><span>150GB</span> Storage</li>
                                    <li><span>12</span> Accounts</li>
                                    <li><span>7</span> Host Domain</li>
                                    <li><span>24/7</span> Support</li>
                                </ul>
                            </div>
                            <!--//FEATURE LIST END-->
                            
                            <!--BUTTON START-->
                            <div class="generic_price_btn clearfix">
                                <a class="" href="">Sign up</a>
                            </div>
                            <!--//BUTTON END-->
                            
                        </div>
                        <!--//PRICE CONTENT END-->
                            
                    </div>
                </div>	
                <!--//BLOCK ROW END-->
                
            </div>
        </section>             
    </div>
    <section class="py-5 text-white" style="background-image: linear-gradient( to left, #FAD7A1 0%, #E96D71 100%);">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="assets/img/booksmart-favicon.png" style="width: 175px; height: 175px;">
                </div>
                <div class="col-md-3">
                    <h4><b>Quick Links</b></h4>
                    <ul class="list-unstyled mt-3">
                        <li><a href="#" class="text-white">How it works?</a></li>
                        <div class="mb-2"></div>
                        <li><a href="#" class="text-white">Career</a></li>
                        <div class="mb-2"></div>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <div class="mb-2"></div>
                        <li><a href="#" class="text-white">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4><b>Support</b></h4>
                    <ul class="list-unstyled mt-3">
                        <li><a href="#" class="text-white">About Us</a></li>
                        <div class="mb-2"></div>
                        <li><a href="#" class="text-white">Contact Us</a></li>
                        <div class="mb-2"></div>
                        <li><a href="#" class="text-white">Our Team</a></li>
                        <div class="mb-2"></div>
                        <li><a href="#" class="text-white">Testimonials</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4><b>Contact Us</b></h4>
                    <ul class="list-unstyled mt-3">
                        <li><a href="#" class="text-white">How it works?</a></li>
                        <div class="mb-2"></div>
                        <li><a href="#" class="text-white">Career</a></li>
                        <div class="mb-2"></div>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <div class="mb-2"></div>
                        <li><a href="#" class="text-white">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div style="text-align: center; padding-top: 30px;">
            <h5>A product made by <a href="https://sapphireweb.studio" style="color: #d9083c">SapphireWeb Studio</a></h5>
        </div>
    </section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>