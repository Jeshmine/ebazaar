<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model {
//sign in
public function crudSignIn($email){
		return $this->db->query('select * from signup where email="'.$email.'"');
		
	}


//for checkng existing email in db in signup page
	public function crudCheckEmail($email){
		return $this->db->query('select * from signup where email="'.$email.'"');
		
	}

//for inserting new email in validation table of db in signup page
	public function crudInsertValidatingEmail($data){
		$this->db->insert("email_validation", $data);
		
	}
	
	//for inserting new email in validation table of db in signup page
	public function crudInsertNotification($notification){
		$this->db->insert("notification", $notification);
		
	}
	
	//for inserting new email in validation table of db in signup page
	public function crudInsertIntoFollow($query){
		$this->db->insert("follow", $query);
		
	}
	
	//for inserting new email in validation table of db in signup page
	public function crudInsertIntoFolloWishlist($query){
		$this->db->insert("wishlist", $query);
		
	}
	
//checking code
public function checkCode($email){
		return $this->db->query('select * from email_validation where email="'.$email.'"');
		
	}

//inserting into signup db
public function crudInsertUser($data,$email){
		$this->db->query('delete from email_validation where email="'.$email.'"');
		$this->db->insert("signup", $data);
		return $this->db->insert_id();
	}
	
	//inserting into signup db
public function crudDeleteProductFromCart($cart_id){
		$this->db->query('delete from cart where cart_id="'.$cart_id.'"');
	}
	
		//inserting into signup db
public function crudDeleteFollow($seller_id){
		$this->db->query('delete from follow where follower_following_id="'.$seller_id.'"');
	}
	
	
			//inserting into signup db
public function crudDeleteWishlist($product_id){
		$this->db->query('delete from wishlist where product_id="'.$product_id.'"');
	}
	
	//upload image into db
public function crudPhotoUpload($email,$data){
		$this->db->where('email', $email);
		$this->db->update('signup', $data);	
	}
	
	
	//upload coverimg into db
public function crudCoverImgUpload($email,$data){
		$this->db->where('email', $email);
		$this->db->update('signup', $data);	
	}
	
	//crudExtractUserDetail
public function crudExtractUserDetail($email){
		return $this->db->query('select * from signup where email="'.$email.'"');
	}
	
		
	//crudExtractUserDetail
public function crudExtractWishlist($product_id){
		return $this->db->query('select * from wishlist where product_id="'.$product_id.'"');
	}
	
		//crudExtractUserDetail
public function crudExtractWishlistProductsList($user_id,$product_id){
		return $this->db->query('select * from wishlist where user_id="'.$user_id.'" and product_id="'.$product_id.'"');
	}
	
			//crudExtractUserDetail
public function crudExtractWishlistUser($user_id){
		return $this->db->query('select * from wishlist where user_id="'.$user_id.'"');
	}
	
	//detail inserter from detail page
public function crudDetailInserter($email,$data){
		$this->db->where('email', $email);
		$this->db->update('signup', $data);
		
	}
	
		//detail inserter from detail page
public function crudUpdateCartStatus($cart,$user_id){
		$this->db->where('buyer_id', $user_id);
		$this->db->update('cart', $cart);
		
	}

	
	//extract other user
public function crudproductForBuyers($user_id){
		return $this->db->query('select DISTINCT category.category_id,category.category_name from signup, product, category, subcategory,type where product.seller_id=signup.user_id AND product.type_id=type.type_id AND type.subcategory_id=subcategory.subcategory_id AND subcategory.category_id=category.category_id AND product.seller_id!="'.$user_id.'" and product.status=1');
		
	}
	
		
	//extract other user
public function crudBeforeLoginProductForBuyers(){
		return $this->db->query('select DISTINCT category.category_id,category.category_name from signup, product, category, subcategory,type where product.seller_id=signup.user_id AND product.type_id=type.type_id AND type.subcategory_id=subcategory.subcategory_id AND subcategory.category_id=category.category_id and product.status=1');
		
	}
	
	//extract other user products
public function crudproductForBuyersProducts($user_id,$category_id){
		return $this->db->query('select DISTINCT product.product_id, product.product_name,product.price,product.discounted_price,product.image1,product.seller_id,signup.name,signup.email,signup.image from signup, product, category, subcategory,type where product.seller_id=signup.user_id AND product.type_id=type.type_id AND type.subcategory_id=subcategory.subcategory_id AND subcategory.category_id=category.category_id AND product.seller_id!="'.$user_id.'" and product.status=1 and category.category_id="'.$category_id.'"');
		
	}
	
	
	//extract other user products
public function crudShowCat($cat){
		return $this->db->query('select DISTINCT product.product_id, product.product_name,product.price,product.discounted_price,product.image1,product.seller_id,signup.name,signup.email,signup.image from signup, product, category, subcategory,type where product.seller_id=signup.user_id AND product.type_id=type.type_id AND type.subcategory_id=subcategory.subcategory_id AND subcategory.category_id=category.category_id and product.status=1 and category.category_name="'.$cat.'"');
		
	}
	
		
	//extract other user products
public function crudproductForBuyersProductsBefore($category_id){
		return $this->db->query('select DISTINCT product.product_id, product.product_name,product.price,product.discounted_price,product.image1,product.seller_id,signup.name,signup.email,signup.image from signup, product, category, subcategory,type where product.seller_id=signup.user_id AND product.type_id=type.type_id AND type.subcategory_id=subcategory.subcategory_id AND subcategory.category_id=category.category_id and product.status=1 and category.category_id="'.$category_id.'"');
		
	}
	
	//crudproductDetailForm
public function crudproductDetailForm($product_id){
		return $this->db->query('select DISTINCT product.product_id,product.product_name,product.seller_id,product.image1,product.image2,product.image3,product.image4,product.image5 , product.price,product.discounted_price,product.color,product.product_quantity, product.product_condition,product.description,product.shipment_type,product.inside_valley,product.outside_valley,product.handeling_time,product.return_type,product.return_day,product.refund,product.additional_policy, signup.name, signup.image,signup.email,signup.account_no from signup, product, category, subcategory,type where product.seller_id=signup.user_id AND product.type_id=type.type_id AND type.subcategory_id=subcategory.subcategory_id AND subcategory.category_id=category.category_id and product.product_id="'.$product_id.'"');
		
	}
	
	
	//extract name image into afterlogin 
public function crudWishlistProductListWithDetail($product_id){
		return $this->db->query('select DISTINCT product.product_id, product.product_name,product.price,product.discounted_price,product.image1,product.seller_id,signup.name,signup.email,signup.image from signup, product where product.seller_id=signup.user_id AND product.product_id="'.$product_id.'"');
		
	}
	
	//extract name image into afterlogin 
public function crudFindCardNumber($card_number){
		return $this->db->query('select * from payment where card_no="'.$card_number.'"');
		
	}
	
//extract name image into afterlogin 
public function crudExtractCategory(){
		return $this->db->query('select * from category');
		
	}	
	
		
//extract name image into afterlogin 
public function crudExtractSellerEmail($seller_id){
		return $this->db->query('select * from signup where user_id="'.$seller_id.'"');
		
	}
	
	
	//extract name image into afterlogin 
public function crudExtractData($email){
		return $this->db->query('select * from signup where email="'.$email.'"');
		
	}
	
	//extract name image into afterlogin 
public function crudExtractBuyerData($buyer_id){
		return $this->db->query('select * from signup where user_id="'.$buyer_id.'"');
		
	}
	
	
	//detail inserter from detail page
public function crudUpdatePaymentBalance($data,$card_number){
		$this->db->where('card_no', $card_number);
		$this->db->update('payment', $data);
		
	}


	
	//detail inserter from detail page
public function crudaccountEdit($email,$data){
		$this->db->where('email', $email);
		$this->db->update('signup', $data);
		
	}
	
		//detail inserter from detail page
public function crudUpdatePassword($email,$data){
		$this->db->where('email', $email);
		$this->db->update('signup', $data);
		
	}
	
	//crudExtractSellersAllCategory
public function crudExtractSellersAllCategory($user_id){
		return $this->db->query('select DISTINCT category.category_id,category.category_name from signup, product, category, subcategory,type where product.seller_id=signup.user_id AND product.type_id=type.type_id AND type.subcategory_id=subcategory.subcategory_id AND subcategory.category_id=category.category_id AND product.seller_id="'.$user_id.'" and  product.status=1');
		
	}
	
	//extract name image into afterlogin 
public function crudExtractSellersAllCategoryProduct($user_id,$category_id){
		return $this->db->query('select DISTINCT product.product_id,product.product_name,product.image1,product.price,product.discounted_price from signup, product, category, subcategory,type where product.seller_id=signup.user_id AND product.type_id=type.type_id AND type.subcategory_id=subcategory.subcategory_id AND subcategory.category_id=category.category_id AND product.seller_id="'.$user_id.'" and product.status=1 AND category.category_id="'.$category_id.'"');
		
	}
	
	
	//extract extractSubCategory 
public function crudextractSubCategory($num){
		return $this->db->query('select * from subcategory where category_id="'.$num.'"');
		
	}
	
	//extract extractTypeMenu 
public function crudextractTypeMenu($num){
		return $this->db->query('select * from type where subcategory_id="'.$num.'"');
		
	}
	
		//extract crudinsertProductProcess 
public function crudinsertProductProcess($data){
		$this->db->insert("product", $data);
		return $this->db->insert_id();
	}
	
		//extract crudinsertProductProcess 
public function crudGettingNumberOfUserProduct($user_id){
		 return $this->db->query('select * from product where seller_id="'.$user_id.'"');
		
	}
	
		//extract crudinsertProductProcess 
public function crudExtractProductData($product_id){
		return $this->db->query('select * from product where product_id="'.$product_id.'"');
	}
	
	
			//extract crudinsertProductProcess 
public function crudinsertProductIntoCart($data){
		$this->db->insert("cart", $data);
		
	}
	
	
				//extract crudinsertProductProcess 
public function crudExtractCartData($buyer_id){
		return $this->db->query('select * from cart where buyer_id="'.$buyer_id.'" and status=1');
		
		
	}
	
	
					//extract crudinsertProductProcess 
public function crudExtractFollowingData($user_id){
		return $this->db->query('select * from follow where user_id="'.$user_id.'"');
		
		
	}
	
					//extract crudinsertProductProcess 
public function crudExtractFollowedData($user_id){
		return $this->db->query('select * from follow where follower_following_id="'.$user_id.'"');
		
		
	}	
	
					//extract crudinsertProductProcess 
public function crudExtractNotificationData($user_id){
		return $this->db->query('select DISTINCT notification.buyer_id,notification.message,notification.notification_read from signup, product, notification where signup.user_id=product.seller_id AND product.product_id=notification.product_id AND signup.user_id="'.$user_id.'"');
		
		
	}

	//detail inserter from detail page
public function crudUpdateProduct($data,$product_id){
		$this->db->where('product_id', $product_id);
		$this->db->update('product', $data);
		
	}
	
}
?>