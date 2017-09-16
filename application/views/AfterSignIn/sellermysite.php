<?php 
foreach ($seller->result() as $row)
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
	

foreach ($follow->result() as $row)
			{	
				$db_user_id=$row->user_id;
				$follower_following_id=$row->follower_following_id;
				if($follower_following_id==$user_id){
					$c=1;
				}
   				
			}
			
$following=$following->num_rows();

$followed=$followed->num_rows();		
?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/mysite_main_body.css"/>				
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/product_list.css"/>
	

<div class="container-fluid topBodyWrapper">
	<div class="row"> 							<!-- slider section -->
		<div class="col-md-12 topSlider">
			<ul>
			<li>
				
				<img src="<?php echo base_url(); ?>resources/cover_image/<?php echo $email;?>/<?php echo $coverImg;?>" id="slider_img"/></li>
				
				<li id="front_gardient"></li>
				
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
			<?php 
				if($c==1){
			?>
			<button type="button" class="btn btn-success center-block" id="txtHint" onclick="gotofollow(<?php echo $user_id;?>)">Following</button>
			<?php
				}
				else{
			?>
			<button type="button" class="btn btn-success center-block" id="txtHint" onclick="gotofollow(<?php echo $user_id;?>)">Follow</button>
			<?php
				}
			?>
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
		?>
	
	</div>
	
	
  </div>
</div>

<script>
function gotofollow(seller_id){
		 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "http://localhost/ebazaar/index.php/controller/follow/" + seller_id, true);
        xmlhttp.send();
		
	}
</script>

