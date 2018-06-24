<div class="list-pg-rt">

						<!--LISTING DETAILS: LEFT PART 7-->

						<!--<div class="pglist-p3 pglist-bg pglist-p-com">

							<div class="pglist-p-com-ti pglist-p-com-ti-right">

								<h3><span>Listing</span> Guarantee</h3> </div>

							<div class="list-pg-inn-sp">

								<div class="list-pg-guar">

									<ul>

										<li>

											<div class="list-pg-guar-img"> <img src="{{ asset('bank_khoja_ui/images/icon/g1.png')}}" alt="" /> </div>

											<h4>Service Guarantee</h4>

											<p>Upto 6 month of service</p>

										</li>

										<li>

											<div class="list-pg-guar-img"> <img src="{{ asset('bank_khoja_ui/images/icon/g2.png')}}" alt="" /> </div>

											<h4>Professionals</h4>

											<p>100% certified professionals</p>

										</li>

										<li>

											<div class="list-pg-guar-img"> <img src="{{ asset('bank_khoja_ui/images/icon/g3.png')}}" alt="" /> </div>

											<h4>Insurance</h4>

											<p>Upto $5,000 against damages</p>

										</li>

									</ul> <a class="waves-effect waves-light btn-large full-btn list-pg-btn" href="#!" data-dismiss="modal" data-toggle="modal" data-target="#list-quo">Quick Enquiry</a> </div>

							</div>

						</div>-->

						<!--END LISTING DETAILS: LEFT PART 7-->

						<!--LISTING DETAILS: LEFT PART 7-->

						<!--<div class="pglist-p3 pglist-bg pglist-p-com">

							<div class="pg-list-user-pro"> <img src="{{ asset('bank_khoja_ui/images/users/8.png')}}" alt=""> </div>

							<div class="list-pg-inn-sp">

								<div class="list-pg-upro">

									<h5>Kevin Jack</h5>

									<p>Member since July 2017</p> <a class="waves-effect waves-light btn-large full-btn list-pg-btn" href="#!">Contact User</a> </div>

							</div>

						</div>-->

						<!--END LISTING DETAILS: LEFT PART 7-->

						<!--LISTING DETAILS: LEFT PART 8-->

						<!--<div class="pglist-p3 pglist-bg pglist-p-com">

							<div class="pglist-p-com-ti pglist-p-com-ti-right">

								<h3><span>Our</span> Location</h3> </div>

							<div class="list-pg-inn-sp">

								<div class="list-pg-map">

									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005" allowfullscreen></iframe>

								</div>

							</div>

						</div>-->

						<!--END LISTING DETAILS: LEFT PART 8-->

						<!--LISTING DETAILS: LEFT PART 9-->

						<!--<div class="pglist-p3 pglist-bg pglist-p-com">

							<div class="pglist-p-com-ti pglist-p-com-ti-right">

								<h3><span>Other</span> Informations</h3> </div>

							<div class="list-pg-inn-sp">

								<div class="list-pg-oth-info">

									<ul>

										<li>Today Shop <span class="green-bg">open</span> </li>

										<li>Experience <span>16</span> </li>

										<li>Parking <span>yes</span> </li>

										<li>Smoking <span>yes</span> </li>

										<li>Pool Table <span>yes</span> </li>

										<li>Take Out <span>yes</span> </li>

										<li>Good for Groups <span>yes</span> </li>

										<li>Accepts All Cards <span>yes</span> </li>

										<li>Open Time <span>09:00am</span> </li>

										<li>Close Time <span>10:00pm</span> </li>

									</ul>

								</div>

							</div>

						</div>-->

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

										<h5><a href="{{Route('list-details',['service'=>Session('service'),'id'=>$service_li->id])}}">{{$service_li->LOAN_CONTACT_PERSON}}</a></h5>

										<p>{{$service_li->city_name}}</p>

									</div>

								</div>

							</a>

							@endforeach
							<a href="{{Route('get_service_by_name',['service_type'=>'loan_details'])}}">more</a>

						</div>

						<!--END LISTING DETAILS: LEFT PART 10-->

					</div>