
	<div class="col-sm-8 col-sm-offset-2" style=" margin-top:77px">
  		<div class="panel panel-default">
    		<div class="panel-body">
    			<h3><b>Payment Details:</b></h3>
				<hr/>
						<form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>index.php/controller/payment/<?php echo $grand_total;?>">
							       	
						          	<div class="form-group ">
						          		<label class="col-sm-3 control-label">Payment Type:</label>
							          		<img class="img-responsive col-sm-2" src="<?php echo base_url(); ?>resources/icons/Visa_Logo.png" alt="visa_card" height="30" width="40" style="margin-top:5px" />
											<img class="img-responsive col-sm-2" src="<?php echo base_url(); ?>resources/icons/MasterCard_Logo.svg.png" alt="master_card" height="30" width="40" style="margin-top:-3px"/>
											<img class="img-responsive col-sm-2" src="<?php echo base_url(); ?>resources/icons/PayPal_logo.png" alt="paypal" height="30" width="40" style="margin-top:7px"/>
						          		
						          	</div>
									<div class="form-group ">
							          	<label class="col-sm-3 control-label">Amount To Pay:</label>
							          	<label class="col-sm-3 ">Rs. <?php echo $grand_total;?></label>
							        </div>
						          	<div class="form-group ">
							          	<label class="col-sm-3 control-label">Card Number:</label>
							          	<div class="col-sm-6">
							          		<input type="text" class="form-control" name="card_number">
							          	</div>
							        </div>
							        <div class="form-group ">
							          	<label class="col-sm-3 control-label">Security Code:</label>
							          	<div class="col-sm-6">
							          		<input type="password" class="form-control" name="security_code">
							          	</div>
							        </div>
						          	<div class="form-group ">
						          		<button type="submit" class="btn btn-success center-block">Pay Now</button>
						          	</div>
						        </form>
    		</div>
    	</div>
    </div>