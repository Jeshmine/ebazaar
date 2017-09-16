
 
	<style>
		.photoheight
		{
			height:391px;
			width:391px;
			border:1px solid #eee;
		}
		.a
		{
			border-right: 1px solid #eee;
			margin-right: 15px;
		}

		.tip {
  width: 0px;
  height: 0px;
  position: absolute;
  background: transparent;
  border: 10px solid #ccc;
}

.tip-left {
  top: 10px;
  left: -25px;
  border-top-color: transparent;
  border-left-color: transparent;
  border-bottom-color: transparent;  
}

.dialogbox .body {
  position: relative;
  max-width: 300px;
  height: auto;
  margin: 20px 0px;
  padding: 5px;
  border-radius: 3px;
  border: 5px solid #ccc;
}

.body .message {
  min-height: 30px;
  border-radius: 3px;
  font-family: Arial;
  font-size: 14px;
  line-height: 1.5;
  color: #797979;
}

td{
	padding:5px;
}
</style>




<?php
foreach ($product_id->result() as $row)
		{	
			$product_id=$row->product_id;
			$product_name=$row->product_name;
			$price=$row->price;
			$discounted_price=$row->discounted_price;
			$color=$row->color;
			$quantity=$row->product_quantity;
			$image1=$row->image1;
			$image2=$row->image2;
			$image3=$row->image3;
			$image4=$row->image4;
			$image5=$row->image5;
			$seller_id=$row->seller_id;
			$seller_name=$row->name;
			$seller_img=$row->image;
			$seller_email=$row->email;
			$description=$row->description;
			
			$product_condition=$row->product_condition;
			$shipment_type=$row->shipment_type;
			$inside_valley=$row->inside_valley;
			$outside_valley=$row->outside_valley;
			
			$handeling_time=$row->handeling_time;
			$return_type=$row->return_type;
			$return_day=$row->return_day;
			$refund=$row->refund;
			$additional_policy=$row->additional_policy;
			
		}
?>


<div class="container" style=" margin-top:77px">
  <div class="panel panel-default">
    <div class="panel-body">
		<div class="row">
    	
	       	<div class="col-sm-5" >
	       	<div class="a">
		
		    	<div class="row">
		    		<div class="container">
		    			<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $seller_email; ?>/<?php echo $product_id;?>/<?php echo $image1; ?>" id="first" class=" photoheight" alt="First Image">
		    			<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $seller_email; ?>/<?php echo $product_id;?>/<?php echo $image2; ?>" style="display:none;" id="second" class="photoheight" alt="Second Image">
		    			<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $seller_email; ?>/<?php echo $product_id;?>/<?php echo $image3; ?>" style="display:none;" id="third" class=" photoheight" alt="Third Image">
		    			<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $seller_email; ?>/<?php echo $product_id;?>/<?php echo $image4; ?>" style="display:none;" id="fourth" class="photoheight" alt="Fourth Image">
		    			<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $seller_email; ?>/<?php echo $product_id;?>/<?php echo $image5; ?>" style="display:none;" id="fifth" class="photoheight" alt="Fifth Image">
		    		</div>
		    	</div>

		    	<br/>
