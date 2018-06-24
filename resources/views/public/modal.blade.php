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