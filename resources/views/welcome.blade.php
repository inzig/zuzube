<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>ZUZUBE</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<meta charset="UTF-8">
<!--Master Slider-->
<link href="css/masterslider/style/masterslider.css" rel="stylesheet">
<link href="css/masterslider/skins/default/style.css" rel="stylesheet">
<link href="css/masterslider/style/ms-partialview.css" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('images/resource/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/resource/favicon.png') }}" type="image/x-icon">


<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
.logo-navbar{
	width: 22%;
}
select.goog-te-combo {
    height: 35px;
}
.login-link-main {
    padding: 10px;
    border: 1px solid;
    margin: 0px 30px;
}
.goog-logo-link {
   display:none !important;
}

.goog-te-gadget {
   color: transparent !important;
}
iframe#:1.container{
	display:none !important;
}
.goog-te-banner-frame{
	display:none !important;
}
/* .goog-te-gadget .goog-te-combo {
   color: blue !important;
} */
</style>
</head>

<body>    
	<nav class="navbar navbar-expand-sm  navbar-light bg-light">
		<div class="navbar-header">
		<a class="navbar-brand" href="{{ url('/')}}">
		<img class="logo-navbar" src="" alt="" title=""></a>		 
		</div>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
			<div class="" id="google_translate_element"></div>
			</li>
		</ul>
		<a class="nav-link login-link-main" href="{{ url('login') }}">
            <i class="fa fa-fw fa-sign-in"></i> login</a>
		</div>                        
	</nav>
	<!-- Main Header-->
    <header class="main-header header-style-two">
	<div class="page-wrapper">
	<!-- Preloader -->
    <div class="preloader"></div>

    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">

                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="">
						<img src="zuzube-logo.png" alt="" title=""></a>
						</div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
    </header>
    <!--End Main Header -->

	<!--Main Slider-->
    <section class="main-slider style-two" id="home-banner" style="background-image:url(images/background/2.png)">
    	
        <div class="main-slider-carousel owl-carousel owl-theme">
            <!-- Slide1 -->
            <div class="slide">
                <div class="auto-container">
					<div class="clearfix">
						<div class="content">
							<!-- <h1>ZUZUBE</h1> -->
							<h2>Blockchain-based decentralized secure escort App and fastest-growing social network</h2>
							<div class="text">Zuzube is an escorting service that will combine screening, booking, 
							and payment in a single platform. Zuzube offers an advanced companionship experience to a trusted customer 
							and verified escorts who value discreet, secure exchanges.</div>							
							<div class="link-box">
								<a href="{{ url('/') }}/files/bd94f4db-482f-466a-9495-1076dc1d23b8.apk" 
								target="_blank" class="btn-link-app theme-btn btn-style-seven">DOWNLOAD ZUZUBE ANDROID APP</a>
								<!-- <a href="#" class=""><img src="images/and.png" width="200px;" alt=""></a> -->
								<!-- <a href="#" class=""><img src="images/apple.png" width="200px;" alt=""></a> -->
							</div>
							
						</div>
						<div class="image-box">
							<div class="image">
								<img src="{{ asset('images/resource/content-image-2.png') }}" alt="" title="">
							</div>
						</div>
					</div>
                </div>
            </div>
			<!-- Slide1 -->
            <div class="slide">
                <div class="auto-container">
					<div class="clearfix">
						<div class="content">
							<!-- <h1>ZUZUBE</h1> -->
							<h2>Blockchain-based decentralized secure escort App and fastest-growing social network</h2>
							<div class="text">Zuzube is an escorting service that will combine screening, booking, 
							and payment in a single platform. Zuzube offers an advanced companionship experience to a trusted customer 
							and verified escorts who value discreet, secure exchanges.</div>							
							<div class="link-box">
								<a href="{{ url('/') }}/files/AppZuzube.zip" 
								target="_blank" class="btn-link-app theme-btn btn-style-seven">DOWNLOAD ZUZUBE ANDROID APP</a>
								<!-- <a href="#" class=""><img src="images/and.png" width="200px;" alt=""></a> -->
								<!-- <a href="#" class=""><img src="images/apple.png" width="200px;" alt=""></a> -->
							</div>
							
						</div>
						<div class="image-box">
							<div class="image">
								<img src="{{ asset('images/resource/content-image-1.png') }}" alt="" title="">
							</div>
						</div>
					</div>
                </div>
            </div>
            
        </div>
    </section>

	<section class="software-section" id="feature">
		<div class="auto-container">
			<!--Sec Title-->
			<div class="sec-title centered">
				<h2>ZUZUBE</h2>
				<div class="separater"></div>
				<div class="text">
					Zuzube is an escorting service that will combine screening, booking, and payment in
					a single platform. Zuzube offers an advanced companionship experience to a trusted
					customer and verified escorts who value discreet, secure exchanges. Unlike other competitors,
					Zuzube offers a single meeting place for screening and arranging a date. This enables
					us to offer security, comfort, peace of mind, and reduced costs... 
				</div>
				<div class="text">
				<a target="_blank" href="{{ url('/') }}/files/zuzubewhitepaper.pdf" class="theme-btn btn-style-seven"
				> Download the Whitepaper </a>
				</div>
			</div>
			
			<div class="inner-container clearfix">
			
				<div class="outer-row clearfix">
					<!--Software Block-->
					<div class="software-block">
						<div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
							<div class="icon-box">								
									<img src="{{ asset('images/resource/001.png') }}"  alt="">								
							</div>
							<h3><a href="#">Best Services</a></h3>
							<div class="text">Escorting and sex-related services are assessed to be over $157B every year around the world, with at least $10B</div>
						</div>
					</div>
				</div>
				
				<div class="outer-row clearfix">
					<!--Software Block-->
					<div class="software-block-two">
						<div class="inner-box wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
							<div class="icon-box">
							<img src="{{ asset('images/resource/002.png') }}"  alt="">	
							</div>
							<h3><a href="#">Successful Date</a></h3>
							<div class="text">Escorting is intrinsically an inefficient, divided market, given the various steps that should be executed by both the client and escort so as to ensure a successful date.</div>
						</div>
					</div>
				</div>
				
				<div class="outer-row clearfix">
					<!--Software Block-->
					<div class="software-block">
						<div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
							<div class="icon-box">
							<img src="{{ asset('images/resource/004.png') }}"  alt="">	
							</div>
							<h3><a href="#">It is Super Easy</a></h3>
							<div class="text">Since the Internet is much lucrative and easier.</div>
						</div>
					</div>
				</div>
				
				<div class="outer-row clearfix">
					<!--Software Block-->
					<div class="software-block-two">
						<div class="inner-box wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
							<div class="icon-box">
							<img src="{{ asset('images/resource/003.png') }}"  alt="">	
							</div>
							<h3><a href="#">It is Secure</a></h3>
							<div class="text">Zuzube will publish another block on its Single-Issuer-Blockchain containing a tree of all the codes issued for completed dates that month.</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>