<!-- 		    	<hr style="margin-right:40px; margin-top:0px;" />
 -->		    	<div class="row">
			    	<div class="container">
					<?php
					if($image1!="" || $image1!=null)
					{
					?>
		    			<a href="javascript:show('first');">
						  	<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $seller_email; ?>/<?php echo $product_id;?>/<?php echo $image1; ?>" class="img-thumbnail"  alt="First Image" style="width:75px; height:75px">
						</a>
					<?php
					}
					if($image2!="" || $image2!=null)
					{
					?>
						<a href="javascript:show('second');">
						  	<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $seller_email; ?>/<?php echo $product_id;?>/<?php echo $image2; ?>" class="img-thumbnail"  id="second_thumb" alt="Second Image" style="width:75px; height:75px">
						</a>
					<?php
					}
					if($image3!="" || $image3!=null)
					{
					?>
						<a href="javascript:show('third');">
						  <img src="<?php echo base_url(); ?>resources/product_img/<?php echo $seller_email; ?>/<?php echo $product_id;?>/<?php echo $image3; ?>" class="img-thumbnail" alt="Third Image" style="width:75px; height:75px">
						</a>
					<?php
					}
					if($image4!="" || $image4!=null)
					{
					?>
						<a href="javascript:show('fourth');">
						  	<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $seller_email; ?>/<?php echo $product_id;?>/<?php echo $image4; ?>" class="img-thumbnail" alt="Fourth Image" style="width:75px; height:75px">
						</a>
					<?php
					}
					if($image5!="" || $image5!=null)
					{
					?>
						<a href="javascript:show('fifth');">
						  	<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $seller_email; ?>/<?php echo $product_id;?>/<?php echo $image5; ?>" class="img-thumbnail" alt="Fifth Image" style="width:75px; height:75px">
						</a>
					<?php
					}
					?>
					</div>
				</div>
				<br/>
				<hr style=" margin-top:0px;" />
				<div class="row">
					<div class="panel panel-default" style="margin-right:53px; margin-left:15px; overflow-y:auto; height:580px;">
    					<div class="panel-body">
							<h4 style="padding-left:15px;"> User Feedback:</h4>
							<hr style=" margin-top:0px;" />
							<div class="row">
							<form>
								<div class="form-group" >
								<div class="col-sm-1">
								<?php 
									if($img=="default.png"){
									?>
									<img src="<?php echo base_url(); ?>resources/user_image/<?php echo $img; ?>" class="img-circle" alt="soldby" width="50" height="50" class="img-responsive">
								<?php
								}
								else{
								
								?>
								<img src="<?php echo base_url(); ?>resources/user_image/<?php echo $email; ?>/<?php echo $img; ?>" class="img-circle" alt="soldby" width="50" height="50" class="img-responsive">
							
								<?php
								}
								
								?>
								
								
								</div>
								<div class="col-sm-10">
								<div class=" input-group" style="margin-left: 31px;">
									<textarea class="form-control col-sm-10"  placeholder="Enter your comment here"></textarea>
									<span class="input-group-addon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
								</div>
								</div>

								</div>
							</form>
							</div>
							<hr/>
							<div class="row">
								<div class="col-sm-1">
									<img src="<?php echo base_url(); ?>resources/user_image/default.png" class="img-circle" alt="soldby" width="50" height="50" class="img-responsive" style="margin-top:21px;">
								</div>
								<div class="col-sm-10">
									<div class="dialogbox">
									    <div class="body" style="margin-left:34px;">
									        <span class="tip tip-left"></span>
									        <div class="message">
									        	<span>Too Expensive.</span>
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

		<div class="col-sm-7">
			<div class="row">
				<h4 style="margin:-3px;"><b><?php echo $product_name;?></b></h4>
				<hr/>
			</div>
			<div class="row">
				<div class="col-md-7">
					<form method="post" action="<?php echo base_url(); ?>index.php/controller/insertProductIntoCart/<?php echo $product_id; ?>/<?php echo $color; ?>">
						<div class="row">
							<div class="form-group is-empty ">
									<label for="price" class="col-sm-3 control-label">Price:</label>
									<div class="col-sm-7">
										<input type="text" name="price" id="price" class="form-control" value="<?php echo $price=$price-$discounted_price;?>"readonly>
									</div>
									<h5 style="padding-top:7px;">/piece</h5>
									<span class="material-input"></span>
									
							</div>
						</div>
						<!--
						<br/>
						<div class="row">
							<div class="form-group is-empty ">
								<label for="color" class="col-sm-3 control-label" style="padding-top:-10px;">Color:</label>
								<div class="col-sm-7">
									<select class="select form-control">
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
						</div>-->
						<br/>
						<div class="row">
						<div class="form-group is-empty ">
								<label for="price" class="col-sm-3 control-label">Quantity:</label>
								<div class="col-sm-7">
									<div class="input-group">
										<span class="input-group-btn">
										  	<button type="button" class="btn btn-danger" onclick="decrease_quantity()" id="decrease_qty"><i class="fa fa-minus" aria-hidden="true"></i></button>
										</span>
										<?php 
										if($quantity==0)
										{?>
										<input type="text" name="purchased_quantity" class="form-control" style="text-align:center;" value="0" readonly/>
										<?php 
										}
										else
										{?>
										<input type="text" id="quantity" name="purchased_quantity" class="form-control" style="text-align:center;" value="1" readonly/>
										<?php 
										}?>
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
									<input type="text" name="total_price" id="total_price" class="form-control" value="<?php echo $price; ?>" readonly>
								</div>
								<span class="material-input"></span>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="form-group is-empty ">
								<div class="row">
								<label for="price" class="col-sm-3 control-label">Shipment Charge:</label>
								<?php
								if($shipment_type=="free"){
								?>
									<label for="price" class="col-sm-9 control-label">Free</label>
									</div>
								<?php
								}else{
									if($inside_valley!=0){
								?>
								<label for="price" class="col-sm-9 control-label">Inside Valley : Rs. <?php echo $inside_valley;?></label>
								</div>
								<?php
									}
									if($outside_valley!=0){
								?>
								
								<div class="row">
									<label for="price" class="col-sm-offset-3 col-sm-9 control-label">Outside Valley : Rs. <?php echo $outside_valley;?></label>
								</div>
								<?php
									}
								}
								?>
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
	    						<img src="<?php echo base_url(); ?>resources/user_image/<?php echo $seller_email; ?>/<?php echo $seller_img; ?>" class="img-circle" alt="soldby" width="50" height="50" class="img-responsive center-block" style="display: block; margin: 0 auto;">
	    						<label style="margin-top:10px; word-wrap: break-word;"><?php echo $seller_name;?> Shop</label>
	    					</div>
	    					<div class="btn-group btn-group-justified" style="margin-top:10px;">
							  	<a href="<?php echo base_url(); ?>controller/sellerMysite/<?php echo $seller_id;?>" class="btn btn-default">Visit Store</a>
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
						<?php
							if($return_type=="not"){
						?>
						<h6>Returns not accepted</h6>
						<?php
							}
							else{	
						?>
						<h6>Returns accepted within <?php echo $return_day;?> days, only for damaged or wrong products. Return offered in the form of <?php echo $refund;?>. Buyer is the responsible for the shipping fees.</h6>
						
						<?php
							}	
						?>
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
					
					<?php
							if($additional_policy!="" || $additional_policy!=null){
						?>
				    <li><a data-toggle="tab" href="#return_policy">Return Policy</a></li>
					<?php
							}	
					?>
				
				</ul>

				<div class="tab-content">
				    <div id="product_details" class="tab-pane fade in active" style="margin-top:17px">
				    	<label>Additional Detail :</label>
						<table border="0">
						    <tbody>
						      <tr>
						        <td>Condition </td>
								<td> : </td>
						        <td><?php echo $product_condition;?></td>
						      </tr>
							  <tr>
						        <td>Color </td>
								<td> : </td>
						        <td><?php echo $color;?></td>
						      </tr>
							  <tr>
						        <td>Discription </td>
								<td> : </td>
						        <td><?php echo $description;?></td>
						      </tr>
						    </tbody>
						  </table>
						
					</div>

				    <div id="return_policy" class="tab-pane fade" style="margin-top:17px">
				      	<div><label>Additional Policy :</label></div>
				      	<div>
				      		<p><?php echo $additional_policy;?></p>
				      	</div>
				    </div>
				</div>
			</div>
    		
    	</div>
  	</div>
