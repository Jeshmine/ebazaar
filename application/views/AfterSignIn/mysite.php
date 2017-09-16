<?php 
$following=$following->num_rows();

$followed=$followed->num_rows();		
?>


<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/mysite_main_body.css"/>				
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/product_list.css"/>
	
<script>
	function a(event){
		$("#coverPicForm").submit();
	}

	function b(event){
		$("#profilePicForm").submit();
	}
</script>

<div class="container-fluid topBodyWrapper">
	<div class="row"> 							<!-- slider section -->
		<div class="col-md-12 topSlider">
			<ul>
				<li><button type="button" class="btn btn-default" id="uploadImgBtn" onclick="document.getElementById('coverPic').click(); return false;"><i class="fa fa-camera" aria-hidden="true"></i> Upload Cover Pic</button></li>
				<li>
				
				<img src="<?php echo base_url(); ?>resources/cover_image/<?php echo $email;?>/<?php echo $coverImg;?>" id="slider_img"/></li>
				
				<li id="front_gardient"></li>
				
				<form method="post" id="coverPicForm" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/controller/coverPicUploader">
					<input type="file" id="coverPic" name="coverPic" style="visibility: hidden;" onchange="a(event)"/>
				</form>
				
			</ul>
			
			<!--<div id="choose_slide">
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>-->
		
		
		</div>
	 </div>										<!-- slider section -->
	
	<div class="row top_pannel">				<!-- top panel section -->
		<div class="col-sm-3 col-md-3">
		<div id="uploadProfileImageWrapper">
			<?php 
			if($img=="default.png"){
			
			?>
			<img src='<?php echo base_url(); ?>resources/user_image/<?php echo $img;?>' class="img-thumbnail" id='mysite_img'/>
			<?php
			}
			else{
			
			?>
			<img src='<?php echo base_url(); ?>resources/user_image/<?php echo $email;?>/<?php echo $img;?>' class="img-thumbnail" id='mysite_img'/>
			<?php
			}
			
			?>
			<div id="uploadProfileImageBtnWrapper">
				<div id="uploadProfileImageBtn" onclick="document.getElementById('profilePic').click(); return false;" style="text-align:center; color:white;border:1px solid #c7c7c7; margin:47% 27%;padding:7px;border-radius:7px"><i class="fa fa-camera" aria-hidden="true"></i> Upload</div>
			</div>
			
			
			<form method="post" id="profilePicForm" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/controller/profilePicUploader">
					<input type="file" id="profilePic" name="profilePic" style="visibility: hidden;" onchange="b(event)"/>
			</form>
		</div>
		</div>
		
		<div class="col-sm-offset-1 col-sm-2 col-md-offset-1 col-md-2 topPannelMarginAlign">
			<form role="form">
				  <div class="form-group">
					<select class="form-control">
					<?php 
						foreach ($SellersAllCategory->result() as $row)
							{	?>
							
							 <option value="<?php echo $row->category_id ?>"><?php echo $row->category_name; ?></option>
								
						<?php 	} ?>
					
					</select>
				  </div>
			 </form>
		</div>
		
		<div class="col-sm-offset-1 col-sm-3 col-md-offset-1 col-md-3 topPannelMarginAlign">
				<form role="form" method="post" name="mysite_search" action="">
					<div class="form-group">
						<input type="text" class="form-control" style="padding-right: 7px;" placeholder="Search For Products...">
						<span class="glyphicon glyphicon-search mysiteSearchBtn"></span>
					</form>
				</div>
		</div>
		
		<div class="col-sm-2 col-md-2 topPannelMarginAlign">
			
		</div>
		
	
	</div>								<!-- top panel section -->
	
	
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" id="detail_pannel">
		<ul >
			<li id='mysite_name'><?php echo $name;?></li>
			<li class='mysite_detail'><i class="fa fa-map-marker" aria-hidden="true" style="color:#8899a6;font-size:18px;"></i> &nbsp; <?php echo $location;?></li>
			<li class='mysite_detail'><i class="fa fa-envelope-o" aria-hidden="true" style="color:#8899a6"></i>  <?php echo $email;?></li>
			<li class='mysite_detail'><i class="fa fa-phone" aria-hidden="true" style="color:#8899a6;font-size:18px;"></i> &nbsp;<?php echo $phone;?></li>
		</ul>
	
		<div class="panel panel-default panelMargin" id="followPanel">
		  <div class="panel-body" style="padding:7px;">
			<div class="col-sm-6" >
				<ul class="followSectionUl">
					<li class="follow_title">FOLLOWING</li>
					<li class='follow_number'><?php echo $following;?></li>
				</ul>
			</div>
			
			<div class="col-sm-6">
				<ul class="followSectionUl">
					<li class="follow_title">FOLLOWED</li>
					<li class='follow_number'><?php echo $followed;?></li>
				</ul>
			</div>
		  
		  </div>
		</div>
	
		<div class="panel panel-default panelMargin">
		  <div class="panel-body">
			<div class="aboutTitle">
				About
			</div>
			<div class="aboutBody">
			
				<?php echo $description;?>
			</div>
		
		  
		  </div>
		</div>	
	</div>
	
	
	
    <div class="col-sm-8">
	
	
	
	
	<?php 
	 if ($SellersAllCategory->num_rows() > 0)
		{	
	foreach ($SellersAllCategory->result() as $row)
					{	
						$category_id=$row->category_id;
						$category_name=$row->category_name;
						$query=$this->crud->crudExtractSellersAllCategoryProduct($user_id,$category_id);?>
	
	
	<div class="panel panel-default">	<!-- sigle product category -->
		<div class="panel-body">
			<div class="singleCategoryTitle">
				<a href="#"><?php echo $category_name; ?></a>
			</div>
			
				<div class="singleCategoryBody">
				
				<?php foreach ($query->result() as $row)
					{ ?>
				<!--single product start-->
					<div class="singleCategoryBodyProductWrappermySite">
						<div class="wishListBtn" style="position:absolute;top:7px;right:7px">
							<a href="editProduct/<?php echo $row->product_id; ?>"><i class="fa fa-pencil-square-o fa-2x editBtnmySite aria-hidden="true"></i></a>
							
						</div>
					
						<a href="#">   <!-- sigle product item -->
							<div class="singleCategoryBodyProduct">
								
								<ul>
									<li><img src="<?php echo base_url(); ?>resources/product_img/<?php echo $email; ?>/<?php echo $row->product_id; ?>/<?php echo $row->image1; ?>" class="singleCategoryBodyProductImg"/></li>
									<li class="singleCategoryBodyProductName"><?php echo $row->product_name;  ?></li>
									<li class="singleCategoryBodyProductPrice"><span style="font-size:17px;"><?php echo $discount= $row->price - $row->discounted_price;  ?></span> / Piece</li>
									<li style="margin:0px 7px"><span style="text-decoration: line-through;"><?php echo $row->price;  ?></span></li>
									
									
								</ul>
								
							</div>
						</a> <!-- sigle product item -->
					</div>
					<?php }  ?>
					<!--single product end-->
				</div>
			
			
			
			
		</div>
	
	</div><!-- sigle product List -->
	
	
	
	<?php }  
		}
		else{
		?>
			<div class="panel panel-default">	<!-- sigle product category -->
				<div class="panel-body">
					<h3>No product to sell</h3>
				</div>
			</div>
			
			<style>
				.topPannelMarginAlign{
					display:none;
				}
			</style>
			
	<?php	}
	
	?>
	
	</div>
	
	
	
	
	
	
  </div>
</div>

<!-- Trigger the modal with a button -->
<a href="<?php echo base_url(); ?>index.php/controller/insertProduct"><div id="add_product"></div></a>



