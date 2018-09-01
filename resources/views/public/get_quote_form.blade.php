<!--get quote box -->		
				<div class="wrap-sec" style="width: 28%;float: left;background: #fff;border: 1px solid #e2e2e2;border-radius: 2px;padding: 15px;margin-left: 15px;">	
					<center><h3 style="margin-bottom: 5px;">Get Quote</h3></center>
						<form method="post" class="form-horizontal" id="set_quote">
					<div class="alert alert-success" id="quote_sucess" style="display:none;">
					  <strong>Success!</strong> Indicates a successful or positive action.
					</div>

					<div class="alert alert-danger" id="quote_warning" style="display:none;">
					  <strong>Warning!</strong> Indicates a warning that might need attention.
					</div>
					<!--LISTING INFORMATION-->
					<input type="hidden" name="service_type" id="service_type" value="bank_details">
					<input type="hidden" name="service_id" id="service_id" value="99441">
					<div class="form-group has-feedback ak-field">
						<label class="col-md-4 control-label">Full Name *</label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="get_quotes_fname" name="fname" placeholder="" required=""> </div>
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

<!--get quote box -->