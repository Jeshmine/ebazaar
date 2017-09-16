$(document).ready(function(){ 
$(".singleCategoryBodyProductWrappermySite").hover(function(){
	 var $sel=$(this).find('.editBtnmySite');
			$sel.show();
    }, function(){
    var $sel=$(this).find('.editBtnmySite');
			$sel.hide();
});

$("#uploadProfileImageWrapper").hover(function(){
		$("#uploadProfileImageBtnWrapper").show();
    }, function(){
		$("#uploadProfileImageBtnWrapper").hide();
});

});