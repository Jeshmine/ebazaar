<?php  $c=0;
	  $total=0;
	  $master_total=0;
	  $count=0;
	  $grand_total=0;
?>

	<div class="container-fluid" style=" margin-top:77px">
	<?php  
		if($no_cart!=0){
		?>
		<div class="col-sm-9">
			<div class="panel panel-default">
				    <div class="panel-body">
						
				    	<table class="table" style="margin-bottom:0px;">
					    <thead>
					      <tr>
					      	
					      	<th>S.N</th>
					        <th>Product Details:</th>
					        <th>Quantity</th>
					        <th>Price per piece</th>
					        <th>Discounted Price</th>
					        <th>Shipping Fee</th>
					 		<th>Total Price</th>
					 		<th></th>
					      </tr>
					    </thead>
					    <tbody>
					      
						  <?php 
						  foreach ($cart->result() as $row)
						{	
							$cart_id=$row->cart_id;
							$product_id=$row->product_id;
							$color=$row->color;
							$quantity=$row->quantity;

								$data=$this->crud->crudproductDetailForm($product_id);
								foreach ($data->result() as $row)
									{	
										$product_name=$row->product_name;
										$price=$row->price;
										$discounted_price=$row->discounted_price;
										$shipment_type=$row->shipment_type;
										$inside_valley=$row->inside_valley;
										$outside_valley=$row->outside_valley;
										$product_condition=$row->product_condition;
										$propduct_image1=$row->image1;
										$seller_id=$row->seller_id;
										$seller_name=$row->name;
										$seller_email=$row->email;
										$seller_img=$row->image;
										$seller_acoount=$row->account_no;
									?>
						  
						 
					      	<tr class="change" data-book-index="<?php echo $c; ?>">
						      	
						      	<td><?php echo $c+1; ?>.</td>
						        <td>
						        	<div class="col-sm-3" style="padding-left:1px;">
						        		<img src="<?php echo base_url(); ?>resources/product_img/<?php echo $seller_email; ?>/<?php echo $product_id;?>/<?php echo $propduct_image1; ?>" class="img-thumbnail" alt="product-image" style="max-width:83px; height:89px; ">
						        	</div>
									
						        	<div class="col-sm-offset-1 col-sm-8">
							           	<?php echo $product_name;?>
							        	<br/>
							        	<br/>
							        	<label>Color:</label><?php echo $color;?>
										<br/>
							        	<label>Condition:</label><?php echo $product_condition;?>
							        	<br/>
							        	<label>Vendor Name:</label><?php echo $seller_name;?>
						        	</div>
						       	</td>
						        <td id="quantity"><?php echo $quantity;?></td>
						        <td>Rs. <?php echo $price=$price-$discounted_price;?></td>
						        <td id="discounted_price">Rs. <?php echo $discounted_price;?></td>
								
								<?php
									if($shipment_type=="free"){
										$shipment_price=0;
								?>
						        <td id="shipping_fee" >Free</td>
								<?php
									}
									else{
										$shipment_price=$inside_valley+$outside_valley;
								?>
								 <td id="shipping_fee" >Rs. <?php echo $shipment_price;?></td>
								<?php
									}
								?>
								<?php
									$total=($quantity*$price)+$shipment_price;
								?>
						        <td id="total_amount" name="total[<?php echo $c;?>]">Rs. <?php echo $total;?></td>
						        <td><a href="<?php echo base_url(); ?>index.php/controller/deleteProductFromCart/<?php echo $cart_id;?>"><button><i class="fa fa-trash-o" aria-hidden="true"></i></button></a></td>
						    </tr>
							
							<?php 
						}
						$master_total=$master_total+$total;
						$c++;
					} 
					?>
					
						    
					    </tbody>
					  </table>
					
			
				    </div>
			</div>
		</div>
		<div class="col-sm-3">
			<div style="position: fixed; width:22%;">
				<div class="panel panel-default">
					<div class="panel-body">
						<h4><b>Your Purchase Details:</b></h4>
						<hr/>
						<table class="table" style="margin-bottom:0px; padding:8px;">
					    	<tbody>
					    		<tr>
					    			<td style="border-top:0px;">Total:</td>
					    			<td id="net_amount_display" style="border-top:0px;">Rs. <?php echo $master_total;?></td>

					    		</tr>

					    		<tr>
					    			<td style="border-top:0px;">Vat(13%):</td>
					    			<td id="vat_display" style="border-top:0px;">Rs. <?php echo $vat=$master_total*0.13;?></td>

					    		</tr>

					    		<tr>
					    			<td style="border-top:0px;">Grand Total:</td>
					    			<td  style="border-top:0px;" id="grand_total_display">Rs. <?php echo $grand_total=$master_total+$vat;?></td>

					    		</tr>
					    		<tr>
						      	<td colspan="8" style="border-top:0px">
						        	<a href="<?php echo base_url(); ?>index.php/controller/payment_page/<?php echo $grand_total;?>"><button type="button" class="btn-raised btn-success btn" style="width:100px; float: right; margin-top:7px; ">Buy Now</button></a>
								</td>
						    </tr>
					    	</tbody>
					    </table>

					</div>
				</div>
			</div>
		</div>
		<?php  
			}
			else{
		?>
		<div class="panel panel-default" >
			<div class="panel-body">
				<h3>No product in cart!!!</h3>
			</div>
		</div>
		<?php  
			}
		?>
	</div>
	
			 
	
