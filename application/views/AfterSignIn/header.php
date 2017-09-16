<?php 
foreach ($query->result() as $row)
			{	
				$user_id=$row->user_id;
				$name=$row->name;
   				$email=$row->email;
				$location=$row->location;
   				$phone=$row->phone;
				$img=$row->image;
				$coverImg=$row->cover_image;
				$description=$row->description;
			}
			if($img=="" || $img==null){
				$img="default.png";
			}
?>

  <?php  
		$no_cart=$cart->num_rows();
	?>
	
	<?php
	$c=0;
		foreach ($notification->result() as $row)
			{	
				$notification_read=$row->notification_read;
				if($notification_read==0){	
				$c++;
				}
			}
	?>
	

<nav class="navbar navbar-fixed-top topHeader">	
	<div class="container-fluid">
		<div class="row" style="margin-bottom: 7px; margin-top: 7px;">
			<div class="col-md-1"><!--Ebazaar Logo Section-->
				<a href="#"><img src="<?php echo base_url(); ?>resources/ebazaarlogo.png"/></a>
			</div>
			
			<div class="col-md-5 searchWrapper" ><!--Search Product Section-->
				<form class="form-horizontal" role="form" method="post" action="">
					<div class="col-md-12">
						<input type="text" class="form-control" style="padding-right: 138px;" placeholder="I'm shopping for..." aria-label="Text input with segmented button dropdown">
						<div class="input-group searchRightSide">
							<select style="border: 1px solid #ccc;height:34px;">
							  <option value="volvo" selected>All Category</option>
							  <?php
							  foreach ($category->result() as $row)
								{	
								?>	
									<option value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?></option>
								<?php
								}
								?>
							  
							  
							  
							</select>
						<button type="button" class="btn btn-success searchRightSideBtn"><span class="glyphicon glyphicon-search"></span></button>
					
						</div>
					</div>				
				</form>
			</div>
			
			
			<div class="col-md-1">
				<ul class="mysiteTab">
						<a href="<?php echo base_url(); ?>index.php/controller"><li>Home</li></a>
						 | 
						<a href="<?php echo base_url(); ?>index.php/controller/mysite"><li>mySite</li></a>
				</ul>
			</div>
			
			
			
			
			<div class="col-md-2 iconToolWrapper" style="margin-left:57px;">
				<div class="col-xs-4 col-sm-4 col-md-4">
				
				
					<i class="fa fa-bell fa-2x" aria-hidden="true" id="bellIcon" style="cursor:pointer;"></i>
						<?php 
							if($c!=0)
							{
						?>
						<span class="badge" id="bellIconBadge" style="position:absolute;top:-5px;left:29px;background-color:red;cursor:pointer;"><?php echo $c;?></span>
						<?php 
							}
						?>
						
					<div class="iconToolWrapperPopUpBox" id="bell">
					
					<div class="notificationTextWrapper">
						<span style="font-weight:bold">Notification</span>
						<a href="<?php echo base_url(); ?>index.php/controller/notification"><span id="notificationTextWrapperShowAll" style="float:right;font-size:13px">Show all</span></a>
					</div>
						<div class="block_wrapper">
							<div class="block_room">
							
							<?php  
							if ($notification->num_rows() !=0 )
								{
							
								foreach ($notification->result() as $row)
									{	
										$buyer_id=$row->buyer_id;
										$message=$row->message;
										$notification_read=$row->notification_read;
										
										$query=$this->crud->crudExtractBuyerData($buyer_id);
										foreach ($query->result() as $row)
										{
											$buyer_name=$row->name;
											$buyer_email=$row->email;
											$buyer_image=$row->image;
										}
							?>
							<div class="single_room">
								<?php 
									if($buyer_image=="" || $buyer_image==null){
										$buyer_image="default.png";
									?>
								<img src="<?php echo base_url(); ?>resources/user_image/<?php echo $buyer_image;?>" class="single_room_user_pic"/>
								<?php 
									}
									else{
								?>
								<img src="<?php echo base_url(); ?>resources/user_image/<?php echo $buyer_email;?>/<?php echo $buyer_image;?>" class="single_room_user_pic"/>
								<?php 
									}
								?>
								
								<div class="single_room_user_message"><b><?php echo $buyer_name;?></b><?php echo $message;?></div>
							</div>
							<?php
									}
								}else{
								?>	
								<div class="">
									<h4>No Notification</h4>
								</div>
								
								<?php	
								}
									?>
							
							</div>
						</div>
					</div>
				
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4">
					<a href="<?php echo base_url(); ?>index.php/controller/wishlist"><i class="fa fa-heart fa-2x" aria-hidden="true" id="heartIcon" style="cursor:pointer;"></i></a>
				</div>
				
				<div class="col-xs-4 col-sm-4 col-md-4">
					<a href="<?php echo base_url(); ?>index.php/controller/cart"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true" id="cartIcon" style="cursor:pointer;"></i>
					
					<?php if($no_cart!=0){
					?>
					<span class="badge" id="cartIconBadge" style="position:absolute;top:-5px;left:29px;background-color:red;cursor:pointer;"><?php echo $no_cart;?></span>
					<?php
					}
					?>
					</a>
				</div>
				
				
			</div>
			
			<div class="col-md-2" id="user_account_wrapper">
						<div id="user_account">
							<?php 
							if($img=="default.png"){
							?>
							<img src='<?php echo base_url(); ?>resources/user_image/<?php echo $img;?>' id='profile_img'/>
							<?php
							}
							else{
							
							?>
							<img src='<?php echo base_url(); ?>resources/user_image/<?php echo $email;?>/<?php echo $img;?>' id='profile_img'/>
							<?php
							}
							
							?>
							
							<span id='user_name'><?php echo $name;?></span>    <!-- name-->
						</div>
						
						<div id="user_account_setting_wrapper">
							<div class="col-md-5">
							<?php 
							if($img=="default.png"){
							
							?>
								<img src='<?php echo base_url(); ?>resources/user_image/<?php echo $img;?>' id='user_account_setting_wrapper_profile_img' style="height:111px;width:111px; border-radius:5px;"/>
							<?php
							}
							else{
							
							?>
							<img src='<?php echo base_url(); ?>resources/user_image/<?php echo $email;?>/<?php echo $img;?>' id='user_account_setting_wrapper_profile_img' style="height:111px;width:111px; border-radius:5px;"/>
							<?php
							}
							
							?>
							
							</div>
							<div class="col-md-7">
								
								<p style="font-size:21px;padding-bottom:7px; border-bottom:1px solid #eee;"><?php echo $name;?></p>
								
								<ul id="setting_section">
									<a href="<?php echo base_url(); ?>index.php/controller/account"><li>Account</li></a>
									<a href="<?php echo base_url(); ?>index.php/controller/activity_log"><li>Activity Logs</li></a>
									<!--<a href="<?php echo base_url(); ?>index.php/controller/give_ads"><li>Give Your Ads</li></a>-->
									<a href="<?php echo base_url(); ?>index.php/controller/signout"><li>Sign Out</li></a>
								</ul>
							</div>
							
						</div>
						
			</div>
			
			
		</div>
	</div>
</nav>

