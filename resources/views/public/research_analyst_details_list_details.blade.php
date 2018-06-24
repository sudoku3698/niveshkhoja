<!DOCTYPE html>
<html lang="en">

<head>
	<title>World Best Local Directory Website template</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- FAV ICON(BROWSER TAB ICON) -->
	<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
	<!-- FONTAWESOME ICONS -->
	<link rel="stylesheet" href="{{ asset('bank_khoja_ui/css/font-awesome.min.css') }}">
	<!-- ALL CSS FILES -->
	<link href="{{ asset('bank_khoja_ui/css/materialize.css') }}" rel="stylesheet">
	<link href="{{ asset('bank_khoja_ui/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('bank_khoja_ui/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
	<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
	<link href="{{ asset('bank_khoja_ui/css/responsive.css') }}" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="bank_khoja_ui/js/html5shiv.js"></script>
	<script src="bank_khoja_ui/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<!--TOP SEARCH SECTION-->
@include('public.list_details_searchbar')
	<section>
		<div class="v3-list-ql">
			<div class="container">
				<div class="row">
					<div class="v3-list-ql-inn">
						<ul>
							<li class="active"><a href="#ld-abour"><i class="fa fa-user"></i> About</a>
							</li>
							<li><a href="#ld-ser"><i class="fa fa-cog"></i> Services</a>
							</li>
							<li><a href="#ld-gal"><i class="fa fa-photo"></i> Gallery</a>
							</li>
							<li><a href="#ld-roo"><i class="fa fa-ticket"></i> Room Booking</a>
							</li>
							<li><a href="#ld-vie"><i class="fa fa-street-view"></i> 360 View</a>
							</li>
							<li><a href="#ld-rew"><i class="fa fa-edit"></i> Write Review</a>
							</li>
							<li><a href="#ld-rer"><i class="fa fa-star-half-o"></i> User Review</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--LISTING DETAILS-->
	<section class="pg-list-1">
		<div class="container">
			<div class="row">
				<div class="pg-list-1-left"> <a href="#"><h3 id="title_name">{{$table->RESEARCH_ANALYST_INSURER}}</h3></a>
					<div class="list-rat-ch"> <span>5.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
					<h4 id="title_branch">{{$table->RESEARCH_ANALYST_ADDRESS}}</h4>
					<p id="title_address"><b>Address:</b> {{$table->RESEARCH_ANALYST_ADDRESS}}</p>
					<div class="list-number pag-p1-phone">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i><span id="title_contact"> {{$table->RESEARCH_ANALYST_CONTACT}}</span></li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> <span id="title_email">{{$table->RESEARCH_ANALYST_EMAIL_ID}}</span></li>
							<li><i class="fa fa-user" aria-hidden="true"></i><span id="title_contact_person"> {{$table->RESEARCH_ANALYST_CONTACT_PERSON}}</span></li>
						</ul>
					</div>
				</div>
				<div class="pg-list-1-right">
					<div class="list-enqu-btn pg-list-1-right-p1">
						<ul>
							<!-- <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li> -->
							<li><a href="#" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $table->id; ?>" data-target="#send-sms"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
							<!-- <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li> -->
							<li><a href="#" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $table->id; ?>" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="list-pg-bg">
		<div class="container">
			<div class="row">
				<div class="com-padd">
					<div class="list-pg-lt list-page-com-p">
						<!--LISTING DETAILS: LEFT PART 1-->
				        <div class="pglist-p1 pglist-bg pglist-p-com" id="ld-abour">

							<div class="pglist-p-com-ti">

								<h3><span>About</span> Taj Luxury</h3> </div>

							<div class="list-pg-inn-sp">

								<div class="share-btn">

									<ul>

										<li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a> </li>

										<li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a> </li>

										<li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a> </li>

									</ul>

								</div>

								<p></p>

								

							</div>

						</div>
						<!--END LISTING DETAILS: LEFT PART 1-->
						<!--LISTING DETAILS: LEFT PART 2-->
				
						<!--END LISTING DETAILS: LEFT PART 2-->
						<!--LISTING DETAILS: LEFT PART 3-->
				        <div class="pglist-p3 pglist-bg pglist-p-com" id="ld-gal">

							<div class="pglist-p-com-ti">

								<h3><span>Advertisement</span></h3> </div>

							<div class="list-pg-inn-sp">

								<div id="myCarousel" class="carousel slide" data-ride="carousel">

									<a href="{{$ad_link}}"><img src="{{ asset('public/ad_images/'.$ad_pic) }}" alt="Chicago"></a>

								</div>

							</div>

						</div>
						<!--END LISTING DETAILS: LEFT PART 3-->
						<!--LISTING DETAILS: LEFT PART 4-->
					
						<!--END 360 DEGREE MAP: LEFT PART 8-->
					    <div class="pglist-p3 pglist-bg pglist-p-com">
							<div class="pglist-p-com-ti">
								<!--<h3><span>360 </span> Degree View</h3> </div>-->
							<div class="list-pg-inn-sp list-360">
								<img src="{{asset('public/advertisements/'.$table->advertisement)}}" height="300" width="300">
							</div>
						</div>
						<!--END 360 DEGREE MAP: LEFT PART 8-->
						<!--LISTING DETAILS: LEFT PART 6-->
						@include('public.review_form')
						<!--END LISTING DETAILS: LEFT PART 6-->
						<!--LISTING DETAILS: LEFT PART 5-->
						
						<!--END LISTING DETAILS: LEFT PART 5-->
					</div>
					<div class="list-pg-rt">
						<!--LISTING DETAILS: LEFT PART 7-->
				
						<!--END LISTING DETAILS: LEFT PART 7-->
						<!--LISTING DETAILS: LEFT PART 7-->
					
						<!--END LISTING DETAILS: LEFT PART 7-->
						<!--LISTING DETAILS: LEFT PART 8-->
						
						<!--END LISTING DETAILS: LEFT PART 8-->
						<!--LISTING DETAILS: LEFT PART 9-->
					
						<!--END LISTING DETAILS: LEFT PART 9-->
						<!--LISTING DETAILS: LEFT PART 10-->
						<div class="list-mig-like">
							<div class="list-ri-spec-tit">
								<h3><span>You might</span> like this</h3> </div>
								@foreach($service_list->slice(0, 5) as $service_li)
									<a href="#!">
									<div class="list-mig-like-com">

										<div class="list-mig-lc-img"> <img src="{{ asset('bank_khoja_ui/images/listing/1.jpg')}}" alt="" /> <!--<span class="home-list-pop-rat list-mi-pr">$720</span>--> </div>

										<div class="list-mig-lc-con">

											<div class="list-rat-ch list-room-rati"> <!--<span>4.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i>--> </div>

											<h5><a href="{{Route('list-details',['service'=>Session('service'),'id'=>$service_li->id])}}">{{$service_li->RESEARCH_ANALYST_INSURER}}</a></h5>

											<p>{{$service_li->city_name}}</p>

										</div>

									</div>
									</a>
								@endforeach
								<a href="{{Route('get_service_by_name',['service_type'=>'research_analyst_details'])}}">more</a>
						</div>
						<!--END LISTING DETAILS: LEFT PART 10-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--MOBILE APP-->
	<section class="web-app com-padd">
		<div class="container">
			<div class="row">
				<div class="col-md-6 web-app-img"> <img src="{{ asset('bank_khoja_ui/images/mobile.png')}}" alt="" /> </div>
				<div class="col-md-6 web-app-con">
					<h2>Looking for the Best Service Provider? <span>Get the App!</span></h2>
					<ul>
						<li><i class="fa fa-check" aria-hidden="true"></i> Find nearby listings</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Easy service enquiry</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Listing reviews and ratings</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Manage your listing, enquiry and reviews</li>
					</ul> <span>We'll send you a link, open it on your phone to download the app</span>
					<form>
						<ul>
							<li>
								<input type="text" placeholder="+01" /> </li>
							<li>
								<input type="number" placeholder="Enter mobile number" /> </li>
							<li>
								<input type="submit" value="Get App Link" /> </li>
						</ul>
					</form>
					<a href="#"><img src="{{ asset('bank_khoja_ui/images/android.png')}}" alt="" /> </a>
					<a href="#"><img src="{{ asset('bank_khoja_ui/images/apple.png')}}" alt="" /> </a>
				</div>
			</div>
		</div>
	</section>
	<!--FOOTER SECTION-->
	<footer id="colophon" class="site-footer clearfix">
		<div id="quaternary" class="sidebar-container " role="complementary">
			<div class="sidebar-inner">
				<div class="widget-area clearfix">
					<div id="azh_widget-2" class="widget widget_azh_widget">
						<div data-section="section">
							<div class="container">
								<div class="row">
									<div class="col-sm-4 col-md-3 foot-logo"> <img src="{{ asset('bank_khoja_ui/images/foot-logo.png')}}" alt="logo">
										<p class="hasimg">Worlds's No. 1 Local Business Directory Website.</p>
										<p class="hasimg">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
									</div>
									<div class="col-sm-4 col-md-3">
										<h4>Support & Help</h4>
										<ul class="two-columns">
											<li> <a href="advertise.html">Advertise us</a> </li>
											<li> <a href="about-us.html">About Us</a> </li>
											<li> <a href="customer-reviews.html">Review</a> </li>
											<li> <a href="how-it-work.html">How it works </a> </li>
											<li> <a href="add-listing.html">Add Business</a> </li>
											<li> <a href="#!">Register</a> </li>
											<li> <a href="#!">Login</a> </li>
											<li> <a href="#!">Quick Enquiry</a> </li>
											<li> <a href="#!">Ratings </a> </li>
											<li> <a href="trendings.html">Top Trends</a> </li>
										</ul>
									</div>
									<div class="col-sm-4 col-md-3">
										<h4>Popular Services</h4>
										<ul class="two-columns">
											<li> <a href="#!">Hotels</a> </li>
											<li> <a href="#!">Hospitals</a> </li>
											<li> <a href="#!">Transportation</a> </li>
											<li> <a href="#!">Real Estates </a> </li>
											<li> <a href="#!">Automobiles</a> </li>
											<li> <a href="#!">Resorts</a> </li>
											<li> <a href="#!">Education</a> </li>
											<li> <a href="#!">Sports Events</a> </li>
											<li> <a href="#!">Web Services </a> </li>
											<li> <a href="#!">Skin Care</a> </li>
										</ul>
									</div>
									<div class="col-sm-4 col-md-3">
										<h4>Cities Covered</h4>
										<ul class="two-columns">
											<li> <a href="#!">Atlanta</a> </li>
											<li> <a href="#!">Austin</a> </li>
											<li> <a href="#!">Baltimore</a> </li>
											<li> <a href="#!">Boston </a> </li>
											<li> <a href="#!">Chicago</a> </li>
											<li> <a href="#!">Indianapolis</a> </li>
											<li> <a href="#!">Las Vegas</a> </li>
											<li> <a href="#!">Los Angeles</a> </li>
											<li> <a href="#!">Louisville </a> </li>
											<li> <a href="#!">Houston</a> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div data-section="section" class="foot-sec2">
							<div class="container">
								<div class="row">
									<div class="col-sm-3">
										<h4>Payment Options</h4>
										<p class="hasimg"> <img src="{{ asset('bank_khoja_ui/images/payment.png')}}" alt="payment"> </p>
									</div>
									<div class="col-sm-4">
										<h4>Address</h4>
										<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
										<p> <span class="strong">Phone: </span> <span class="highlighted">+01 1245 2541</span> </p>
									</div>
									<div class="col-sm-5 foot-social">
										<h4>Follow with us</h4>
										<p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
										<ul>
											<li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .widget-area -->
			</div>
			<!-- .sidebar-inner -->
		</div>
		<!-- #quaternary -->
	</footer>
	<!--COPY RIGHTS-->
	<section class="copy">
		<div class="container">
			<p>copyrights © 2017 RN53Themes.net. &nbsp;&nbsp;All rights reserved. </p>
		</div>
	</section>
	<!--QUOTS POPUP-->
	<section>
		<!-- GET QUOTES POPUP -->
		@include('public.modal',array('service_type'=>$service,'service_id'=>$table->id))
		<!-- GET QUOTES Popup END -->
	</section>
	<!--SCRIPT FILES-->
	<script src="{{ asset('bank_khoja_ui/js/jquery.min.js')}}"></script>
	<script src="{{ asset('bank_khoja_ui/js/bootstrap.js')}}" type="text/javascript"></script>
	<script src="{{ asset('bank_khoja_ui/js/materialize.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('bank_khoja_ui/js/config_path.js')}}"></script>
	<script src="{{ asset('bank_khoja_ui/js/custom.js')}}"></script>
</body>

</html>