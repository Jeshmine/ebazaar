<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/notification.css"/>

<div class="container" style=" margin-top:77px">
	<div class="panel panel-default">
    	<div class="panel-body notificationWrapper">
			<div class="notificationHeader">
				Your Notifications
			</div>
			<div class="notificationBody">
			
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
				<div class="single_notification_Wrapper"><!--single_notification_Wrapper start-->
					<a href="4">
						<div class="single_notification">
							<?php 
									if($buyer_image=="" || $buyer_image==null){
										$buyer_image="default.png";
									?>
								<img src="<?php echo base_url(); ?>resources/user_image/<?php echo $buyer_image;?>" class="img-rounded" style="height:69px; width:69px;"/>
							<?php 
									}
									else{
								?>	
								<img src="<?php echo base_url(); ?>resources/user_image/<?php echo $buyer_email;?>/<?php echo $buyer_image;?>" class="img-rounded" style="height:69px; width:69px;"/>
								<?php 
									}
								?>
								<div class="notification_message">
									<b><?php echo $buyer_name;?></b> <?php echo $message;?>
									
									<div class="notificationTime">
										<i class="fa fa-clock-o" aria-hidden="true"></i> 1 min ago
									</div>
								</div>
								
						</div>
					</a>
					<a href="#">
						<i class="fa fa-times notificationCross" aria-hidden="true"></i>
					</a>
				</div><!--single_notification_Wrapper end-->
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