<section class="overview-section">
    	<div class="auto-container">
        	<!--Sec Title-->
			<div class="sec-title centered">
				<h2>Take a Quick Overview</h2>
				<div class="separater"></div>
				<!-- <div class="text">The Unique Feature put on the app for your demand <br> and we select the feature for you.</div> -->
			</div>
            <!--Overview Tabs-->
            <div class="overview-tabs tabs-box">
                <div class="row clearfix">
                	<!--Column-->
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#prod-modern" class="tab-btn">Decentralized Blockchain-based platform</li>
                            <li data-tab="#prod-friendly" class="tab-btn">Innovation</li>
                            <li data-tab="#prod-face" class="tab-btn active-btn">The Zuzube Escorts</li>
                            <li data-tab="#prod-economical" class="tab-btn">It is very Economical</li>
                            <li data-tab="#prod-crypto" class="tab-btn">Pay with Crypto Currencies</li>
                        </ul>
                    </div>
                    <!--Column-->
                    <div class="col-lg-9 col-md-12 col-sm-12">
                    	<!--Tabs Container-->
                        <div class="tabs-content">
                        
                            <!--Tab / Active Tab-->
                            <div class="tab" id="prod-modern">
                            	<div class="content">
									<div class="row clearfix">
										<!--Content Column-->
										<div class="content-column col-lg-7 col-md-7 col-sm-12">
											<div class="inner-column">
												<div class="icon-box">
													<span class="icon"><img src="{{ asset('images/resource/Blockchain-Icon.png') }}" alt=""></span>
												</div>
												<h3>Decentralized Blockchain-based platform</h3>
												<div class="text">Zuzubeis a decentralized Blockchain-based platform. It offers a secure payment method for dating/escort services and fastest-growing social network.</div>
												<!-- <a href="#" class="theme-btn btn-style-seven">See More</a> -->
											</div>
										</div>
										<!--Image Column-->
										<div class="image-column col-lg-5 col-md-5 col-sm-12">
											<div class="inner-column">
												<div class="image">
													<img src="{{ asset('images/resource/Blockchain.png') }}" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!--Tab-->
                            <div class="tab" id="prod-friendly">
                                <div class="content">
									<div class="row clearfix">
										<!--Content Column-->
										<div class="content-column col-lg-7 col-md-7 col-sm-12">
											<div class="inner-column">
												<div class="icon-box">
													<span class="icon"><img src="{{ asset('images/resource/Blockchain-Icon.png') }}" alt=""></span>
												</div>
												<h3>Innovation</h3>
												<div class="text">As an advanced innovation, it is designed to connect clients to their desired escorts. </div>
												<!-- <a href="#" class="theme-btn btn-style-seven">See More</a> -->
											</div>
										</div>
										<!--Image Column-->
										<div class="image-column col-lg-5 col-md-5 col-sm-12">
											<div class="inner-column">
												<div class="image">
													<img src="{{ asset('images/resource/ZUZUBE_03s.png') }}" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!--Tab-->
                            <div class="tab active-tab" id="prod-face">
                                <div class="content">
									<div class="row clearfix">
										<!--Content Column-->
										<div class="content-column col-lg-7 col-md-7 col-sm-12">
											<div class="inner-column">
												<div class="icon-box">
													<span class="icon"><img src="{{ asset('images/resource/Blockchain-Icon.png') }}" alt=""></span>
												</div>
												<h3>The Zuzube Escorting</h3>
												<div class="text">The Zuzube Escorting Platform integrates detailed search, booking, payment, and screening into a single, user-friendly interface. Users can be able to input detailed search, browse all the available escorts, and make “Instant Book” requests.</div>
												<!-- <a href="#" class="theme-btn btn-style-seven">See More</a> -->
											</div>
										</div>
										<!--Image Column-->
										<div class="image-column col-lg-5 col-md-5 col-sm-12">
											<div class="inner-column">
												<div class="image">
													<img src="{{ asset('images/resource/photomania.jpg') }}" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="tab" id="prod-economical">
                                <div class="content">
									<div class="row clearfix">
										<!--Content Column-->
										<div class="content-column col-lg-7 col-md-7 col-sm-12">
											<div class="inner-column">
												<div class="icon-box">
													<span class="icon"><img src="{{ asset('images/resource/Blockchain-Icon.png') }}" alt=""></span>
												</div>
												<h3>It is very Economical</h3>
												<div class="text">Booking fees of only 20% on Zuzube versus 40% with typical agencies.</div>
												<!-- <a href="#" class="theme-btn btn-style-seven">See More</a> -->
											</div>
										</div>
										<!--Image Column-->
										<div class="image-column col-lg-5 col-md-5 col-sm-12">
											<div class="inner-column">
												<div class="image">
													<img src="{{ asset('images/resource/ZUZUBE_10sss.png') }}" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab" id="prod-crypto">
                                <div class="content">
									<div class="row clearfix">
										<!--Content Column-->
										<div class="content-column col-lg-7 col-md-7 col-sm-12">
											<div class="inner-column">
												<div class="icon-box">
													<span class="icon"><img src="{{ asset('images/resource/Blockchain-Icon.png') }}" alt=""></span>
												</div>
												<h3>Pay with Crypto Currencies</h3>
												<div class="text">The flexibility to justaccept payments in cryptocurrency, improving privacy and reducing scrutiny on transaction</div>
												<!-- <a href="#" class="theme-btn btn-style-seven">See More</a> -->
											</div>
										</div>
										<!--Image Column-->
										<div class="image-column col-lg-5 col-md-5 col-sm-12">
											<div class="inner-column">
												<div class="image">
													<img src="{{ asset('images/resource/crypto.jpg') }}" alt="">
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









