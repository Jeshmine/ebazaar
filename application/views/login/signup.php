<div class="container-fluid signInUpBackgroundImageWrapper">
	<div class="signinBackgroundImage">
		<img id="bg_img" src="<?php echo base_url(); ?>resources/loginPic.jpg"/>
	</div>
	<div class="signinBackgroundGradient"></div>
	
</div>

<div class="container-fluid signInUpWrapper">
	<div class="row">
	  <div class="col-md-7"></div>
	  
	  <div class="col-md-4"> <!--sign in/up section-->
	  
		<div class="panel panel-default" style="margin:0px 35px; border-radius:7px; background-color:rgba(255,255,255,0.90);box-shadow: 1.5px 1.5px 7px 0.3px #ADADAD;"><!--panel started-->
		  <div class="panel-body">																																		<!--panel body started-->
				<div class="nav nav-tabs" id="sign_in_up" style="margin:0px -15px 7px -15px;padding-bottom:8px">
					<div class="col-xs-5 col-sm-5 col-md-5" style="text-align:center">
						<span data-toggle="tab" href="#signup" id="signUpTab" style="padding-bottom:5px;border-bottom:5px green solid;cursor:pointer;">Sign Up</span>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2" style="text-align:center">
						|
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5" style="text-align:center">
						<span data-toggle="tab" href="#signin" id="signInTab" style="padding-bottom:5px; cursor:pointer;">Sign In</span>
					</div>
				</div>
				
				<div class="tab-content" id="sign_in_enter">
					<div id="signup" class="tab-pane fade in active">
						<form role="form" id="signupForm" method="post" action="<?php echo base_url(); ?>index.php/controller/signup">
						  <div class="form-group">
							<label for="name">Name:</label>
							<input type="text" class="form-control" id="name" name="name">
						  </div>
						  <div class="form-group">
							<label for="email">Email:</label>
							<input type="email" class="form-control" id="email" name="signup_email">
						  </div>
						  <div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" id="pwd" name="signup_pwd">
						  </div>
						  <div class="form-group">
							<label for="repwd">Re-Enter Password:</label>
							<input type="password" class="form-control" id="repwd" name="signup_repwd">
						  </div>
						  <button type="submit" id="signupBtn">Join</button>
						</form>
					
					</div>
				
					<div id="signin" class="tab-pane fade">
						<form role="form" id="signinForm" method="post" action="<?php echo base_url(); ?>index.php/controller/signin">
						  <div class="form-group">
							<label for="email">Email:</label>
							<input type="email" class="form-control" id="signin_email" name="signin_email">
						  </div>
						  <div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" id="signin_pwd" name="signin_pwd">
						  </div>
						  <div class="checkbox">
							<label><input type="checkbox"> Remember me</label>
						  </div>
						  <button type="submit" id="signinBtn">Sign In</button>
						</form>
					</div>	
			</div>
				
		  </div><!-- panel body ended-->
		</div> <!-- panel ended-->
		
		
	  </div> <!-- end of sign in/up section-->
	</div>
	
	<footer>
		<div class="row" id="foot">
		Buy & Sell online <br/> anytime, anywhere.
		</div>
	</footer>
</div







