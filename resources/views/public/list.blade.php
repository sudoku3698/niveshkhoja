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
	<link rel="stylesheet" href="bank_khoja_ui/css/font-awesome.min.css">
	<!-- ALL CSS FILES -->
	<link href="bank_khoja_ui/css/materialize.css" rel="stylesheet">
	<link href="bank_khoja_ui/css/style.css" rel="stylesheet">
	<link href="bank_khoja_ui/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
	<link href="bank_khoja_ui/css/responsive.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<!--TOP SEARCH SECTION-->
	@include('public.list_details_searchbar')
	<section class="dir-alp dir-pa-sp-top">
		<div class="container">
			<div class="row">
				<div class="dir-alp-tit">
					<h1>{{Session('service_name')}}</h1>
					<!-- <ol class="breadcrumb">
						<li><a href="#">Home</a> </li>
						<li><a href="#">Listing</a> </li>
						<li class="active">All Property</li>
					</ol> -->
				</div>
			</div>
			<div class="row">
				<div class="dir-alp-con">
					<div class="col-md-3 dir-alp-con-left">
						<div class="dir-alp-con-left-1">
							<h3>Cities</h3> 
						</div>
						<!--==========Sub Category Filter============-->
						<div class="dir-alp-l3 dir-alp-l-com">
							<div class="dir-alp-l-com1 dir-alp-p3">
								<form>
								    <select class="form-control" name="cities" id="city_id" onchange="get_city_id(this.value,this.id);">
								        @foreach($AvailableCities as $key=>$AvailableCity)
								        <option value="{{$key}}"  {{ is_array(Session('city'))?(in_array($key, Session('city'))?'selected':''):''}} {{ is_array(Session('city'))?(in_array($AvailableCity, Session('city'))?'selected':''):''}}>{{$AvailableCity}}</option>
								        @endforeach
								    </select>
								
								</form>
							</div>
						</div>
						<!--==========End Sub Category Filter============-->
						<div class="dir-alp-con-left-1">
							<h3>Category</h3> 
						</div>
						<!--==========Category Filter============-->
						<div class="dir-alp-l3 dir-alp-l-com">
							<div class="dir-alp-l-com1 dir-alp-p3">
								<form>
									<ul>
										@foreach($category_master as $category_master)
										@if($category_master->service_type==$service)
										<li>
											<input {{ is_array(Session('category'))?(in_array($category_master->id, Session('category'))?'checked':''):''}} type="checkbox" class="filled-in" id="lrcategory_{{$category_master->id}}" onclick="get_cat_id(<?=$category_master->id?>,this.id);"/>
											<label for="lrcategory_{{$category_master->id}}"> 
												<span class="list-rat-ch"> <span>{{$category_master->category_value}}</span> </span>
											</label>
										</li>
										@endif
										@endforeach
									</ul>
								</form>
							</div>
						</div>
						<!--==========End Sub Category Filter============-->
					</div>
					<div class="col-md-9 dir-alp-con-right">
						<div class="dir-alp-con-right-1">
							<div class="row">
								@if($find)
						            @foreach($table as $tbl)
						             
						                @if($service=="bank_details")
						               
						                    <div class="home-list-pop list-spac">
						                        <!--LISTINGS IMAGE-->
						                        <div class="col-md-3"> <img src="bank_khoja_ui/images/services/s10.jpeg" alt="" /> </div>
						                        <!--LISTINGS: CONTENT-->
						                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="{{Route('list-details',['service'=>$service,'id'=>$tbl->id])}}" ><h3>{{ $tbl->BANK_NAME }}</h3></a>
						                            <h4>{{ $tbl->BANK_BRANCH }}</h4>
						                            <p><b>Address:</b> {{ $tbl->BANK_ADDRESS }}</p>
						                            <div class="list-number">
						                                <ul>
						                                    <li><img src="bank_khoja_ui/images/icon/phone.png" alt=""> {{ $tbl->BANK_CONTACT }}</li>
						                                    <li><img src="bank_khoja_ui/images/icon/mail.png" alt=""> {{$tbl->BANK_EMAIL_ID }}</li>
						                                </ul>
						                            </div> <span class="home-list-pop-rat">4.2</span>
						                            <div class="list-enqu-btn">
						                                <ul>
						                                    <!-- <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#send-sms"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
						                                    <!-- <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-toggle="modal" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
						                                </ul>
						                            </div>
						                        </div>
						                    </div>
						                    
						                @endif

						                @if($service=="investment_advisors_details")
						            
						                   <div class="home-list-pop list-spac">
						                        <!--LISTINGS IMAGE-->
						                        <div class="col-md-3"> <img src="bank_khoja_ui/images/services/s10.jpeg" alt="" /> </div>
						                        <!--LISTINGS: CONTENT-->
						                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="{{Route('list-details',['service'=>$service,'id'=>$tbl->id])}}" ><h3>{{ $tbl->INVESTMENT_ADVISORS_NAME }}</h3></a>
						                            <h4>{{ $tbl->INVESTMENT_ADVISORS_ADDRESS }}</h4>
						                            <p><b>Address:</b> {{ $tbl->INVESTMENT_ADVISORS_ADDRESS }}</p>
						                            <div class="list-number">
						                                <ul>
						                                    <li><img src="bank_khoja_ui/images/icon/phone.png" alt=""> {{ $tbl->INVESTMENT_ADVISORS_CONTACT }}</li>
						                                    <li><img src="bank_khoja_ui/images/icon/mail.png" alt=""> {{ $tbl->INVESTMENT_ADVISORS_EMAIL_ID }}</li>
						                                </ul>
						                            </div> <span class="home-list-pop-rat">4.2</span>
						                            <div class="list-enqu-btn">
						                                <ul>
						                                    <!-- <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#send-sms"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
						                                    <!-- <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
						                                </ul>
						                            </div>
						                        </div>
						                    </div>';
						                @endif

						                @if($service=="broker_subbroker")
						                
						                    <div class="home-list-pop list-spac">
						                        <!--LISTINGS IMAGE-->
						                        <div class="col-md-3"> <img src="bank_khoja_ui/images/services/s10.jpeg" alt="" /> </div>
						                        <!--LISTINGS: CONTENT-->
						                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="{{Route('list-details',['service'=>$service,'id'=>$tbl->id])}}"><h3>{{ $tbl->BROKER_RECOMMENDING_BROKER_NAME}}</h3></a>
						                            <h4>{{$tbl->BROKER_ADDRESS}}</h4>
						                            <p><b>Address:</b> {{$tbl->BROKER_ADDRESS}}</p>
						                            <div class="list-number">
						                                <ul>
						                                    <li><img src="bank_khoja_ui/images/icon/phone.png" alt=""> {{$tbl->BROKER_CONTACT}}</li>
						                                    <li><img src="bank_khoja_ui/images/icon/mail.png" alt=""> {{$tbl->BROKER_EMAIL_ID}}</li>
						                                </ul>
						                            </div> <span class="home-list-pop-rat">4.2</span>
						                            <div class="list-enqu-btn">
						                                <ul>
						                                    <!-- <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#send-sms"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
						                                    <!-- <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
						                                </ul>
						                            </div>
						                        </div>
						                    </div>';
						                @endif

						                @if($service=="cfa_details")
						              
						                   <div class="home-list-pop list-spac">
						                        <!--LISTINGS IMAGE-->
						                        <div class="col-md-3"> <img src="bank_khoja_ui/images/services/s10.jpeg" alt="" /> </div>
						                        <!--LISTINGS: CONTENT-->
						                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="{{Route('list-details',['service'=>$service,'id'=>$tbl->id])}}"><h3>{{$tbl->CFA_CONTACT_PERSON}}</h3></a>
						                            <h4>{{$tbl->CFA_ADDRESS}}</h4>
						                            <p><b>Address:</b> {{$tbl->CFA_ADDRESS}}</p>
						                            <div class="list-number">
						                                <ul>
						                                    <li><img src="bank_khoja_ui/images/icon/phone.png" alt=""> {{$tbl->CFA_CONTACT}}</li>
						                                    <li><img src="bank_khoja_ui/images/icon/mail.png" alt=""> {{$tbl->CFA_EMAIL_ID}}</li>
						                                </ul>
						                            </div> <span class="home-list-pop-rat">4.2</span>
						                            <div class="list-enqu-btn">
						                                <ul>
						                                    <!-- <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#send-sms"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
						                                    <!-- <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
						                                </ul>
						                            </div>
						                        </div>
						                    </div>
						                @endif

						                @if($service=="insurance_details")
						                
						                    <div class="home-list-pop list-spac">
						                        <!--LISTINGS IMAGE-->
						                        <div class="col-md-3"> <img src="bank_khoja_ui/images/services/s10.jpeg" alt="" /> </div>
						                        <!--LISTINGS: CONTENT-->
						                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="{{Route('list-details',['service'=>$service,'id'=>$tbl->id])}}"><h3>{{$tbl->INSURANCE_INSURER}}</h3></a>
						                            <h4>{{$tbl->INSURANCE_ADDRESS}}</h4>
						                            <p><b>Address:</b> {{$tbl->INSURANCE_ADDRESS}}</p>
						                            <div class="list-number">
						                                <ul>
						                                    <li><img src="bank_khoja_ui/images/icon/phone.png" alt=""> {{$tbl->INSURANCE_CONTACT}}</li>
						                                    <li><img src="bank_khoja_ui/images/icon/mail.png" alt=""> {{$tbl->INSURANCE_EMAIL_ID}}</li>
						                                </ul>
						                            </div> <span class="home-list-pop-rat">4.2</span>
						                            <div class="list-enqu-btn">
						                                <ul>
						                                    <!-- <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#send-sms"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
						                                    <!-- <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
						                                </ul>
						                            </div>
						                        </div>
						                    </div>
						                @endif

						                @if($service=="loan_details")
						              
						                   <div class="home-list-pop list-spac">
						                        <!--LISTINGS IMAGE-->
						                        <div class="col-md-3"> <img src="bank_khoja_ui/images/services/s10.jpeg" alt="" /> </div>
						                        <!--LISTINGS: CONTENT-->
						                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="{{Route('list-details',['service'=>$service,'id'=>$tbl->id])}}"><h3>{{$tbl->LOAN_CONTACT_PERSON}}</h3></a>
						                            <h4>{{$tbl->LOAN_ADDRESS}}</h4>
						                            <p><b>Address:</b> {{$tbl->LOAN_ADDRESS}}</p>
						                            <div class="list-number">
						                                <ul>
						                                    <li><img src="bank_khoja_ui/images/icon/phone.png" alt="">{{$tbl->LOAN_CONTACT}}</li>
						                                    <li><img src="bank_khoja_ui/images/icon/mail.png" alt=""> {{$tbl->LOAN_EMAIL_ID}}</li>
						                                </ul>
						                            </div> <span class="home-list-pop-rat">4.2</span>
						                            <div class="list-enqu-btn">
						                                <ul>
						                                    <!-- <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#send-sms"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
						                                    <!-- <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
						                                </ul>
						                            </div>
						                        </div>
						                    </div>
						                @endif

						                @if($service=="mutual_fund_distributor")
						           
						                    <div class="home-list-pop list-spac">
						                        <!--LISTINGS IMAGE-->
						                        <div class="col-md-3"> <img src="bank_khoja_ui/images/services/s10.jpeg" alt="" /> </div>
						                        <!--LISTINGS: CONTENT-->
						                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="{{Route('list-details',['service'=>$service,'id'=>$tbl->id])}}"><h3>{{$tbl->MUTUAL_FUND_DISTRIBUTOR_CONTACT_PERSON}}</h3></a>
						                            <h4>{{$tbl->MUTUAL_FUND_DISTRIBUTOR_ADDRESS}}</h4>
						                            <p><b>Address:</b> {{$tbl->MUTUAL_FUND_DISTRIBUTOR_ADDRESS}}</p>
						                            <div class="list-number">
						                                <ul>
						                                    <li><img src="bank_khoja_ui/images/icon/phone.png" alt=""> {{$tbl->MUTUAL_FUND_DISTRIBUTOR_CONTACT}}</li>
						                                    <li><img src="bank_khoja_ui/images/icon/mail.png" alt=""> {{$tbl->MUTUAL_FUND_DISTRIBUTOR_EMAIL_ID}}</li>
						                                </ul>
						                            </div> <span class="home-list-pop-rat">4.2</span>
						                            <div class="list-enqu-btn">
						                                <ul>
						                                    <!-- <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#send-sms"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
						                                    <!-- <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
						                                </ul>
						                            </div>
						                        </div>
						                    </div>
						                @endif
						                
						                @if($service=="post_office_details")
						                
						                    <div class="home-list-pop list-spac">
						                        <!--LISTINGS IMAGE-->
						                        <div class="col-md-3"> <img src="bank_khoja_ui/images/services/s10.jpeg" alt="" /> </div>
						                        <!--LISTINGS: CONTENT-->
						                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="{{Route('list-details',['service'=>$service,'id'=>$tbl->id])}}"><h3>{{$tbl->POST_OFFICE_NAME}}</h3></a>
						                            <h4>{{$tbl->POST_OFFICE_REGION}}</h4>
						                            <p><b>Address:</b> {{$tbl->POST_OFFICE_ADDRESS}}</p>
						                            <div class="list-number">
						                                <ul>
						                                    <li><img src="bank_khoja_ui/images/icon/phone.png" alt=""> {{$tbl->POST_OFFICE_CONTACT_PERSON}}</li>
						                                    <li><img src="bank_khoja_ui/images/icon/mail.png" alt=""> {{$tbl->POST_OFFICE_EMAIL_ID}}</li>
						                                </ul>
						                            </div> <span class="home-list-pop-rat">4.2</span>
						                            <div class="list-enqu-btn">
						                                <ul>
						                                    <!-- <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#send-sms"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
						                                    <!-- <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
						                                </ul>
						                            </div>
						                        </div>
						                    </div>
						                @endif

						                @if($service=="research_analyst_details")
						                
						                    <div class="home-list-pop list-spac">
						                        <!--LISTINGS IMAGE-->
						                        <div class="col-md-3"> <img src="bank_khoja_ui/images/services/s10.jpeg" alt="" /> </div>
						                        <!--LISTINGS: CONTENT-->
						                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="{{Route('list-details',['service'=>$service,'id'=>$tbl->id])}}"><h3>{{$tbl->RESEARCH_ANALYST_INSURER}}</h3></a>
						                            <h4>{{$tbl->RESEARCH_ANALYST_ADDRESS}}</h4>
						                            <p><b>Address:</b> {{$tbl->RESEARCH_ANALYST_ADDRESS}}</p>
						                            <div class="list-number">
						                                <ul>
						                                    <li><img src="bank_khoja_ui/images/icon/phone.png" alt=""> {{$tbl->RESEARCH_ANALYST_CONTACT}}</li>
						                                    <li><img src="bank_khoja_ui/images/icon/mail.png" alt=""> {{$tbl->RESEARCH_ANALYST_EMAIL_ID}}</li>
						                                </ul>
						                            </div> <span class="home-list-pop-rat">4.2</span>
						                            <div class="list-enqu-btn">
						                                <ul>
						                                    <!-- <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#send-sms"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
						                                    <!-- <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li> -->
						                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-servicetype="<?php echo $service; ?>" data-serviceid="<?php echo $tbl->id; ?>" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
						                                </ul>
						                            </div>
						                        </div>
						                    </div>
						                @endif


						                
						            @endforeach
						            {{ $table->links() }}
						        @else
						        
						            <h3>No Record Found</h3>
						        @endif
							</div>
							<!-- <div class="row">
								<ul class="pagination list-pagenat">
									<li class="disabled"><a href="#!!"><i class="material-icons">chevron_left</i></a> </li>
									<li class="active"><a href="#!">1</a> </li>
									<li class="waves-effect"><a href="#!">2</a> </li>
									<li class="waves-effect"><a href="#!">3</a> </li>
									<li class="waves-effect"><a href="#!">4</a> </li>
									<li class="waves-effect"><a href="#!">5</a> </li>
									<li class="waves-effect"><a href="#!">6</a> </li>
									<li class="waves-effect"><a href="#!">7</a> </li>
									<li class="waves-effect"><a href="#!">8</a> </li>
									<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a> </li>
								</ul>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--MOBILE APP-->
	<section class="web-app com-padd">
		<div class="container">
			<div class="row">
				<div class="col-md-6 web-app-img"> 
					<a href="{{$ad_link}}"><img src="{{ asset('public/ad_images/'.$ad_pic) }}" width="500" height="500"></a>
					<!-- <img src="bank_khoja_ui/images/mobile.png" alt="" />  -->
				</div>
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
					<a href="#"><img src="bank_khoja_ui/images/android.png" alt="" /> </a>
					<a href="#"><img src="bank_khoja_ui/images/apple.png" alt="" /> </a>
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
									<div class="col-sm-4 col-md-3 foot-logo"> <img src="bank_khoja_ui/images/foot-logo.png" alt="logo">
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
										<p class="hasimg"> <img src="bank_khoja_ui/images/payment.png" alt="payment"> </p>
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
		<div class="modal fade dir-pop-com" id="list-quo" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header dir-pop-head">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h4 class="modal-title">Get a Quotes</h4>
						<!--<i class="fa fa-pencil dir-pop-head-icon" aria-hidden="true"></i>-->
					</div>
					<div class="modal-body dir-pop-body">
						<form method="post" class="form-horizontal" id="set_quote">
							<div class="alert alert-success" id="quote_sucess" style="display:none;">
							  <strong>Success!</strong> Indicates a successful or positive action.
							</div>
	
							<div class="alert alert-danger" id="quote_warning" style="display:none;">
							  <strong>Warning!</strong> Indicates a warning that might need attention.
							</div>
							<!--LISTING INFORMATION-->
							<input type="hidden" name="service_type" id="service_type" value="">
							<input type="hidden" name="service_id" id="service_id" value="">
							<div class="form-group has-feedback ak-field">
								<label class="col-md-4 control-label">Full Name *</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="get_quotes_fname" name="fname" placeholder="" required> </div>
							</div>
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<label class="col-md-4 control-label">Mobile</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="get_quotes_mobile" name="mobile" placeholder=""> </div>
							</div>
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<label class="col-md-4 control-label">Email</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="get_quotes_email" name="email" placeholder=""> </div>
							</div>
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<label class="col-md-4 control-label">Message</label>
								<div class="col-md-8 get-quo">
									<textarea class="form-control" name="message" id="get_quotes_message"></textarea>
								</div>
							</div>
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<div class="col-md-6 col-md-offset-4">
									<input type="submit" value="SUBMIT" class="pop-btn" id="post-quote"> </div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- GET QUOTES Popup END -->
		<!--Send SMS Start -->
		<div class="modal fade dir-pop-com" id="send-sms" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header dir-pop-head">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h4 class="modal-title">Get a Quotes</h4>
						<!--<i class="fa fa-pencil dir-pop-head-icon" aria-hidden="true"></i>-->
					</div>
					<div class="modal-body dir-pop-body">
						<form method="post" class="form-horizontal" id="send_sms">
							<div class="alert alert-success" id="send_sms_sucess" style="display:none;">
							  <strong>Success!</strong> Indicates a successful or positive action.
							</div>
	
							<div class="alert alert-danger" id="send_sms_warning" style="display:none;">
							  <strong>Warning!</strong> Indicates a warning that might need attention.
							</div>
							<!--LISTING INFORMATION-->
							<input type="hidden" name="send_sms_service_type" id="send_sms_service_type" value="">
							<input type="hidden" name="send_sms_service_id" id="send_sms_service_id" value="">
							<div class="form-group has-feedback ak-field">
								<label class="col-md-4 control-label">Mobile</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="send_sms_mobile" id="send_sms_mobile" placeholder=""> </div>
							</div>
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<div class="col-md-6 col-md-offset-4">
									<input type="submit" value="SUBMIT" class="pop-btn" id="send-sms"> </div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Send SMS End -->
	</section>
	<!--SCRIPT FILES-->
	<script src="bank_khoja_ui/js/jquery.min.js"></script>
	<script src="bank_khoja_ui/js/bootstrap.js" type="text/javascript"></script>
	<script src="bank_khoja_ui/js/materialize.min.js" type="text/javascript"></script>
	<script src="bank_khoja_ui/js/config_path.js"></script>
	<script src="bank_khoja_ui/js/custom.js"></script>
</body>

</html>