<section class="feature-section" id="feature">
	<div class="auto-container">
		
		<!--Sec Title-->
		<div class="sec-title centered">
			<h2>Escorts</h2>
			<div class="separater"></div>
			<div class="text">Zuzube is the premier choice for escorts to conduct business. We provide:</div>
		</div>
		
		<!--Feature Block Three-->
		<div class="feature-block-three">
			<div class="inner-box">
				<div class="row clearfix">
					<!--Content Column-->
					<div class="content-column col-lg-6 col-md-6 col-sm-12">
						<div class="inner-column">
							<div class="sec-title">
								<h2>Integration</h2>
								<div class="separater"></div>
							</div>
							<div class="text">One platform that integrates shopper screening, booking, payment, and advertising.</div>
							<!-- <a href="#" class="theme-btn btn-style-seven">See More</a> -->
						</div>
					</div>
					<!--Image Column-->
					<div class="image-column col-lg-6 col-md-6 col-sm-12">
						<div class="inner-column wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
							<div class="image">
								<img src="{{ asset('images/resource/ZUZUBE_10.png') }}" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--Feature Block Three-->
		<div class="feature-block-three alternate">
			<div class="inner-box">
				<div class="row clearfix">
					
					<!--Image Column-->
					<div class="image-column pull-left col-lg-6 col-md-6 col-sm-12">
						<div class="inner-column wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
							<div class="image">
								<img src="{{ asset('images/resource/ZUZUBE_07ss.png') }}" alt="">
							</div>
						</div>
					</div>
					
					<!--Content Column-->
					<div class="content-column pull-right col-lg-6 col-md-6 col-sm-12">
						<div class="inner-column">
							<div class="sec-title">
								<h2>Super Fast Matches</h2>
								<div class="separater"></div>
							</div>
							<div class="text">We tend to cut back the price of client acquisition and reduce the time required to screen clients by 70%.</div>
							<!-- <a href="#" class="theme-btn btn-style-seven">See More</a> -->
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<!--Feature Block Three-->
		<div class="feature-block-three">
			<div class="inner-box">
				<div class="row clearfix">
					<!--Content Column-->
					<div class="content-column col-lg-6 col-md-6 col-sm-12">
						<div class="inner-column">
							<div class="sec-title">
								<h2>Visibility</h2>
								<div class="separater"></div>
							</div>
							<div class="text">Inflated visibility to purchasers thanks to our giant advertising budget and reach across several online and offline platforms.</div>
							<!-- <a href="#" class="theme-btn btn-style-seven">See More</a> -->
						</div>
					</div>
					<!--Image Column-->
					<div class="image-column col-lg-6 col-md-6 col-sm-12">
						<div class="inner-column wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
							<div class="image">
								<img src="{{ asset('images/resource/ZUZUBE_03.png') }}" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<section class="software-section">
	<div class="auto-container">		
		<div class="sec-title centered">
			<h2>Now trading at</h2>
			<div class="separater"></div>
		</div>
		
		<div class="container">
			<div class="row">		
				<div class="col-6">
					<a href="https://p2pb2b.io/" target="_blank" >
						<img src="{{ asset('images/p2p.svg') }}" alt="" 
						/>
					</a>
				</div>
				<div class="col-6">
					<a href="https://exrates.me/dashboard" target="_blank" >
						<img src="{{ asset('images/exrates.png') }}" alt="" 
						/>
					</a>
				</div>
			</div>
		</div>
			
	</div>
