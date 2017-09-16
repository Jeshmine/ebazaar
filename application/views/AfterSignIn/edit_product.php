
<?php

	foreach ($productExtract->result() as $row)
	{	
		$product_id=$row->product_id;
		$product_name=$row->product_name;
		$image1=$row->image1;
		$image2=$row->image2;
		$image3=$row->image3;
		$image4=$row->image4;
		$image5=$row->image5;
		
		$type_id=$row->type_id;
		$price=$row->price;
		$discounted_price=$row->discounted_price;
		$product_quantity=$row->product_quantity;
		$product_condition=$row->product_condition;
		
		$color=$row->color;
		$description=$row->description;
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


<style>
	hr
	{
		margin-top:0px;
	}
	
	.returnAcceptedWrapper,.shipmentPanel{
		display:none;
	}
	
</style>

<div class="col-sm-8 col-sm-offset-2" style=" margin-top:77px">
	<div class="panel panel-default">
		  <div class="panel-body">
			<h3><b>Add New Product</b></h3>
    		<hr/>
			<form class="form-horizontal" role="form" id="product_add_form" name="product_add_form" method="post" action="<?php echo base_url(); ?>index.php/controller/insertProductProcess" enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label col-sm-3" for="productName">Product Name:</label>
						<div class="col-sm-5">
						  <input type="text" class="form-control" id="productName" name="productName" placeholder="Product Name" value="<?php echo $product_name;?>">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-3" for="productImage1">Image 1:</label>
						<div class="col-sm-5">
						  <input type="file" class="form-control" id="productImage1" name="productImage1" value="sdfdsgds">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="productImage2">Image 2 (Optional):</label>
						<div class="col-sm-5">
						  <input type="file" class="form-control" id="productImage2" name="productImage2">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="productImage3">Image 3 (Optional):</label>
						<div class="col-sm-5">
						  <input type="file" class="form-control" id="productImage3" name="productImage3">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="productImage4">Image 4 (Optional):</label>
						<div class="col-sm-5">
						  <input type="file" class="form-control" id="productImage4" name="productImage4">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="productImage5">Image 5 (Optional):</label>
						<div class="col-sm-5">
						  <input type="file" class="form-control" id="productImage5" name="productImage5">
						</div>
					</div>
					
					<div class="form-group" style="padding-left:15px; padding-right:15px; ">
						<h4><b>Product Detail:</b></h4>
								<div class="panel panel-default " style="padding-top:15px">
									<div class="panel-body">
										<div class="row">
											<label for="category" class="col-sm-2 control-label">Category:</label>
											<div class="col-sm-4">
												<select class="select form-control" name="category" onchange="gotoSubMenu(this.value)" >
													<option value="100" selected>All Category</option>
													  <?php
													  foreach ($category->result() as $row)
														{	
														?>	
															<option value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?></option>
														<?php
														}
														?>
												</select>
											</div>
											<label for="price" class="col-sm-2 control-label">Price:</label>
											<div class="col-sm-4">
												<input type="text" name="price" class="form-control" id="price" value="<?php echo $price;?>">
											</div>
										</div>
										<br/>
										<div class="row">
											<label for="sub_category" class="col-sm-2 control-label">Sub Category:</label>
											<div class="col-sm-4" >
												<select class="select form-control" name="subcategory" id="txtHint" onchange="gotoTypeMenu(this.value)">
													<option value="1000">All Sub Category</option>
													
													
												</select>
											</div>
											<label for="discounted_price" class="col-sm-2 control-label">Discounted Price:</label>
											<div class="col-sm-4">
												<input type="text" name="discounted_price" class="form-control" id="discounted_price" value="<?php echo $discounted_price;?>">
											</div>
										</div>
										<br/>
										<div class="row">
											<label for="type" class="col-sm-2 control-label">Type:</label>
											<div class="col-sm-4">
												<select class="select form-control" name="type" id="txtHinttype">
													<option value="10000">All Types</option>
												</select>
											</div>
											<label for="quantity" class="col-sm-2 control-label">Quantity:</label>
											<div class="col-sm-4">
												<div class="input-group">
													<span class="input-group-btn">
														<button type="button" class="btn btn-danger" onclick="decrease_quantity()" id="decrease_qty"><i class="fa fa-minus" aria-hidden="true"></i></button>
													</span>
													<input type="text" id="quantity" name="quantity" class="form-control" style="text-align:center;" value="<?php echo $product_quantity;?>" />
													<span class="input-group-btn">
														<button type="button" class="btn btn-success" onclick="increase_quantity()" id="increase_qty"><i class="fa fa-plus" aria-hidden="true"></i></button>
													</span>
												</div>
											</div>
										</div>
										<br/>
										<div class="row">
											<label for="condition" class="col-sm-2 control-label">Condition:</label>
											<div class="col-sm-4">
												<select class="select form-control" name="condition">
													<option value="New">New</option>
													<option value="Used">Used</option>
												</select>
											</div>
											<label for="color" class="col-sm-2 control-label">Color:</label>
											<div class="col-sm-4">
												<select class="selectpicker" name="color" multiple data-actions-box="true">
													<option value="Black" selected>Black</option>
													<option value="Blue">Blue</option>
													<option value="White">White</option>
													<option value="Brown">Brown</option>
													<option value="Yellow">Yellow</option>
													<option value="Orange">Orange</option>

												</select>
											</div>
										</div>
										<br/>
										<div class="row">
											<label for="description" class="col-sm-2 control-label">Description:</label>
											<div class="col-sm-10">
												<textarea class="form-control" rows="5" name="description" placeholder="Enter more details about the product here" ><?php echo $description;?></textarea>
											</div>
										</div>
									</div>
								</div>
					</div>
					
					<div class="form-group" style="padding-left:15px; padding-right:15px; ">
						<h4><b>Shipment Detail:</b></h4>
								<div class="panel panel-default " style="padding-top:15px">
									<div class="panel-body">
									
										<div class="row">
											<label for="shipment" class="col-sm-2 control-label">Shipment:</label>
											<div class="col-sm-4">
												<select class="select form-control" name="shipment" id="shipment" onchange="shipmentFN()">
													<option value="free">Free Shipment</option>
													<option value="paid">Paid Shipment</option>
													</optgroup>
												</select>
											</div>
										</div>	
										<div class="row">	
											<div class="col-sm-10 col-sm-offset-2">
														<div class="panel panel-default shipmentPanel" style="margin-top:15px;">
															<div class="panel-body">
																<div class="row">
																	<div class="col-sm-3 checkbox">
																		<label>Inside Valley :</label>
																	</div>
																	<div class="col-sm-3">
																		<input type="text" value="<?php echo $inside_valley;?>" name="inside_price" placeholder="Rs." class="form-control" id="inside_price">
																	</div>
																</div>	
																<br/>
																<div class="row">
																	<div class="col-sm-3 checkbox">
																		<label>Outside Valley</label>
																	</div>
																	<div class="col-sm-3">
																		<input type="text" value="<?php echo $outside_valley;?>" name="outside_price" placeholder="Rs." class="form-control" id="outside_price">
																	</div>
																</div>
															</div>
														</div>
											</div>
											
										</div>
										<br/>
										<div class="row">
											<label for="handlingTime" class="col-sm-2 control-label">Handling Time:</label>
											<div class="col-sm-4">
												<select class="select form-control" name="handlingTime">
													<option value="0">Same Business Day</option>
													<option value="1">1 Business Day</option>
													<option value="2">2 Business Day</option>
													<option value="3">3 Business Day</option>
													<optgroup label="Exception handling times">
														<option value="4">4 business days</option>
														<option value="5">5 business days</option>
														<option value="10">10 business days</option>
														<option value="15">15 business days</option>
														<option value="20">20 business days</option>
														<option value="30">30 business days</option>
													</optgroup>
												</select>
											</div>
											
										</div>
									</div>
								</div>
					</div>
					
					<div class="form-group" style="padding-left:15px; padding-right:15px; ">
						<h4><b>Other Detail:</b></h4>
								<div class="panel panel-default " style="padding-top:15px">
									<div class="panel-body">
									
										<div class="row">
											<label for="return" class="col-sm-2 control-label">Retutn:</label>
											<div class="col-sm-4">
												<select class="select form-control" name="returnType" id="return" onchange="returnAccepted()">
													<option value="not">No Return Accepted</option>
													<option value="accepted">Return Accepted</option>
												</select>
											</div>
											
										</div>
										<br/>
										<div class="panel panel-default returnAcceptedWrapper">
											<div class="panel-body">
												<div class="row">
													<label class="col-sm-12">After receiving the item, your buyer should start a return within:</label>
												
												</div>
												<div class="row">
													<div class="col-sm-4">
														<select class="select form-control" name="acceptedDays">
															<option value="Days_14">14 Days</option>
															<option value="Days_30">30 Days</option>
															<option value="Days_60">60 Days</option>
														</select>
													</div>
													
												</div>
												
												<br/>
												<div class="row">
													<label class="col-sm-12">Refund will be given as:</label>
												
												</div>
												<div class="row">
													<div class="col-sm-4">
														<select class="select form-control" name="acceptedType">
															<option value="MoneyBack" selected="">Money Back</option>
															<option value="MoneyBackOrReplacement">Money back or replacement (buyer's choice)</option>
															<option value="MoneyBackOrExchange">Money back or exchange (buyer's choice)</option>
														</select>
													</div>
											
												</div>
												
												<br/>
												<div class="row">
													<label class="col-sm-12">Additional return policy details (Optional):</label>
												
												</div>
												<div class="row">
													<div class="col-sm-10">
													<textarea class="form-control" rows="5" name="acceptedDescription" placeholder="Make sure these additional details and your listing description match what you picked above"><?php echo $additional_policy;?></textarea>
												</div>
											
												</div>
											</div>
										</div>
									</div>
								</div>
					</div>
					
					<div class="row">
						<div class="col-sm-6">
							<button type="submit" class="btn btn-success pull-right">Save</button>
						</div>
						<div class="col-sm-6">
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
						
					</div>
						
			
					
					
	    	</form>
			
		  </div>
	  
	 </div>
</div>
<!-- Custom JavaScript for mysite insert product -->
	<script type="text/javascript">
function shipmentFN()
	{
		var x=document.getElementById('shipment').value;
		if(x=="free"){
			$(".shipmentPanel").hide();
		}
		else{
			$(".shipmentPanel").show();
		}
		
		
	}
	
	
	function returnAccepted()
	{
		var x=document.getElementById('return').value;
		if(x=="not"){
			$(".returnAcceptedWrapper").hide();
		}
		else{
			$(".returnAcceptedWrapper").show();
		}
		
		
	}
	
	
	
	
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
	
	
	function gotoSubMenu(num){
		 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "http://localhost/ebazaar/index.php/controller/extractSubCategory/" + num, true);
        xmlhttp.send();
		
	}
	
	function gotoTypeMenu(num){
		 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHinttype").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "http://localhost/ebazaar/index.php/controller/extractTypeMenu/" + num, true);
        xmlhttp.send();
		
	}
</script>
