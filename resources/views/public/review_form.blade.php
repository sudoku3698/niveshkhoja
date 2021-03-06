<div class="pglist-p3 pglist-bg pglist-p-com" id="ld-rew">
						
	@if(Session('success'))
	<div class="alert alert-success">
     {{ Session('success') }}
     </div>
     @endif
	<div class="pglist-p-com-ti">
		<h3><span>Write Your</span> Reviews</h3> </div>
	<div class="list-pg-inn-sp">
		<div class="list-pg-write-rev">
			<form class="col" method="post" action="{{Route('submit-review')}}">
				<p>Writing great reviews may help others discover the places that are just apt for them. Here are a few tips to write a good review:</p>
				<div class="row">
				{{csrf_field()}}
					<div class="col s12">
					<input type="hidden" name="service_type" value="{{Session('service')}}">
					<input type="hidden" name="service_id" value="{{$table->id}}">
						<fieldset class="rating">
							<input type="radio" id="star5" name="rating" value="5" />
							<label class="full" for="star5" title="Awesome - 5 stars"></label>
							<input type="radio" id="star4half" name="rating" value="4 and a half" />
							<label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
							<input type="radio" id="star4" name="rating" value="4" />
							<label class="full" for="star4" title="Pretty good - 4 stars"></label>
							<input type="radio" id="star3half" name="rating" value="3 and a half" />
							<label class="half" for="star3half" title="Meh - 3.5 stars"></label>
							<input type="radio" id="star3" name="rating" value="3" />
							<label class="full" for="star3" title="Meh - 3 stars"></label>
							<input type="radio" id="star2half" name="rating" value="2 and a half" />
							<label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
							<input type="radio" id="star2" name="rating" value="2" />
							<label class="full" for="star2" title="Kinda bad - 2 stars"></label>
							<input type="radio" id="star1half" name="rating" value="1 and a half" />
							<label class="half" for="star1half" title="Meh - 1.5 stars"></label>
							<input type="radio" id="star1" name="rating" value="1" />
							<label class="full" for="star1" title="Sucks big time - 1 star"></label>
							<input type="radio" id="starhalf" name="rating" value="half" />
							<label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
						</fieldset>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input required id="re_name" name="full_name" type="text" class="validate">
						<label for="re_name">Full Name</label>
					</div>
					<div class="input-field col s6">
						<input required id="re_mob" type="number" name="mobile" class="validate">
						<label for="re_mob">Mobile</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input required id="re_mail" type="email" name="email" class="validate">
						<label for="re_mail">Email id</label>
					</div>
					<div class="input-field col s6">
						<input required id="re_city" type="text" name="city" class="validate">
						<label for="re_city">City</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<textarea required id="re_msg" name="review" class="materialize-textarea"></textarea>
						<label for="re_msg">Write review</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
					<button type="submit"  class="waves-effect waves-light btn-large full-btn">Submit Review</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="pglist-p3 pglist-bg pglist-p-com" id="ld-rer">
							<div class="pglist-p-com-ti">
								<h3><span>User</span> Reviews</h3> </div>
							<div class="list-pg-inn-sp">
								<!-- <div class="lp-ur-all">
									<div class="lp-ur-all-left">
										<div class="lp-ur-all-left-1">
											<div class="lp-ur-all-left-11">Excellent</div>
											<div class="lp-ur-all-left-12">
												<div class="lp-ur-all-left-13"></div>
											</div>
										</div>
										<div class="lp-ur-all-left-1">
											<div class="lp-ur-all-left-11">Good</div>
											<div class="lp-ur-all-left-12">
												<div class="lp-ur-all-left-13 lp-ur-all-left-Good"></div>
											</div>
										</div>
										<div class="lp-ur-all-left-1">
											<div class="lp-ur-all-left-11">Satisfactory</div>
											<div class="lp-ur-all-left-12">
												<div class="lp-ur-all-left-13 lp-ur-all-left-satis"></div>
											</div>
										</div>
										<div class="lp-ur-all-left-1">
											<div class="lp-ur-all-left-11">Below Average</div>
											<div class="lp-ur-all-left-12">
												<div class="lp-ur-all-left-13 lp-ur-all-left-below"></div>
											</div>
										</div>
										<div class="lp-ur-all-left-1">
											<div class="lp-ur-all-left-11">Below Average</div>
											<div class="lp-ur-all-left-12">
												<div class="lp-ur-all-left-13 lp-ur-all-left-poor"></div>
											</div>
										</div>
									</div>
									<div class="lp-ur-all-right">
										<h5>Overall Ratings</h5>
										<p><span>4.5 <i class="fa fa-star" aria-hidden="true"></i></span> based on 242 reviews</p>
									</div>
								</div> -->
								<div class="lp-ur-all-rat">
									<ul>
									@foreach(App\models\Review::where(['service_type'=>Session('service'),'service_id'=>$table->id,'display_review'=>1])->orderBy('created_at','desc')->get() as $review)
										<li>
											<div class="lr-user-wr-img"> <img src="images/users/2.png" alt=""> </div>
											<div class="lr-user-wr-con">
												<h6>{{$review->full_name}} <span>{{ $review->rating }}<i class="fa fa-star" aria-hidden="true"></i></span></h6> <span class="lr-revi-date">{{date('dS F Y', strtotime($review->created_at))}}</span>
												<p> {{$review->review}}</p>
												<!-- <ul>
													<li><a href="#!"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
												</ul> -->
											</div>
										</li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>