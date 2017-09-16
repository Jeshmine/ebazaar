<?php
		foreach ($wishlist->result() as $row)
			{	
				$product_id=$row->product_id;
				
			}
	?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/product_list.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/wishlist.css"/>

<div class="container" style=" margin-top:77px">

  <div class="panel panel-default">	<!-- sigle product Category -->
		<div class="panel-body">
			<div class="singleCategoryTitle">
				Wishlist
			</div>
			
				<div class="singleCategoryBody">
				
				
				<?php
					foreach ($wishlist->result() as $row)
						{	
							$product_id=$row->product_id;
							$productForBuyers=$this->crud->crudWishlistProductListWithDetail($product_id);
						
						foreach ($productForBuyers->result() as $row)
						{	
						
							$product_name=$row->product_name;
							$seller_id=$row->seller_id;
							$image1=$row->image1;
							$price=$row->price;
							$discounted_price=$row->discounted_price;
							$name=$row->name;
							$email=$row->email;
							$image=$row->image;
						}
				?>
				
				<!--single product start-->
					<div class="singleCategoryBodyProductWrapper">
						<div class="wishListBtn" style="position:absolute;top:7px;right:7px">
							<a href="#"><i class="fa fa-times wishlistIcon" aria-hidden="true"></i></a>
						</div>
					
						<a href="<?php echo base_url(); ?>index.php/controller/productDetailForm/<?php echo $product_id;?>">   <!-- sigle product item -->
							<div class="singleCategoryBodyProduct">
								
								<ul>
									<li><img src="<?php echo base_url(); ?>resources/product_img/<?php echo $email; ?>/<?php echo $product_id;?>/<?php echo $image1; ?>" class="singleCategoryBodyProductImg"/></li>
									<li class="singleCategoryBodyProductName"><?php echo $product_name;  ?></li>
									<li class="singleCategoryBodyProductPrice"><span style="font-size:17px;"><?php echo $discount= $price - $discounted_price;  ?></span> / Piece</li>
									<li style="border-bottom:1px solid #eee;margin:0px 7px"><span style="text-decoration: line-through;"><?php echo $price;?></span></li>
									
									<a href="<?php echo base_url(); ?>controller/sellerMysite/<?php echo $seller_id;?>"><li class="singleCategoryBodyProductSeller"><img src="<?php echo base_url(); ?>resources/user_image/<?php echo $email; ?>/<?php echo $image; ?>" class="productSellerImg"/> <?php echo $row->name;?></li></a>
								</ul>
								
							</div>
						</a> <!-- sigle product item -->
					</div>
					<!--single product end-->
				<?php
					
				}
				?>	
					
				
				
					
					
				
				
			</div>
		</div>
	
	</div>
  
  
</div>