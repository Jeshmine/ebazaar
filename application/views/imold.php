<?php
foreach ($product_id->result() as $row)
		{	
			$product_id=$row->product_id;
			$product_name=$row->product_name;
			$price=$row->price;
			$discounted_price=$row->discounted_price;
			$color=$row->color;
			$quantity=$row->product_quantity;
			$shipment_price=$row->shipment_price;
			$image1=$row->image1;
			$image2=$row->image2;
			$image3=$row->image3;
			$image4=$row->image4;
			$image5=$row->image5;
			$seller_id=$row->seller_id;
			$seller_name=$row->name;
			$seller_img=$row->image;
			$description=$row->description;
		}
?>



<div class="container" style=" margin-top:77px">
  <div class="panel panel-default" style="box-shadow:1.5px 1.5px 7.5px 0.3px #ADADAD;">
    <div class="panel-body">
    <div class="row">
       	<div class="col-sm-5" >
	    	<div class="row">
	    		<div class="container">
	    			<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $image1; ?>" id="first" class="img-thumbnail" alt="First Image" width="391" height="391">
	    			<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $image2; ?>" style="display:none;" id="second" class="img-thumbnail" alt="Second Image" width="391" height="391">
	    			<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $image3; ?>" style="display:none;" id="third" class="img-thumbnail" alt="Third Image" width="391" height="391">
	    			<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $image4; ?>" style="display:none;" id="fourth" class="img-thumbnail" alt="Fourth Image" width="391" height="391">
	    			<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $image5; ?>" style="display:none;" id="fifth" class="img-thumbnail" alt="Fifth Image" width="391" height="391">
	    		</div>
	    	</div>
	    	<br/>
	    	<hr style="margin-right:40px;" />
	    	<div class="row">
		    	<div class="container">
	    			<a href="javascript:show('first');">
					  	<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $row->image1; ?>" class="img-thumbnail"  alt="First Image" width="75" height="75">
					</a>
					<a href="javascript:show('second');">
					  	<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $row->image2; ?>" class="img-thumbnail"  id="second_thumb" alt="Second Image" width="75" height="75">
					</a>
					<a href="javascript:show('third');">
					  <img src="<?php echo base_url(); ?>resources/product_img/<?php echo $row->image3; ?>" class="img-thumbnail" alt="Third Image" width="75" height="75">
					</a>
					<a href="javascript:show('fourth');">
					  	<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $row->image4; ?>" class="img-thumbnail" alt="Fourth Image" width="75" height="75">
					</a>
					<a href="javascript:show('fifth');">
					  	<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $row->image5; ?>" class="img-thumbnail" alt="Fifth Image" width="75" height="75">
					</a>
				</div>
			</div>
			
			
			
		</div>
		<div class="col-sm-7">
			<div class="row">
				<h4 style="margin:-3px;"> <?php echo $product_name;?></h4>
				<hr/>
			</div>
			<div class="row">
				<div class="col-md-7">
					<form method="post" action="<?php echo base_url(); ?>index.php/controller/insertProductIntoCart/<?php echo $product_id; ?>">
						<div class="row">
							<div class="form-group is-empty ">
									<label for="price" class="col-sm-3 control-label">Price:</label>
									<div class="col-sm-7">
										<input type="text" name="price" class="form-control" value="<?php echo $discount= $row->price - $row->discounted_price;  ?>" readonly>
									</div>
									<h5 style="padding-top:7px;">/piece</h5>
									<span class="material-input"></span>
									
							</div>
						</div>
						<br/>
						
						<div class="row">
							<div class="form-group is-empty ">
								<label for="color" class="col-sm-3 control-label" style="padding-top:-10px;">Color:</label>
								<div class="col-sm-7">
									<select class="select form-control" name="purchased_color">
										<option value="Black">Black</option>
										<option value="Blue">Blue</option>
										<option value="White">White</option>
										<option value="Brown">Brown</option>
										<option value="Yellow">Yellow</option>
										<option value="Orange">Orange</option>
									</select>
								</div>
								<span class="material-input"></span>
							</div>
						</div>
						<br/>
						
						<div class="row">
						<div class="form-group is-empty ">
								<label for="price" class="col-sm-3 control-label">Quantity:</label>
								<div class="col-sm-7">
									<div class="input-group">
										<span class="input-group-btn">
										  	<button type="button" class="btn btn-danger" onclick="decrease_quantity()" id="decrease_qty"><i class="fa fa-minus" aria-hidden="true"></i></button>
										</span>
										<input type="text" id="quantity" name="purchased_quantity" class="form-control" style="text-align:center;" value="1" />
										<span class="input-group-btn">
											<button type="button" class="btn btn-success" onclick="increase_quantity()" id="increase_qty"><i class="fa fa-plus" aria-hidden="true"></i></button>
										</span>
									</div>
								</div>
								<span class="material-input"></span>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="form-group is-empty ">
								<label for="price" class="col-sm-3 control-label">Total Price:</label>
								<div class="col-sm-7">
									<input type="text" name="total_price" class="form-control" value="<?php echo $discount= $row->price - $row->discounted_price;  ?>" readonly>
								</div>
								<span class="material-input"></span>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="form-group is-empty ">
								<label for="price" class="col-sm-3 control-label">Shipment Charge:</label>
								<div class="col-sm-7">
									<input type="text" name="shipment" class="form-control" value="<?php echo $shipment_price;?>" readonly>
								</div>
								<span class="material-input"></span>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-sm-5 col-sm-offset-3">
								<button type="submit" class="btn-raised btn-success btn" style="width:125px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart<div class="ripple-container"></div>
								</button>
							</div>
						</div>
					</form>

				</div>

				<div class="col-md-5">
					<div class="panel panel-default" style="margin-top:10px;">
	    				<div class="panel-body">
	    					<div style="text-align:center;">
	    						<label>Sold By</label>
	    					</div>
	    					<div style="text-align:center; margin-top:10px;">
	    						<img src="<?php echo base_url(); ?>resources/user_image/<?php echo $seller_img; ?>" class="img-circle" alt="soldby" width="50" height="50" class="img-responsive center-block" style="display: block; margin: 0 auto;">
	    						<label style="margin-top:10px; word-wrap: break-word;"><?php echo $seller_name;?></label>
	    					</div>
	    					<div class="btn-group btn-group-justified" style="margin-top:10px;">
							  	<a href="#" class="btn btn-default">Visit Store</a>
							  	<a href="#" class="btn btn-default">Follow</a>
							</div>
	    				</div>
					</div>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="form-group is-empty ">
					<label for="return_policy" class="col-sm-2 control-label">Return Policy:</label>
					<div class="col-sm-9" style="margin-top:-5px; text-align:justify;">
						<h6>Returns accepted within 3 days, only for damaged or wrong products. Return offered in the form of Product exchange. Buyer is the responsible for the shipping fees.</h6>
					</div>
					<span class="material-input"></span>
				</div>
			</div>
			<div class="row">
				<div class="form-group is-empty ">
					<label for="payment" class="col-sm-2 control-label">Payment:</label>
					<div class="col-sm-10" style="margin-top:-5px; margin-left:-15px;">
						<img class="img-responsive col-sm-2" src="<?php echo base_url(); ?>resources/icons/Visa_Logo.png" alt="visa_card" height="30" width="40" style="margin-top:5px" />
						<img class="img-responsive col-sm-2" src="<?php echo base_url(); ?>resources/icons/MasterCard_Logo.svg.png" alt="master_card" height="30" width="40" style="margin-top:-3px"/>
						<img class="img-responsive col-sm-2" src="<?php echo base_url(); ?>resources/icons/PayPal_logo.png" alt="paypal" height="30" width="40" style="margin-top:7px"/>
					</div>
					<span class="material-input"></span>
				</div>
			</div>	
			<hr style="margin-left:-15px;" />
			<div class="row" style="margin-top:20px">
				<ul class="nav nav-tabs">
				    <li class="active"><a data-toggle="tab" href="#product_details">Product Details</a></li>
				   <!-- <li><a data-toggle="tab" href="#menu3">Menu 1</a></li>
				    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
				    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>-->
				</ul>

				<div class="tab-content">
				    <div id="product_details" class="tab-pane fade in active">
				    	<?php echo $description;?>
						     
						     
					</div>

				    <div id="shipment" class="tab-pane fade" style="margin-top:10px;">
				      	<label class="col-sm-2">Menu 3</label>
				      	<div class=" col-sm-3">
				      		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
				      	</div>
				    </div>
				    <div id="menu2" class="tab-pane fade">
				     	<h3>Menu 2</h3>
				      	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
				    </div>
				    <div id="menu3" class="tab-pane fade">
				      	<h3>Menu 3</h3>
				      	<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				    </div>
				</div>
			</div>
    		
    	</div>
  	</div>
