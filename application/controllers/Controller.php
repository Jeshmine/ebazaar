<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class Controller extends CI_Controller {
	
	public function index()
	{
		$this->load->model('crud');
		if(!isset($_SESSION['afterloginHome']))
		{
			
			$data['navFolder'] = 'beforeSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'beforeSignIn';
			$data['body1Section'] = 'category';
			
			$data['category']=$this->crud->crudExtractCategory();
			
			$data['productForBuyersBefore']=$this->crud->crudBeforeLoginProductForBuyers();
			
			
			}
		else{
			$data['navFolder'] = 'AfterSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'AfterSignIn';
			$data['body1Section'] = 'category';
			
			
			$email=$_SESSION['email'];
			
			$user_id=$_SESSION['user_id'];
			
			$data['query']=$this->crud->crudExtractData($email);
			$data['cart']=$this->crud->crudExtractCartData($user_id);
			
			$data['notification']=$this->crud->crudExtractNotificationData($user_id);
		
			
			$data['category']=$this->crud->crudExtractCategory();
			
			
			
			$data['productForBuyers']=$this->crud->crudproductForBuyers($user_id);
			
			
		
	}
	
	$this->load->view('main',$data);
}
	//for login page
	public function login()
	{
		$data['navFolder'] = 'login';
		$data['navSection'] = 'header';
		
		$data['body1'] = 'login';
		$data['body1Section'] = 'signup';
		
		$this->load->view('main',$data);
	}
	
	
		
	//for email Validation
	public function emailValidation()
	{	
		if(isset($_SESSION['validEmail']))
		{
			$data['navFolder'] = 'login';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'login';
			$data['body1Section'] = 'vaildemail';
			
			$this->load->view('main',$data);
			}
		else{
			$this->index();
		}
	}
	
	//for upload page
	public function upload()
	{	
		if(isset($_SESSION['upload']))
		{
			$data['navFolder'] = 'login';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'login';
			$data['body1Section'] = 'upload';
			
			$this->load->view('main',$data);
			}
		else{
			$this->index();
		}
	}
	
	//for detail page
	public function detail()
	{	
		if(isset($_SESSION['detail']))
		{
			$data['navFolder'] = 'login';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'login';
			$data['body1Section'] = 'detail';
			
			$this->load->view('main',$data);
			}
		else{
			$this->index();
		}
	}
	
	
	
	
	
	//for mysite page
	public function mysite()
	{	
		if(isset($_SESSION['afterloginHome']))
		{
			
			$data['navFolder'] = 'AfterSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'AfterSignIn';
			$data['body1Section'] = 'mysite';
			
			
			$email=$_SESSION['email'];
			$user_id=$_SESSION['user_id'];
			
			$this->load->model('crud');
			
			$data['category']=$this->crud->crudExtractCategory(); 
			$data['query']=$this->crud->crudExtractData($email);
			$data['cart']=$this->crud->crudExtractCartData($user_id);
			
			$data['notification']=$this->crud->crudExtractNotificationData($user_id);
			$data['following']=$this->crud->crudExtractFollowingData($user_id);
			$data['followed']=$this->crud->crudExtractFollowedData($user_id);
			$data['SellersAllCategory']=$this->crud->crudExtractSellersAllCategory($user_id);
			
				
			
			$this->load->view('main',$data);
		
		}
		else{
			$this->index();
		}
	}
	
	
	//for seller mysite
	public function sellerMysite($seller_id)
	{
		$data['navFolder'] = 'AfterSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'AfterSignIn';
			$data['body1Section'] = 'sellermysite';
			
			$email=$_SESSION['email'];
			$user_id=$_SESSION['user_id'];
			
			$this->load->model('crud');
			
			
			$data['category']=$this->crud->crudExtractCategory(); 
			$data['query']=$this->crud->crudExtractData($email);
			$data['cart']=$this->crud->crudExtractCartData($user_id);
			
			$data['notification']=$this->crud->crudExtractNotificationData($user_id);
			
			$data['follow']=$this->crud->crudExtractFollowingData($user_id);
			
			$data['following']=$this->crud->crudExtractFollowingData($seller_id);
			$data['followed']=$this->crud->crudExtractFollowedData($seller_id);
			
			$data['seller']=$this->crud->crudExtractSellerEmail($seller_id);
			
			$data['SellersAllCategory']=$this->crud->crudExtractSellersAllCategory($seller_id);
			
			$this->load->view('main',$data);
	}
	
	//for insertProduct page
	public function insertProduct()
	{	
		if(isset($_SESSION['afterloginHome']))
		{
			
			$data['navFolder'] = 'AfterSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'AfterSignIn';
			$data['body1Section'] = 'insert_product';
			
			$email=$_SESSION['email'];
			
			$this->load->model('crud');
			
			$data['category']=$this->crud->crudExtractCategory(); 
			$data['query']=$this->crud->crudExtractData($email);
			
			
			
			$user_id=$_SESSION['user_id'];
			$data['cart']=$this->crud->crudExtractCartData($user_id);
			
			$data['notification']=$this->crud->crudExtractNotificationData($user_id);
			
			$this->load->view('main',$data);
		
		}
		else{
			$this->index();
		}
	}
	
	
		//for editProduct page
	public function editProduct($product_id)
	{	
		if(isset($_SESSION['afterloginHome']))
		{
			
			$data['navFolder'] = 'AfterSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'AfterSignIn';
			$data['body1Section'] = 'edit_product';
			
			$email=$_SESSION['email'];
			
			$this->load->model('crud');
			
			$data['category']=$this->crud->crudExtractCategory(); 
			$data['query']=$this->crud->crudExtractData($email);
			
			$user_id=$_SESSION['user_id'];
			$data['cart']=$this->crud->crudExtractCartData($user_id);
			
			$data['notification']=$this->crud->crudExtractNotificationData($user_id);
			
			$data['productExtract']=$this->crud->crudExtractProductData($product_id);
									
			$this->load->view('main',$data);
		
		}
		else{
			$this->index();
		}
	}
	
	
	//for productDetailForm for afterlogin page
	public function productDetailForm($product_id)
	{
			$data['navFolder'] = 'AfterSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'AfterSignIn';
			$data['body1Section'] = 'im';
			
			
			$email=$_SESSION['email'];
			
			$this->load->model('crud');
			
			$data['category']=$this->crud->crudExtractCategory(); 
			
			$data['query']=$this->crud->crudExtractData($email);
			
			$user_id=$_SESSION['user_id'];
			$data['cart']=$this->crud->crudExtractCartData($user_id);
			
			$data['notification']=$this->crud->crudExtractNotificationData($user_id);
			
			$data['product_id']=$this->crud->crudproductDetailForm($product_id); //--------------------------------------------			
				
			$this->load->view('main',$data);
		
	}
	
	//for cart afterlogin page
	public function cart()
	{
			$data['navFolder'] = 'AfterSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'AfterSignIn';
			$data['body1Section'] = 'cart_page';
			
			$user_id=$_SESSION['user_id'];
			$email=$_SESSION['email'];
			
			$this->load->model('crud');
			
			$data['category']=$this->crud->crudExtractCategory(); 
			
			$data['query']=$this->crud->crudExtractData($email);

			$data['cart']=$this->crud->crudExtractCartData($user_id);
			
			$data['notification']=$this->crud->crudExtractNotificationData($user_id);			
				
			$this->load->view('main',$data);
		
	}
	
	
	//for cart afterlogin page
	public function category($cat)
	{
			$data['navFolder'] = 'AfterSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'AfterSignIn';
			$data['body1Section'] = 'filter_search';
			
			$user_id=$_SESSION['user_id'];
			$email=$_SESSION['email'];
			
			$this->load->model('crud');
			
			$data['category']=$this->crud->crudExtractCategory(); 
			
			$data['query']=$this->crud->crudExtractData($email);

			$data['cart']=$this->crud->crudExtractCartData($user_id);
			
			$data['notification']=$this->crud->crudExtractNotificationData($user_id);	

			$data['cat']=$cat;
			$data['crudShowCat']=$this->crud->crudShowCat($cat);	
			
				
			$this->load->view('main',$data);
		
	}
		//for wishlist page
	public function wishlist()
	{
			$data['navFolder'] = 'AfterSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'AfterSignIn';
			$data['body1Section'] = 'wishlist';
			
			$email=$_SESSION['email'];
			
			$this->load->model('crud');
			
			$data['category']=$this->crud->crudExtractCategory(); 
			
			$data['query']=$this->crud->crudExtractData($email);

			$user_id=$_SESSION['user_id'];
			$data['cart']=$this->crud->crudExtractCartData($user_id);
			
			$data['notification']=$this->crud->crudExtractNotificationData($user_id);	

			$data['wishlist']=$this->crud->crudExtractWishlistUser($user_id);	
				
			$this->load->view('main',$data);
		
	}
	
	
		//for payment_page page
	public function payment_page($grand_total)
	{
			$data['navFolder'] = 'AfterSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'AfterSignIn';
			$data['body1Section'] = 'payment';
			
			$email=$_SESSION['email'];
			$data['grand_total']=$grand_total;
			
			$this->load->model('crud');
			
			$data['category']=$this->crud->crudExtractCategory(); 
			
			$data['query']=$this->crud->crudExtractData($email);

			$user_id=$_SESSION['user_id'];
			$data['cart']=$this->crud->crudExtractCartData($user_id);
			
			$data['notification']=$this->crud->crudExtractNotificationData($user_id);			
				
			$this->load->view('main',$data);
		
	}
	
	
			//for filtersearch page
	public function filtersearch()
	{
			$data['navFolder'] = 'AfterSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'AfterSignIn';
			$data['body1Section'] = 'filter_search';
			
			$email=$_SESSION['email'];
			
			$this->load->model('crud');
			
			$data['category']=$this->crud->crudExtractCategory(); 
			
			$data['query']=$this->crud->crudExtractData($email);

			$user_id=$_SESSION['user_id'];
			$data['cart']=$this->crud->crudExtractCartData($user_id);
			
			$data['notification']=$this->crud->crudExtractNotificationData($user_id);			
				
			$this->load->view('main',$data);
		
	}
	
	
				//for activity_log page
	public function activity_log()
	{
			$data['navFolder'] = 'AfterSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'AfterSignIn';
			$data['body1Section'] = 'activity_log';
			
			
			$email=$_SESSION['email'];
			
			$this->load->model('crud');
			
			$data['category']=$this->crud->crudExtractCategory(); 
			
			$data['query']=$this->crud->crudExtractData($email);

			$user_id=$_SESSION['user_id'];
			$data['cart']=$this->crud->crudExtractCartData($user_id);
						
			$data['notification']=$this->crud->crudExtractNotificationData($user_id);	
			$this->load->view('main',$data);
		
	}
	
				//for account page
	public function account()
	{
			$data['navFolder'] = 'AfterSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'AfterSignIn';
			$data['body1Section'] = 'edit_page';
			
			$email=$_SESSION['email'];
			
			$this->load->model('crud');
			
			$data['category']=$this->crud->crudExtractCategory(); 
			
			$data['query']=$this->crud->crudExtractData($email);
			$user_id=$_SESSION['user_id'];
			$data['cart']=$this->crud->crudExtractCartData($user_id);
			$data['notification']=$this->crud->crudExtractNotificationData($user_id);	
			$this->load->view('main',$data);
		
	}
	
	
	
	
					//for notification page
	public function notification()
	{
			$data['navFolder'] = 'AfterSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'AfterSignIn';
			$data['body1Section'] = 'notifications';
			
			$email=$_SESSION['email'];
			
			$this->load->model('crud');
			
			$data['category']=$this->crud->crudExtractCategory(); 
			
			$data['query']=$this->crud->crudExtractData($email);

			$user_id=$_SESSION['user_id'];
			$data['cart']=$this->crud->crudExtractCartData($user_id);
						
			$data['notification']=$this->crud->crudExtractNotificationData($user_id);	
			$this->load->view('main',$data);
		
	}
	
	
/*-------------------------------------------------------------------------------------------------------------------------*/

//for sign in
	
	public function signin()
	{
		$email=$_POST['signin_email'];
		$signin_pwd=$_POST['signin_pwd'];
		if($email=="" || $signin_pwd==""){
			 $this->login();
			 echo"<script>alert('Enter all Fields');</script>";
		 }
		 else{
			 $this->load->model('crud');
			$query=$this->crud->crudSignIn($email);
			 if ($query->num_rows() == 1)
					{
					foreach ($query->result() as $row)
					{	
						$user_id=$row->user_id;
						$db_pwd=$row->password;
					}
					
					$encrypted_password=md5($signin_pwd);
						 if ($encrypted_password==$db_pwd)
							{	
								$_SESSION['afterloginHome']="afterloginHome";
								$_SESSION['user_id']=$user_id;
								$_SESSION['email']=$email;
								$this->index();
							}
							else{
								$this->login();
								echo"<script>alert('Password does not match');</script>";
							}
					}
					else{
						$this->login();
						echo"<script>alert('Email Does not exist!!!');</script>";
					}
		 }
		
	}
	
	//for sign up
	public function signup()
	{
		$name=$_POST['name'];
		$email=$_POST['signup_email'];
		$signup_pwd=$_POST['signup_pwd'];
		$signup_repwd=$_POST['signup_repwd'];
		 
		 if($name=="" || $email=="" || $signup_pwd=="" || $signup_repwd==""){
			 $this->login();
			 echo"<script>alert('Enter all Fields');</script>";
		 }
		 else{
			 if($signup_pwd!=$signup_repwd){
				 $this->login();
				  echo"<script>alert('Enter Password is not same');</script>";
			 }
			 else{
			 
				$this->load->model('crud');
				$query=$this->crud->crudCheckEmail($email);
				 if ($query->num_rows()> 0)
					{
						//return $query->row(); 
						$this->login();
						 echo"<script>alert('Email Already Exist!!!');</script>";
					}
					else
					{
						$_SESSION['validEmail']="validEmail";
						$_SESSION['email']=$email;
						
						$code=mt_rand(10000,99999);
						$encrypted_password= md5($signup_pwd);
						$now_date=date('Y-m-d');
						
						$data = array( 
							'name' => $name ,
							'email' =>$email,
							'password'=>$encrypted_password,
							'code'=>$code,
							'creation_date'=>$now_date);
							
						$this->crud->crudInsertValidatingEmail($data);	

						//mailing code
						$to = $email;
						$subject = "Validation Code";
						$txt = "Your Validation Code is : " .$code;
						$headers = "From: ashes.stha@gmail.com";
						
						mail($to,$subject,$txt,$headers);
						
						// to view page
						$this->emailValidation();
					}
			 }
		 }
		
	}		//for sign up
	
	
	
	//for validting email Process
	
	//for email Validation
	public function validEmail()
	{	
		$code=$_POST['code'];
		$email=$_SESSION['email'];
		
		//
		$this->load->model('crud');
		$query=$this->crud->checkCode($email);
		
			foreach ($query->result() as $row)
			{	
				$name=$row->name;
   				$email=$row->email;
				$password=$row->password;
   				$db_code=$row->code;
				$creation_date=$row->creation_date;
			}
			
			if ($code==$db_code){
				
				$_SESSION['upload']="upload";
				$data = array( 
					'name' => $name,
					'email' =>$email,
					'password'=>$password,
					'creation_date'=>$creation_date,
					'status'=>1);
				
				//inserting into db
				$user_id=$this->crud->crudInsertUser($data,$email);
				$_SESSION['user_id']=$user_id; 
				$this->upload();
				
			}
			else{
				$this->emailValidation();
				echo"<script>alert('Wrong Code Entered!!!');</script>";
			}
			
	}
	
	//for skipping the upload page
	public function skipToDetail()
	{
		$_SESSION['detail']="detail";
		$this->detail();
	}
	
	
	//for inserting the photo into db by upload page
	public function photoUpload()
	{
		
		
		//pic name
		$image_file=$_FILES['image_file']['name'];
		
		if ($image_file=="")
			{
			$this->upload();
			echo "<script>alert('1st Choose the photo to upload!!!');</script>";
			}
		else
			{
				
			$_SESSION['detail']="detail";
			
			$email=$_SESSION['email'];
			//temp pic name
			$temp_image_file=$_FILES['image_file']['tmp_name'];

			//upload into user_image folder
			
			mkdir("resources/user_image/$email");
			move_uploaded_file($temp_image_file, "resources/user_image/$email/$image_file");

			//$update_profile="update signup set user_img='$image_file' where user_email='$user_data'";
			//$run_update= mysqli_query($con, $update_profile) or die ("error in sql");
			
			$data = array(
               'image' => $image_file
            );

		 	$this->load->model('crud');
			$query=$this->crud->crudPhotoUpload($email,$data);
			$this->detail();
			}
	}
	
	
	//for skipping the upload page
	public function detailInserter()
	{
		$location=$_POST['location'];
		$contact=$_POST['contact'];
		$about=$_POST['about'];
		
		if($location=="" || $contact=="" || $about==""){
			$this->detail();
			echo"<script>alert('Enter all Fields');</script>";
		}
		else{
			$_SESSION['afterloginHome']="afterloginHome";
			$email=$_SESSION['email'];
			$now_date=date('Y-m-d');
			
			$data = array( 
					'location' => $location,
					'phone' =>$contact,
					'description' =>$about,
					'creation_date'=>$now_date,
					);

		 
			$this->load->model('crud');
			$query=$this->crud->crudDetailInserter($email,$data);
			$this->index();
		}
		
		
	}
	
	
	//extractSubCategory
	public function extractSubCategory($num)
	{
		$this->load->model('crud');
		$query=$this->crud->crudextractSubCategory($num);
		
		echo'
			<option value="1000">All Sub Category</option>';
										
										
									
		foreach ($query->result() as $row)
			{	
				echo"<option value=".$row->subcategory_id.">".$row->subcategory_name."</option>";
			}
		
	}
	
		//extractTypeMenu
	public function extractTypeMenu($num)
	{
		$this->load->model('crud');
		$query=$this->crud->crudextractTypeMenu($num);
		
		echo'
			<option value="10000">All Type</option>';
										
										
									
		foreach ($query->result() as $row)
			{	
				echo"<option value=".$row->type_id.">".$row->type_name."</option>";
			}
		
	}
	
		//extractTypeMenu
	public function follow($seller_id)
	{
		$user_id=$_SESSION['user_id'];
		$c=0;
		$this->load->model('crud');
		$follow=$this->crud->crudExtractFollowingData($user_id);
		foreach ($follow->result() as $row)
			{	
				$follower_following_id=$row->follower_following_id;
				if($follower_following_id==$seller_id){
					$c=1;
				}
   				
			}
			
			
		if($c!=1){
		
		$query = array( 
					'user_id' => $user_id,
					'follower_following_id' =>$seller_id,
					'status' => 1,
					);
		$query=$this->crud->crudInsertIntoFollow($query);
		echo "Following";
		}
		else{
			$this->crud->crudDeleteFollow($seller_id);
			echo "Follow";
		}
		
	}
	
	
			//extractTypeMenu
	public function wishlistExtract($product_id)
	{
		$user_id=$_SESSION['user_id'];
		$this->load->model('crud');
	
		$query1=$this->crud->crudExtractWishlist($product_id);
		if($query1->num_rows()!=0){
			$this->crud->crudDeleteWishlist($product_id);
			}
		else{
			$query = array( 
					'user_id' => $user_id,
					'product_id' =>$product_id,
					);
				$this->crud->crudInsertIntoFolloWishlist($query);
		}
		
		
		
	}
			//extractTypeMenu
	public function insertProductProcess()
	{
		$productName=$_POST['productName'];
		
		
		//pic name
		$productImage1=$_FILES['productImage1']['name'];
		$productImage2=$_FILES['productImage2']['name'];
		$productImage3=$_FILES['productImage3']['name'];
		$productImage4=$_FILES['productImage4']['name'];
		$productImage5=$_FILES['productImage5']['name'];
	
				
		$price=$_POST['price'];		
		$discounted_price=$_POST['discounted_price'];
		$type_id=$_POST['type'];
		$quantity=$_POST['quantity'];
		
		$condition=$_POST['condition'];
		$color=$_POST['color'];
		$description=$_POST['description'];
		
		$shipment=$_POST['shipment'];
		
		if($shipment=="paid"){
			$inside_price=$_POST['inside_price'];
			$outside_price=$_POST['outside_price'];
		}
		
		$handling_time=$_POST['handlingTime'];
		
		$returnType=$_POST['returnType'];
		
		if($returnType=="accepted"){
			$returnDay=$_POST['acceptedDays'];
			$refund=$_POST['acceptedType'];
			$additional_policy=$_POST['acceptedDescription'];	
		}
		
		if($productName=="" || $productImage1=="" || $price=="" || $discounted_price=="" || $type_id=="" || $quantity==""	|| $condition=="" || $color=="" || $description=="" || $handling_time==""){
			 $this->insertProduct();
			 echo"<script>alert('Enter all Fields');</script>";
		 } 	 
		else{
			if ($shipment=="paid"){
				if($inside_price=="" && $outside_price=="")
				{
					$this->insertProduct();
					echo"<script>alert('Enter any one field in shipment price');</script>";
				}else {
						if($inside_price=="")
						{
							$inside_price=0;
						}else if( $outside_price==""){
							$outside_price=0;
						}
								$email=$_SESSION['email'];
								$now_date=date('Y-m-d');
								 
								$user_id=$_SESSION['user_id'];
											 
											 
								
								if($returnType=="not"){
									$returnDay="";
									$refund="";
									$additional_policy="";
								}else{
									if($additional_policy=="" || $additional_policy==null){
									$additional_policy="";
									}
								}
								
								$data = array( 
										'seller_id' => $user_id, //getting from session retrival
										'product_name' => $productName,
										'image1' =>$productImage1,
										'image2' =>$productImage2,
										'image3' =>$productImage3,
										'image4' =>$productImage4,
										'image5' =>$productImage5,
										'type_id' =>$type_id,
										'price' =>$price,
										'discounted_price' => $discounted_price,
										'product_quantity'=>$quantity,
										'product_condition' =>$condition,
										'color'=>$color,
										'description' => $description,
										'shipment_type' =>$shipment,
										'inside_valley' =>$inside_price,
										'outside_valley' =>$outside_price,
										'handeling_time' =>$handling_time,
										'return_type' =>$returnType,
										'return_day' =>$returnDay,
										'refund' =>$refund,
										'additional_policy' =>$additional_policy,
										'creation_date' => $now_date,
										'status' => 1);
										
										
								$this->load->model('crud');	
								$product_id=$this->crud->crudinsertProductProcess($data);
								 
								$query=$this->crud->crudGettingNumberOfUserProduct($user_id);
								$rowcount = $query->num_rows();
									
								if ($rowcount == 1)
							{
								mkdir("resources/product_img/$email");
								
							}
								mkdir("resources/product_img/$email/$product_id");
								 //temp pic name
								 $temp_productImage1=$_FILES['productImage1']['tmp_name'];
								 //upload into user_image folder
								move_uploaded_file($temp_productImage1, "resources/product_img/$email/$product_id/$productImage1");
								
								 if($productImage2!="" || $productImage2!=null){
									 $temp_productImage2=$_FILES['productImage2']['tmp_name'];
									 move_uploaded_file($temp_productImage2, "resources/product_img/$email/$product_id/$productImage2");
								}
								if($productImage3!="" || $productImage3!=null){
									 $temp_productImage3=$_FILES['productImage3']['tmp_name'];
									 move_uploaded_file($temp_productImage3, "resources/product_img/$email/$product_id/$productImage3");
								}
								if($productImage4!="" || $productImage4!=null){
									 $temp_productImage4=$_FILES['productImage4']['tmp_name'];
									 move_uploaded_file($temp_productImage4, "resources/product_img/$email/$product_id/$productImage4");
								}
								if($productImage5!="" || $productImage5!=null){
									 $temp_productImage5=$_FILES['productImage5']['tmp_name'];
									 move_uploaded_file($temp_productImage5, "resources/product_img/$email/$product_id/$productImage5");
								}
								 
								 echo"<script>alert('Product Inserted Successfully');</script>";
								 $this->mysite();
				}
				
			}else if($shipment=="free"){
				$inside_price=0;
				$outside_price=0;
				 $email=$_SESSION['email'];
								$now_date=date('Y-m-d');
								 
								$user_id=$_SESSION['user_id'];
											 
								if($returnType=="not"){
									$returnDay="";
									$refund="";
									$additional_policy="";
								}else{
									if($additional_policy=="" || $additional_policy==null){
									$additional_policy="";
									}
								}
								
								$data = array( 
										'seller_id' => $user_id, //getting from session retrival
										'product_name' => $productName,
										'image1' =>$productImage1,
										'image2' =>$productImage2,
										'image3' =>$productImage3,
										'image4' =>$productImage4,
										'image5' =>$productImage5,
										'type_id' =>$type_id,
										'price' =>$price,
										'discounted_price' => $discounted_price,
										'product_quantity'=>$quantity,
										'old_product_quantity'=>$quantity,
										'product_condition' =>$condition,
										'color'=>$color,
										'description' => $description,
										'shipment_type' =>$shipment,
										'inside_valley' =>$inside_price,
										'outside_valley' =>$outside_price,
										'handeling_time' =>$handling_time,
										'return_type' =>$returnType,
										'return_day' =>$returnDay,
										'refund' =>$refund,
										'additional_policy' =>$additional_policy,
										'creation_date' => $now_date,
										'status' => 1);
										
										
								$this->load->model('crud');	
								$product_id=$this->crud->crudinsertProductProcess($data);
								 
								$query=$this->crud->crudGettingNumberOfUserProduct($user_id);
								$rowcount = $query->num_rows();
									
								if ($rowcount == 1)
							{
								mkdir("resources/product_img/$email");
								
							}
								mkdir("resources/product_img/$email/$product_id");
								 //temp pic name
								 $temp_productImage1=$_FILES['productImage1']['tmp_name'];
								 //upload into user_image folder
								move_uploaded_file($temp_productImage1, "resources/product_img/$email/$product_id/$productImage1");
								
								 if($productImage2!="" || $productImage2!=null){
									 $temp_productImage2=$_FILES['productImage2']['tmp_name'];
									 move_uploaded_file($temp_productImage2, "resources/product_img/$email/$product_id/$productImage2");
								}
								if($productImage3!="" || $productImage3!=null){
									 $temp_productImage3=$_FILES['productImage3']['tmp_name'];
									 move_uploaded_file($temp_productImage3, "resources/product_img/$email/$product_id/$productImage3");
								}
								if($productImage4!="" || $productImage4!=null){
									 $temp_productImage4=$_FILES['productImage4']['tmp_name'];
									 move_uploaded_file($temp_productImage4, "resources/product_img/$email/$product_id/$productImage4");
								}
								if($productImage5!="" || $productImage5!=null){
									 $temp_productImage5=$_FILES['productImage5']['tmp_name'];
									 move_uploaded_file($temp_productImage5, "resources/product_img/$email/$product_id/$productImage5");
								}
								 
								 echo"<script>alert('Product Inserted Successfully');</script>";
								 $this->mysite();
				 
				 
			}
			
			
		 }
	}
	
	//for shiftCode for afterlogin page
	public function shiftCode()
	{
		
	}
	
	//for coverPicUploader for afterlogin page
	public function coverPicUploader()
	{
		//pic name
		$image_file=$_FILES['coverPic']['name'];
		
		if ($image_file=="")
			{
			echo "<script>alert('1st Choose the photo to upload!!!');</script>";
			}
		else
			{
			$email=$_SESSION['email'];
				
			
			//temp pic name
			$temp_image_file=$_FILES['coverPic']['tmp_name'];
			
			$this->load->model('crud');
			$query=$this->crud->crudExtractUserDetail($email);
			foreach ($query->result() as $row)
			{	
				$cover_image=$row->cover_image;
			}	
			if($cover_image=="" || $cover_image==null){
			mkdir("resources/cover_image/$email");
			}
				
			
			//upload into user_image folder
			move_uploaded_file($temp_image_file, "resources/cover_image/$email/$image_file");

			//$update_profile="update signup set user_img='$image_file' where user_email='$user_data'";
			//$run_update= mysqli_query($con, $update_profile) or die ("error in sql");
			
			$data = array(
               'cover_image' => $image_file
            );

		 	
			$query=$this->crud->crudCoverImgUpload($email,$data);
			
			}
			$this->mysite();
	}
	
	//for coverPicUploader for afterlogin page
	public function profilePicUploader()
	{
		//pic name
		$image_file=$_FILES['profilePic']['name'];
		
		if ($image_file=="")
			{
			echo "<script>alert('1st Choose the photo to upload!!!');</script>";
			}
		else
			{
			$email=$_SESSION['email'];
				
			
			//temp pic name
			$temp_image_file=$_FILES['profilePic']['tmp_name'];
			
			$this->load->model('crud');
			$query=$this->crud->crudExtractUserDetail($email);
			foreach ($query->result() as $row)
			{	
				$image=$row->image;
			}	
			if($image=="" || $image==null){
			mkdir("resources/user_image/$email");
			}
			
			//upload into user_image folder
			move_uploaded_file($temp_image_file, "resources/user_image/$email/$image_file");

			//$update_profile="update signup set user_img='$image_file' where user_email='$user_data'";
			//$run_update= mysqli_query($con, $update_profile) or die ("error in sql");
			
			$data = array(
               'image' => $image_file
            );

		 	$this->load->model('crud');
			$query=$this->crud->crudPhotoUpload($email,$data);
			
			}
			$this->mysite();
	}
	
	
	//for insertProductIntoCart for afterlogin page
	public function insertProductIntoCart($product_id,$color)
	{
		
			$purchased_quantity=$_POST['purchased_quantity'];
			
			if($purchased_quantity==0){
				$this->productDetailForm($product_id);
				echo "<script>alert('Finished Product!!!');</script>";
			}
			else{
			$email=$_SESSION['email'];
			$now_date=date('Y-m-d');
			
			$this->load->model('crud');
			
			$data['category']=$this->crud->crudExtractCategory(); 
			
			$data['query']=$this->crud->crudExtractData($email);
			
			$user_id=$_SESSION['user_id'];
			$data['cart']=$this->crud->crudExtractCartData($user_id);
			$data['notification']=$this->crud->crudExtractNotificationData($user_id);
				$query = array( 
					'product_id' => $product_id,
					'buyer_id' =>$user_id,
					'color' => $color,
					'quantity' =>$purchased_quantity,
					'status' =>1,
					'creation_date' => $now_date,
					);
				
				
		$this->crud->crudinsertProductIntoCart($query);
		
		$productExtract=$this->crud->crudExtractProductData($product_id);
		
			foreach ($productExtract->result() as $row)
		{	
			$product_quantity=$row->product_quantity;
			
		}
			$total_quantity=$product_quantity-$purchased_quantity;
			
			if($total_quantity==0){
				$query = array( 
						'product_quantity' => 0,
						'status' => 0
						);
				$this->crud->crudUpdateProduct($query,$product_id);
			}
			else{
				$query = array( 
							'product_quantity' => $total_quantity
						);
				$this->crud->crudUpdateProduct($query,$product_id);
			}
			
		
			$this->productDetailForm($product_id);
			echo"<script>alert('Product is Added to Cart');</script>";
		}
		
	}
	
	
	//for accountEdit
	public function accountEdit()
	{
		$name=$_POST['name'];		
		$location=$_POST['location'];
		$contact_number=$_POST['contact_number'];
		$description=$_POST['description'];
		if($name=="" || $location=="" || $contact_number=="" || $description=="")
		{
			echo "<script>alert('Enter all field!!!');</script>";
		}
		else{
		$email=$_SESSION['email'];
		
		$data = array( 
			'name' => $name,
			'location' =>$location,
			'phone' =>$contact_number,
			'description'=>$description,
			);
		
		$this->load->model('crud');
		$this->crud->crudaccountEdit($email,$data);
		$this->mysite();
		echo"<script>alert('User detail change successfully');</script>";
		}
	}
	
	//for accountEdit
	public function accountPasswordEdit()
	{
		$current_password=$_POST['current_password'];		
		$new_password=$_POST['new_password'];
		$re_password=$_POST['re_password'];
		
		if($current_password=="" || $new_password=="" || $re_password=="")
		{
			$this->account();
			echo "<script>alert('Enter all field!!!');</script>";
		}
		else{
			
			if($new_password!=$re_password){
				$this->account();
				echo "<script>alert('Password does not match!!!');</script>";
			}
			else{
					if($current_password==$new_password){
						$this->account();
						echo "<script>alert('Current password and New Password should not be match!!!');</script>";
					}
					else{
				
				
					$email=$_SESSION['email'];
					$this->load->model('crud');
					$query=$this->crud->crudExtractData($email);
					foreach ($query->result() as $row)
						{	
							$db_pwd=$row->password;
						}
						
						$encrypted_password=md5($current_password);
						if ($encrypted_password==$db_pwd)
						{	
							
							$encrypted_new_password=md5($new_password);
						$data = array( 
							'password'=>$encrypted_new_password,
							);
							
							$this->crud->crudUpdatePassword($email,$data);
							$this->mysite();
							echo"<script>alert('User detail change successfully');</script>";
							
						}
						else{
							$this->account();
							echo"<script>alert('Password does not match');</script>";
						}
		
				
				
				
			}
		}
	}
	}
	
	//for deleteProductFromCart
	public function deleteProductFromCart($cart_id)
	{
			$this->load->model('crud');
			$this->crud->crudDeleteProductFromCart($cart_id);
			$this->cart();
		
	}
	
	
	
	
	
	
	//for payment
	public function payment($grand_total)
	{
		$card_number=$_POST['card_number'];
		$security_code=$_POST['security_code'];
		if($card_number=="" || $security_code=="")
		{
			echo "<script>alert('Enter all field!!!');</script>";
		}
		else{
			$this->load->model('crud');
			
			$query=$this->crud->crudFindCardNumber($card_number);
			if ($query->num_rows() != 0){
				foreach ($query->result() as $row)
				{	
					$db_security_code=$row->security_code;
					$balance=$row->balance;
				}
				if($security_code==$db_security_code){
					if($grand_total>$balance){
						$this->payment_page($grand_total);
						echo "<script>alert('No Enough Balance!!!');</script>";
					}
					else{
						$new_balance=$balance-$grand_total;
						
						$data = array( 
							'balance' => $new_balance,
							);
						$this->crud->crudUpdatePaymentBalance($data,$card_number);
						$user_id=$_SESSION['user_id'];
						$now_date=date('Y-m-d');
						$message="has purchased your";
						
						$query=$this->crud->crudExtractCartData($user_id);
						foreach ($query->result() as $row)
						{	
							
							$product_id=$row->product_id;
							$quantity=$row->quantity;
							
							$data1=$this->crud->crudproductDetailForm($product_id);
								foreach ($data1->result() as $row)
									{	
										
										$product_name=$row->product_name;
									}
							$message= " has purchased ".$quantity." of your " . $product_name . " product";
							
							$notification = array( 
								'buyer_id' => $user_id,
								'product_id' =>$product_id,
								'message' => $message,
								'creation_date' => $now_date,
								'notification_read' => 0,
								'status' =>1,
								);
							$this->crud->crudInsertNotification($notification);
						}
						
						$cart = array( 
								'status' => 0,
								);
						$this->crud->crudUpdateCartStatus($cart,$user_id);
						
						$this->index();
						echo "<script>alert('Purchased Successfully!!!');</script>";
						
						
					}
				}else{
					$this->payment_page($grand_total);
					echo "<script>alert('Security Code does not match!!!');</script>";
				}
			
			}
			
		}
		
	}
	
	
	
	
	//for signout
	public function signout()
	{
	session_destroy(); 
		
		$data['navFolder'] = 'beforeSignIn';
			$data['navSection'] = 'header';
			
			$data['body1'] = 'beforeSignIn';
			$data['body1Section'] = 'category';
			$this->load->model('crud');
			$data['category']=$this->crud->crudExtractCategory();
			
			$data['productForBuyersBefore']=$this->crud->crudBeforeLoginProductForBuyers();
			
		$this->load->view('main',$data);
		
	}
	
	
	
}
?>