</div>
</div>
</div>
<script>
$('#first').elevateZoom({
    
	  zoomType: "inner",
	  cursor: "crosshair"
   }); 
function show(choosed) {
	if(choosed=='first')
	{
		$(first).show();
		$(second).hide();
		$(third).hide();
		$(fourth).hide();
		$(fifth).hide();
		$('#first').elevateZoom({
    
	  zoomType: "inner",
	  cursor: "crosshair"
   }); 
	}
	else if(choosed=='second')
	{
		$(second).show();
		$(first).hide();
		$(third).hide();
		$(fourth).hide();
		$(fifth).hide();
		$('#second').elevateZoom({
     zoomType: "inner",
	  cursor: "crosshair"
   }); 
	}
	else if(choosed=='third')
	{
		$(third).show();
		$(second).hide();
		$(first).hide();
		$(fourth).hide();
		$(fifth).hide();
		$('#third').elevateZoom({
     zoomType: "inner",
	  cursor: "crosshair"
   }); 
		
	}
	else if(choosed=='fourth')
	{
		$(fourth).show();
		$(second).hide();
		$(third).hide();
		$(first).hide();
		$(fifth).hide();
		$('#fourth').elevateZoom({
     zoomType: "inner",
	  cursor: "crosshair"
   });
	}
	else
	{
		$(fifth).show();
		$(second).hide();
		$(third).hide();
		$(fourth).hide();
		$(first).hide();
		 $('#fifth').elevateZoom({
     zoomType: "inner",
	  cursor: "crosshair"
   }); 
	}

	//$(choosed).show();
     //	alert(choosed);
         
     	
          
      
}
</script>

<script type="text/javascript">
	function decrease_quantity()
	{
		var current_value=parseInt(document.getElementById('quantity').value);
		var price=parseInt(document.getElementById('price').value);
		if(current_value==1)
		{
			document.getElementById('quantity').value=1;
			document.getElementById('total_price').value=price;
		}
		else
		{
			var x=document.getElementById('quantity').value=current_value-1;
			document.getElementById('total_price').value=price*x;
		}
	}
	function increase_quantity()
	{
		var current_value=parseInt(document.getElementById('quantity').value);
		var price=parseInt(document.getElementById('price').value);
		
		if(current_value==<?php echo $quantity;?>)
		{
			var x=document.getElementById('quantity').value=<?php echo $quantity;?>;
			document.getElementById('total_price').value=price*x;
		}
		else
		{
			var x=document.getElementById('quantity').value=current_value+1;
			document.getElementById('total_price').value=price*x;
		}
		
		
		
	}
</script>