</div>
</div>
</div>
<script>
function show(choosed) {
	if(choosed=='first')
	{
		$(first).show();
		$(second).hide();
		$(third).hide();
		$(fourth).hide();
		$(fifth).hide();
	}
	else if(choosed=='second')
	{
		$(second).show();
		$(first).hide();
		$(third).hide();
		$(fourth).hide();
		$(fifth).hide();
	}
	else if(choosed=='third')
	{
		$(third).show();
		$(second).hide();
		$(first).hide();
		$(fourth).hide();
		$(fifth).hide();
		
	}
	else if(choosed=='fourth')
	{
		$(fourth).show();
		$(second).hide();
		$(third).hide();
		$(first).hide();
		$(fifth).hide();
	}
	else
	{
		$(fifth).show();
		$(second).hide();
		$(third).hide();
		$(fourth).hide();
		$(first).hide();
	}

	//$(choosed).show();
     //	alert(choosed);
         
     	
          
      
}
</script>


<script type="text/javascript">
	function decrease_quantity()
	{
		var current_value=parseInt(document.getElementById('quantity').value);
		if(current_value==1)
		{
			document.getElementById('quantity').value=1;
		}
		else
		{
			document.getElementById('quantity').value=current_value-1;
		}
	}
	function increase_quantity()
	{
		var current_value=parseInt(document.getElementById('quantity').value);
		document.getElementById('quantity').value=current_value+1;
		
	}
</script>

