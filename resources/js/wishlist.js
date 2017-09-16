$(document).ready(function(){
    $(".wishlistIcon").click(function(){
        var $row=$(this).parents('.singleCategoryBodyProductWrapper');
		$row.remove();
    });
});