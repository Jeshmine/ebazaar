<!DOCTYPE html>
<html>
<head>
	<title>eBazaar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	
	<!-- Select CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/css/bootstrap-select.min.css">

	<!-- Form Validation IO -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/formvalidation/formValidation.min.css"/>
	
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/header.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/signup.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/category.css">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1213459169270882",
    enable_page_level_ads: true
  });
</script>
</head>
	
	
	
          
<body>
	<?php
	
	include $navFolder ."/". $navSection .".php";
	include $body1 ."/". $body1Section .".php";
	?>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<!-- Select JavaScript -->
	<script src="<?php echo base_url(); ?>resources/js/bootstrap-select.min.js"></script>

	<!-- Form Validation IO -->
	<script src="<?php echo base_url(); ?>resources/js/formvalidation/formValidation.min.js"></script>
	<script src="<?php echo base_url(); ?>resources/js/formvalidation/bootstrap.min.js"></script>
	
	
	<!-- Custom JavaScript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/header.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/signup.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/category.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/mysite.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/product_list.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/wishlist.js"></script>
	
	<!-- Sign Up Form Validation JavaScript -->
	<script type="text/javascript">
				
			  $('#signupForm').formValidation({
				  framework: 'bootstrap',
				  err: {
					container: 'tooltip'
				  },
				  icon: {
					  valid: 'fa fa-check',
					  invalid: 'fa fa-close',
					  validating: 'fa fa-refresh'
				  },
				  // This option will not ignore invisible fields which belong to inactive panels
				  excluded: ':disabled',
				  fields: { 
					  name: {
						  validators: {
							notEmpty: {
								message: 'Name is required'
							}
						  }
					  },
					  signup_email: {
						  validators: {
							notEmpty: {
								message: 'Email is required'
							}
						  }
					  },
					  signup_pwd: {
						  validators: {
							notEmpty: {
								message: 'Password is required'
							}
						  }
					  },
					  signup_repwd: {
						  validators: {
							notEmpty: {
								message: 'Re-Enter Password is required'
							}
						  }
					  } 
				  }
			  });
			 
	</script>
	
	<!-- Sign in Form Validation JavaScript -->
	<script type="text/javascript">
				
			  $('#signinForm').formValidation({
				  framework: 'bootstrap',
				  err: {
					container: 'tooltip'
				  },
				  icon: {
					  valid: 'fa fa-check',
					  invalid: 'fa fa-close',
					  validating: 'fa fa-refresh'
				  },
				  // This option will not ignore invisible fields which belong to inactive panels
				  excluded: ':disabled',
				  fields: { 
					  signin_email: {
						  validators: {
							notEmpty: {
								message: 'Email is required'
							}
						  }
					  },
					  signin_pwd: {
						  validators: {
							notEmpty: {
								message: 'Password is required'
							}
						  }
					  }
				  }
			  });
			 
	</script>
	
	
<!--notification cross-->
<script type="text/javascript">
	$(".single_notification").hover(function(){
		 var $row  = $(this).find('.cross');
		 $row.show();;
		}, function(){
		var $row  = $(this).find('.cross');
		$row.hide();
	});
</script>	
	
	
	
	
	
	
	
</body>
</html>