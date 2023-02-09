<!DOCTYPE html>
<html lang="en">


	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="DSAThemes"/>
		<meta name="description" content="OLMO - Software, App, SaaS & Startup Landing Pages Pack"/>
		<meta name="keywords" content="Responsive, HTML5, DSAThemes, One Page, Landing, Software, Mobile App, SaaS, Startup, Creative, Freelancers, Digital Product">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  		<!-- SITE TITLE -->
		<title>SIMAWA</title>

		<!-- FAVICON AND TOUCH ICONS -->
        <link rel="shortcut icon" href="" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- FONT ICONS -->
		<link href="{{asset('css/flaticon.css')}}" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="{{asset('css/menu.css')}}" rel="stylesheet">
		<link id="effect" href="{{asset('css/dropdown-effects/fade-down.css')}}" media="all" rel="stylesheet">
		<link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
		<link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">

		<!-- ON SCROLL ANIMATION -->
		<link href="{{asset('css/animate.css')}}" rel="stylesheet">

		<!-- TEMPLATE CSS -->
		<link href="{{asset('css/style.css')}}" rel="stylesheet">

		<!-- RESPONSIVE CSS -->
		<link href="{{asset('css/responsive.css')}}" rel="stylesheet">

	</head>



	<body>
		<!-- PRELOADER SPINNER
		============================================= -->
		<div id="loading" class="skyblue-loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object" id="object_one"></div>
					<div class="object" id="object_two"></div>
					<div class="object" id="object_three"></div>
					<div class="object" id="object_four"></div>
				</div>
			</div>
		</div>
		<!-- PAGE CONTENT
		============================================= -->
		<div id="page" class="page">
			<!-- HEADER
			============================================= -->
			<header id="header" class="header white-menu navbar-dark">
				<div class="header-wrapper">


					<!-- MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">
				    	<span class="smllogo"><img src="" alt="mobile-logo"/></span>
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
				 	</div>


				 	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
	    				<div class="wsmainwp clearfix">
	    					<!-- HEADER LOGO -->
	    					<div class="desktoplogo"><a href="demo-1.html" class="logo-black"><img src="" alt="header-logo"></a></div>
	    					<div class="desktoplogo"><a href="demo-1.html" class="logo-white"><img src="" alt="header-logo"></a></div>


	    					<!-- MAIN MENU -->
	      					<nav class="wsmenu clearfix">
	        					<ul class="wsmenu-list nav-skyblue-hover">

								    <!-- SIMPLE NAVIGATION LINK -->
							    	<li class="nl-simple" aria-haspopup="true"><a href="#">Home</a></li>
							    	<li class="nl-simple" aria-haspopup="true"><a href="#">Kegiatan</a></li>


								    <!-- DROPDOWN MENU -->
						        	<li aria-haspopup="true"><a href="#">Info <span class="wsarrow"></span></a>
						        		<div class="wsmegamenu clearfix halfmenu">
						              		<div class="container-fluid">
						                		<div class="row">

						                			<!-- Links -->
									                <ul class="col-lg-12 link-list">
									                	<li><a href="#">Info Kegiatan</a></li>
									                    <li><a href="#">Info Beasiswa</a></li>
									                </ul>

						                		</div>
						              		</div>
						            	</div>
						          	</li>	<!-- END DROPDOWN MENU -->

								    <!-- HEADER BUTTON -->
								    <li class="nl-simple" aria-haspopup="true">
                                        @if (Auth::check())
                                        <a href="{{url('/admin')}}" class="btn btn-skyblue tra-grey-hover last-link">Dashboard</a>
                                        @else
                                        <a href="{{url('/admin/login')}}" class="btn btn-skyblue tra-grey-hover last-link">Login</a>
                                        @endif
								    </li>


	        					</ul>
	        				</nav>	<!-- END MAIN MENU -->


	    				</div>
	    			</div>	<!-- END NAVIGATION MENU -->


				</div>     <!-- End header-wrapper -->
			</header>	<!-- END HEADER -->




			<!-- BLOG POSTS LISTING
			============================================= -->
			<section id="blog-page" class="bg-snow wide-50 inner-page-hero blog-page-section division">
				<div class="container">
					<!-- SECTION TITLE -->
					<div class="row justify-content-center">
						<div class="col-md-12 col-lg-12">
							<div class="section-title title-02 mb-85">
								<img src="" class="img-fluid" alt="">
							</div>
						</div>
					</div>


					<!-- FEATURED POST -->
					<div class="rel blog-post-wide featured-post">
	 					<div class="row d-flex align-items-center">

	 						<!-- Featured Badge -->
	 						<div class="featured-badge ico-25 bg-whitesmoke yellow-color">
	 							<span class="flaticon-star-1"></span>
	 						</div>

							<!-- BLOG POST IMAGE -->
				 			<div class="col-lg-7 blog-post-img">
				 				<div class="hover-overlay">
									<img class="img-fluid" src="images/blog/featured-post.jpg" alt="blog-post-image" />
									<div class="item-overlay"></div>
								</div>
							</div>

							<!-- BLOG POST TEXT -->
							<div class="col-lg-5 blog-post-txt">

								<!-- Post Tag -->
								<p class="p-md post-tag">OLMO News &ensp;|&ensp; May 18, 2021</p>

								<!-- Post Link -->
								<h5 class="h5-xl">
									<a href="single-post.html">Tempor sapien donec gravida a suscipit and porta justo vitae</a>
								</h5>

								<!-- Text -->
								<p class="p-lg">Aliqum mullam blandit vitae tempor sapien and donec lipsum gravida and porta
								   undo velna dolor in cubilia...
								</p>

								<!-- Post Meta -->
								<div class="post-meta"><p class="p-md">38 Comments</p></div>

							</div>	<!-- END BLOG POST TEXT -->

						</div>   <!-- End row -->
				 	</div>	<!-- END FEATURED POST -->


				 	<!-- POSTS WRAPPER -->
					<div class="posts-wrapper">


						<!-- BLOG POSTS CATEGORY -->
						<div class="row">
							<div class="col-md-12">
								<h5 class="h5-lg posts-category">Postingan Terakhir</h5>
							</div>
						</div>


						<!-- BLOG POSTS -->
						<div class="row">
							<div class="col-8">
                                <div class="col gallery-items-list">
                                    <div class="masonry-wrap grid-loaded">


                                        <!-- BLOG POST #1 -->
                                         <div class="blog-3-post masonry-image">

                                             <!-- BLOG POST IMAGE -->
                                             <div class="blog-post-img">
                                                 <div class="hover-overlay">
                                                    <img class="img-fluid" src="images/blog/post-1-img.jpg" alt="blog-post-image" />
                                                    <div class="item-overlay"></div>
                                                </div>
                                            </div>

                                            <!-- BLOG POST TEXT -->
                                            <div class="blog-post-txt">

                                                <!-- Post Tag -->
                                                <p class="p-md post-tag">OLMO News &ensp;|&ensp; JuLy 31, 2021</p>

                                                <!-- Post Link -->
                                                <h5 class="h5-md">
                                                    <a href="single-post.html">
                                                       A ligula risus auctor and tempus sapien an augue integer turpis
                                                    </a>
                                                </h5>

                                                <!-- Post Meta -->
                                                <div class="post-meta"><p class="p-md">9 Comments</p></div>

                                            </div>	<!-- END BLOG POST TEXT -->

                                         </div>	<!-- END BLOG POST #1 -->


                                         <!-- BLOG POST #2 -->
                                         <div class="blog-3-post masonry-image">

                                             <!-- BLOG POST IMAGE -->
                                             <div class="blog-post-img">
                                                 <div class="hover-overlay">
                                                    <img class="img-fluid" src="images/blog/post-5-img.jpg" alt="blog-post-image" />
                                                    <div class="item-overlay"></div>
                                                </div>
                                            </div>

                                            <!-- BLOG POST TEXT -->
                                            <div class="blog-post-txt">

                                                <!-- Post Tag -->
                                                <p class="p-md post-tag">Tutorials &ensp;|&ensp; JuLy 24, 2021</p>

                                                <!-- Post Link -->
                                                <h5 class="h5-md">
                                                    <a href="single-post.html">
                                                       Integer urna turpis donec ipsum a porta justo risus auctor mauris augue
                                                    </a>
                                                </h5>

                                                <!-- Post Meta -->
                                                <div class="post-meta"><p class="p-md">27 Comments</p></div>

                                            </div>	<!-- END BLOG POST TEXT -->

                                         </div>	<!-- END BLOG POST #2 -->


                                         <!-- BLOG POST #3 -->
                                         <div class="blog-3-post masonry-image">

                                             <!-- BLOG POST IMAGE -->
                                             <div class="blog-post-img">
                                                 <div class="hover-overlay">
                                                    <img class="img-fluid" src="images/blog/post-2-img.jpg" alt="blog-post-image" />
                                                    <div class="item-overlay"></div>
                                                </div>
                                            </div>

                                            <!-- BLOG POST TEXT -->
                                            <div class="blog-post-txt">

                                                <!-- Post Tag -->
                                                <p class="p-md post-tag">Inspiration &ensp;|&ensp; JuLy 06, 2021</p>

                                                <!-- Post Link -->
                                                <h5 class="h5-md">
                                                    <a href="single-post.html">
                                                       Donec sapien an augue integer turpis at cursus porta urna mauris
                                                    </a>
                                                </h5>

                                                <!-- Post Meta -->
                                                <div class="post-meta"><p class="p-md">21 Comments</p></div>

                                            </div>	<!-- END BLOG POST TEXT -->

                                         </div>	<!-- END BLOG POST #3 -->


                                         <!-- BLOG POST #4 -->
                                         <div class="blog-3-post masonry-image">

                                             <!-- BLOG POST IMAGE -->
                                             <div class="blog-post-img">
                                                 <div class="hover-overlay">
                                                    <img class="img-fluid" src="images/blog/post-6-img.jpg" alt="blog-post-image" />
                                                    <div class="item-overlay"></div>
                                                </div>
                                            </div>

                                            <!-- BLOG POST TEXT -->
                                            <div class="blog-post-txt">

                                                <!-- Post Tag -->
                                                <p class="p-md post-tag">OLMO News &ensp;|&ensp; June 30, 2021</p>

                                                <!-- Post Link -->
                                                <h5 class="h5-md">
                                                    <a href="single-post.html">
                                                       Mauris donec magnis and sapien ociis etiam sapien congue undo augue
                                                    </a>
                                                </h5>

                                                <!-- Post Meta -->
                                                <div class="post-meta"><p class="p-md">32 Comments</p></div>

                                            </div>	<!-- END BLOG POST TEXT -->

                                         </div>	<!-- END BLOG POST #4 -->


                                         <!-- BLOG POST #5 -->
                                         <div class="blog-3-post masonry-image">

                                             <!-- BLOG POST IMAGE -->
                                             <div class="blog-post-img">
                                                 <div class="hover-overlay">
                                                    <img class="img-fluid" src="images/blog/post-7-img.jpg" alt="blog-post-image" />
                                                    <div class="item-overlay"></div>
                                                </div>
                                            </div>

                                            <!-- BLOG POST TEXT -->
                                            <div class="blog-post-txt">

                                                <!-- Post Tag -->
                                                <p class="p-md post-tag">Inspiration &ensp;|&ensp; June 18, 2021</p>

                                                <!-- Post Link -->
                                                <h5 class="h5-md">
                                                    <a href="single-post.html">
                                                       An augue cubilia laoreet undo magna and suscipit egestas volutpat
                                                    </a>
                                                </h5>

                                                <!-- Post Meta -->
                                                <div class="post-meta"><p class="p-md">42 Comments</p></div>

                                            </div>	<!-- END BLOG POST TEXT -->

                                         </div>	<!-- END BLOG POST #5 -->


                                         <!-- BLOG POST #6 -->
                                         <div class="blog-3-post masonry-image">

                                             <!-- BLOG POST IMAGE -->
                                             <div class="blog-post-img">
                                                 <div class="hover-overlay">
                                                    <img class="img-fluid" src="images/blog/post-4-img.jpg" alt="blog-post-image" />
                                                    <div class="item-overlay"></div>
                                                </div>
                                            </div>

                                            <!-- BLOG POST TEXT -->
                                            <div class="blog-post-txt">

                                                <!-- Post Tag -->
                                                <p class="p-md post-tag">OLMO News &ensp;|&ensp; June 25, 2021</p>

                                                <!-- Post Link -->
                                                <h5 class="h5-md">
                                                    <a href="single-post.html">
                                                       Laoreet undo magna at suscipit undo egestas magna ipsum ligula
                                                    </a>
                                                </h5>

                                                <!-- Post Meta -->
                                                <div class="post-meta"><p class="p-md">27 Comments</p></div>

                                            </div>	<!-- END BLOG POST TEXT -->

                                         </div>	<!-- END BLOG POST #6 -->


                                    </div>
                                </div>
                                <div class="bg-snow pb-100 page-pagination division">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination ico-20 justify-content-center">
                                                        <li class="page-item disabled">
                                                          <a class="page-link" href="#" tabindex="-1">
                                                            <span class="flaticon-back"></span>
                                                          </a>
                                                        </li>
                                                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item">
                                                          <a class="page-link" href="#" aria-label="Next">
                                                            <span class="flaticon-next"></span>
                                                          </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>  <!-- End row -->
                                    </div> <!-- End container -->
                                </div>	<!-- END PAGE PAGINATION -->
                            </div>
                            <div class="col-4">
                                <img src="" class="img-fluid" alt="">
                            </div>
						</div>	<!-- END BLOG POSTS -->


					</div>	<!-- END POSTS WRAPPER -->


				</div>     <!-- End container -->
			</section>	<!-- END BLOG POSTS LISTING -->

			<!-- FOOTER-4
			============================================= -->
			<footer id="footer-4" class="bg-snow footer division">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">


						<!-- FOOTER INFO -->
						<div class="col-lg-3">
							<div class="footer-info mb-40">
								<img class="footer-logo" src="" alt="footer-logo">
							</div>
						</div>


					</div>	<!-- END FOOTER CONTENT -->


					<hr>


					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer">
						<div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">


							<!-- FOOTER COPYRIGHT -->
							<div class="col">
								<div class="footer-copyright">
									<p>&copy; 2022 LPTIK UNJA. All Rights Reserved</p>
								</div>
							</div>

						</div>  <!-- End row -->
					</div>	<!-- BOTTOM FOOTER -->


				</div>
			</footer>	<!-- FOOTER-4 -->




		</div>	<!-- END PAGE CONTENT -->




		<!-- EXTERNAL SCRIPTS
		============================================= -->
		<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/modernizr.custom.js')}}"></script>
		<script src="{{asset('js/jquery.easing.js')}}"></script>
		<script src="{{asset('js/jquery.appear.js')}}"></script>
		<script src="{{asset('js/jquery.scrollto.js')}}"></script>
		<script src="{{asset('js/menu.js')}}"></script>
		<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('js/quick-form.js')}}"></script>
		<script src="{{asset('js/request-form.js')}}"></script>
		<script src="{{asset('js/jquery.validate.min.js')}}"></script>
		<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{asset('js/wow.js')}}"></script>

		<!-- Custom Script -->
		<script src="{{asset('js/custom.js')}}"></script>


	</body>



</html>
