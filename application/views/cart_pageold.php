
	<div class="container" style=" margin-top:77px">
		<div class="row">
			<div class="panel panel-default" style="box-shadow:1.5px 1.5px 7.5px 0.3px #ADADAD; padding-top:15px">
			    <div class="panel-body">
				<?php  if ($cart->num_rows() > 0)
				{ ?>
			    	<table class="table" style="margin-bottom:0px;">
				    <thead>
				      <tr>
				      	
				      	<th>S.N</th>
				        <th>Product Name And Details:</th>
				        <th>Quantity</th>
				        <th>Price per piece</th>
				        <th>Discounted Price</th>
				        <th>Shipping Fee</th>
				 		<th>Total Price</th>
						<th>Status</th>
				      </tr>
				    </thead>
				    <tbody>
				      
					  <?php  $c=0;
					  $total=0;
					  $grand_total=0;
					  $count=0;?>
					  
					  
					  <?php 
					  
					 
					  foreach ($cart->result() as $row)
					{	
						$c++;
						$product_id=$row->product_id;
						$buyer_id=$row->buyer_id;
						$color=$row->color;
						$quantity=$row->quantity;

							$data=$this->crud->crudproductDetailForm($product_id);
							foreach ($data->result() as $row)
								{	
									$product_name=$row->product_name;
									$price=$row->price;
									$discounted_price=$row->discounted_price;
									$shipment_price=$row->shipment_price;
									$image1=$row->image1;
									$seller_id=$row->seller_id;
									$seller_name=$row->name;
									$seller_img=$row->image;
									$description=$row->description;
					?>
				      	<tr class="change">
					      	
					      	<td><?php echo $c; ?>.</td>
					        <td>
					        	<div class="col-sm-2">
					        		<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $image1; ?>" class="img-thumbnail" alt="product-image" width="500" height="520">
					        	</div>
					        	<div class="col-sm-10">
						           	<?php echo $product_name;?>
						        	<br/>
						        	<br/>
						        	<label>Color:</label><?php echo $color;?>
						        	<br/>
						        	<label>Vendor Name:</label><?php echo $seller_name;?>
					        	</div>
					       	</td>
					        <td><?php echo $quantity;?></td>
					        <td><?php 
							$price=$price-$discounted_price;
							echo "Rs.". $price?></td>
					        <td><?php echo "Rs." .$discounted_price;?></td>
					        <td><?php echo $shipment_price;?></td>
							<?php
								if ($shipment_price=="free"){
									$sub_total=$quantity * $price;
									echo"<td name='total[".$count."]'>".$sub_total."</td>";
								}
								else{
									$sub_total=($quantity*$price)+80;
									echo"<td name='total[".$count."]'>Rs. ".$sub_total."</td>";
								}
							?>
							<td><input type="checkbox" name="check[<?php echo $count; ?>]" onchange="change_total(this);" checked></td>
					    </tr>
				      	
					<?php 
					
					
						}
					$total=$total+$sub_total;
					$count=$count+1;
					} 
					?>
					<?php $grand_total=$total+($total*0.13);?>
					    <tr>
					        <td colspan="7" align="right"><b>Total:</b></td>
					        <td  id="net_amount">Rs. <?php echo $total;?></td>
					    </tr>
					    <tr>
					        <td colspan="7" align="right" style="border-top:0px"><b>Vat(13%):</b></td>
					        <td style="border-top:0px" id="vat">Rs. <?php echo $total*0.13;?></td>
					    </tr>
					    <tr>
					        <td colspan="7" align="right" style="border-top:0px"><b>Grand Total:</b></td>
					        <td style="border-top:0px"  id="grand_total">Rs. <?php echo $grand_total;?></td>
					    </tr>
					    <tr>
					      	<td colspan="8" style="border-top:0px">
					        	<button type="submit" class="btn-raised btn-success btn"  data-toggle="modal" data-target="#myModal" style="width:100px; float: right; margin-top:7px; ">Buy Now</button>
							</td>
					    </tr>
				    </tbody>
					
					<?php
					}
					else{
						echo'<div class="panel panel-default" style="box-shadow:1.5px 1.5px 7.5px 0.3px #ADADAD; padding-top:15px">
								<div class="panel-body">
									<h3>No product in cart!!!</h3>
								</div>
							</div>'
								;
						
					}
					
					?> 
					
					



	
			    </div>
			</div>
		</div>
	</div>
				<!-- Modal -->
				  <div class="modal fade" id="myModal" role="dialog">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h2 class="modal-title"><b>Shipping Details:</b></h2>
				        </div>
				        <div class="modal-body">
					        <form class="form-horizontal" role="form">
						       	<div class="form-group ">
					          		<label class="col-sm-3 control-label">Country:</label>
					          		<div class="col-sm-6">
						          		<input type="text" class="form-control" name="" placeholder="Country">
						          	</div>
						        </div>
								</br>
								</br>
						        <div class="form-group ">
					          		<label class="col-sm-3 control-label">City:</label>
					          		<div class="col-sm-6">
					          			<input type="text" class="form-control" name="" placeholder="City">
					          		</div>
					          	</div>
								</br>
								</br>
					          	<div class="form-group ">
					          		<label class="col-sm-3 control-label">Region:</label>
					          		<div class="col-sm-6">
					          			<input type="text" class="form-control" name="" placeholder="Region">
					          		</div>
					          	</div>
								</br>
								</br>
					           	<div class="form-group ">
					          		<label class="col-sm-3 control-label">Mobile Number:</label>
					          		<div class="col-sm-6">
					          			<input type="text" class="form-control" name="" placeholder="Mobile No.">
					          		</div>
					          	</div>
								</br>
								</br>
					          	<div class="form-group ">
					          		<label class="col-sm-3 control-label">Payment Type:</label>
					          		
						          		<img class="img-responsive col-sm-2" src="<?php echo base_url(); ?>resources/icons/Visa_Logo.png" alt="visa_card" height="30" width="40" style="margin-top:5px" />
										<img class="img-responsive col-sm-2" src="<?php echo base_url(); ?>resources/icons/MasterCard_Logo.svg.png" alt="master_card" height="30" width="40" style="margin-top:-3px"/>
										<img class="img-responsive col-sm-2" src="<?php echo base_url(); ?>resources/icons/PayPal_logo.png" alt="paypal" height="30" width="40" style="margin-top:7px"/>
					          		
					          	</div>
								</br>
								</br>
								</br>
								</br>
					          	<div class="form-group ">
						          	<label class="col-sm-3 control-label">Card Number:</label>
						          	<div class="col-sm-6">
						          		<input type="text" class="form-control" name="">
						          	</div>
						        </div>
								</br>
								</br>
						        <div class="form-group ">
						          	<label class="col-sm-3 control-label">security code:</label>
						          	<div class="col-sm-6">
						          		<input type="password" class="form-control" name="">
						          	</div>
						        </div>
								</br>
								</br>
						        <div class="form-group ">
					          		<label class="col-sm-3 control-label">Card Holder's Name:</label>
					          		<div class="col-sm-6">
					          			<input type="text" class="form-control" name="">
					          		</div>
					          	</div>
								</br>
								</br>
					          	<div class="form-group ">
					          		<button type="button " class="btn btn-success center-block">Submit</button>
					          	</div>
					        </form>

				        </div>
				        
				      </div>
				    </div>
				  </div>
				  
				  <script type="text/javascript">
		function change_total(ash)
		{
		
		var $row  = $(ash).parents('.change'),
    	index = $row.attr('data-book-index');


    	var val1=$("[name='total["+index+"]']").text();
    	var split=val1.split(" ");
    	count=split.length;
		value=split[count-1];

    	

    	var val2=$("#net_amount").text();
    		var split1=val2.split(" ");
    		count1=split1.length;
			net_amount=split1[count-1];

	
    	if($("[name='check["+index+"]']").prop('checked')) 
    	{	
    		
    		var v=parseInt(net_amount)+value;
    		
    	}
    	else
    	{
    		var v=parseInt(net_amount)-parseInt(value);
    		
    	}

    	var vat=v*0.13;
    	var grand_total=v+vat;

    	$("#net_amount").html("Rs. "+v);
    	$("#vat").html("Rs. "+vat);
    	$("#grand_total").html("Rs. "+grand_total);

    }
	</script>