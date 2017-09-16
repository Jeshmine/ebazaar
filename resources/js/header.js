$(document).ready(function(){ 
var a=0;

// icon tab
$("#bellIcon,#bellIconBadge").click(function(event){
    event.stopPropagation();
	$("#bell").fadeToggle();
	
	a=0;
	$("#user_account").css("background-color", "white");
	$("#user_account_setting_wrapper").css("display", "none");
	
});



//for sign in tab

$("#rightSignInWrapperSignInBtn").mouseover(function(){
    $("#signIn").css("box-shadow", "1.5px 1.5px 7px 0.3px #ADADAD");
	$(".rightSignInWrapperSignInBtnHidden").css("display", "block");
	$(".rightSignInWrapperSignInBtn").css("display", "block");
	
});

$(".rightSignInWrapperBtn").mouseout(function(){
    $("#signIn").css("box-shadow", "none");
	$(".rightSignInWrapperSignInBtnHidden").css("display", "none");
	$(".rightSignInWrapperSignInBtn").css("display", "none");
});


//account tab
$("#user_account").click(function(event){
	event.stopPropagation();
	if(a==0){
		a=1;
	}
	else if(a==1){
	a=0;
	}
	$("#user_account").css("background-color", "#d0daf5");
	$("#user_account_setting_wrapper").fadeToggle();
	$("#bell").css("display", "none");
	$("#cart").css("display", "none");
	
});


$("#user_account").mouseover(function(){
	if(a==0){
   $("#user_account").css("background-color", "#d0daf5");
	}

});


$("#user_account").mouseout(function(){
	if(a==0){
    $("#user_account").css("background-color", "white");
	}
});


//for document
$(document).click(function(event){
	$("#bell").css("display", "none");
	$("#cart").css("display", "none");
	a=0;
	$("#user_account").css("background-color", "white");
	$("#user_account_setting_wrapper").css("display", "none");
});


});