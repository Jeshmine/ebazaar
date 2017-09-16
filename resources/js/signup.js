$(document).ready(function(){ 
var b=0;
	$("#signUpTab").click(function(event){
		b=0;
		$("#signInTab").css("border-bottom", "0px");
	});
	
	$("#signInTab").click(function(event){
		b=1;
		$("#signUpTab").css("border-bottom", "0px");
	});
	
	$("#signUpTab").mouseover(function(){
		if(b==1){
			$("#signUpTab").css("border-bottom", "5px green solid");
		}
	});

	$("#signUpTab").mouseout(function(){
		if(b==1){
			$("#signUpTab").css("border-bottom", "0px");
		}
	});
	
	$("#signInTab").mouseover(function(){
		if(b==0){
			$("#signInTab").css("border-bottom", "5px green solid");
		}
	});

	$("#signInTab").mouseout(function(){
		if(b==0){
			$("#signInTab").css("border-bottom", "0px");
		}
	});


});