</section>

<section class="software-section">
	<div class="auto-container">		
		<div class="sec-title centered">
			<h2>Partners</h2>
			<div class="separater"></div>
		</div>
		
		<div class="container">
			<div class="row">		
				<div class="col-6">
					<a href="https://p2pb2b.io/" target="_blank" >
						<img src="{{ asset('images/coincodex.png') }}" alt="" 
						/>
					</a>
				</div>
				
			</div>
		</div>
			
	</div>
</section>


	<!--Testimonial Section Two-->
	<section class="testimonial-section-two" id="testimonial">
		<div class="auto-container">
		
			<div class="sec-title centered">
				<h2>Our Socail Media Feed</h2>
				<div class="separater"></div>
			</div>
			
			<div class="inner-container">
				
				<div class="carousel-outer">
					<div class="ms-partialview-template" id="partial-view-1">
						<div class="master-slider ms-skin-default" id="master-slider">
							<div class="ms-slide">								
								<div class="testimonial-block-three">
									<div class="inner-box">
										<a target="_blank" href="https://bitcointalk.org/index.php?topic=5106411">
										<div class="image">
											<img class="social-media-logo" src="{{ asset('img/bticointalk.png') }}" alt=""/>
										</div>
										<h3>Follow us on Bitcointalk</h3>
										</a>
										<div class="text">
										<!-- <blockquote class="twitter-tweet" data-lang="en"><p lang="und" dir="ltr"><a href="https://t.co/yHFlQo076g">https://t.co/yHFlQo076g</a> <a href="https://t.co/l4di0ofnT6">pic.twitter.com/l4di0ofnT6</a></p>&mdash; zuzube (@zuzube2) <a href="https://twitter.com/zuzube2/status/1092150049516199936?ref_src=twsrc%5Etfw">February 3, 2019</a></blockquote>
											<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->

										</div>
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
									</div>
								</div>
								
							</div>
							<div class="ms-slide">
								
								<div class="testimonial-block-three">
									<div class="inner-box">
										<a target="_blank" href="https://twitter.com/zuzube2">
										<div class="image">
											<img class="social-media-logo" src="{{ asset('img/twitter.png') }}" alt=""/>
										</div>
										<h3>Follow us on Twitter</h3></a>
										<div class="text"></div>
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
									</div>
								</div>
								
							</div>

							<div class="ms-slide">
								
								<div class="testimonial-block-three">
									<div class="inner-box">
										<a target="_blank" href="https://web.facebook.com/zuzu.be.923?_rdc=1&_rdr">
										<div class="image">
											<img class="social-media-logo" src="{{ asset('img/facebook.png') }}" alt=""/>
										</div>
										<h3>Follow us on Facebook</h3></a>
										<div class="text">
										<!-- <iframe src="https://web.facebook.com/plugins/post.php?href=https%3A%2F%2Fweb.facebook.com%2Fzuzu.be.923%2Fposts%2F113897989718720&width=500" width="500" height="596" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->
										</div>
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
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
	
	<section class="app-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<div class="sec-title">
							<h2>Get The App</h2>
							<div class="separater"></div>
							<div class="text">Blockchain-based decentralized secure premium escort App and fastest-growing social network</div>
						</div>
						<div class="link-box">
							<a href="{{ url('/') }}/files/bd94f4db-482f-466a-9495-1076dc1d23b8.apk"
							class="btn-link-app theme-btn btn-style-seven" target="_blank">DOWNLOAD ZUZUBE ANDROID APP</a>
							<!-- <a href="#" class=""><img src="images/and.png" width="200px;" alt=""></a> -->
							<!-- <a href="#" class=""><img src="images/apple.png" width="200px;" alt=""></a> -->
						</div>
						<!-- <div class="btns-box">
							<a href="#" class="theme-btn wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/icons/app-btn.png" alt="" /></a>
							<a href="#" class="theme-btn wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms"><img src="images/icons/google-btn.png" alt="" /></a>
						</div> -->
					</div>
				</div>
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/app.png" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>


		<footer class="mfooter">
			<div class="auto-container">
				Copyright © 2019, ZUZUBE
			</div>
		</footer>




	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>



<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/pagenav.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/masterslider/jquery.easing.min.js"></script>
<script src="js/masterslider/masterslider.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>