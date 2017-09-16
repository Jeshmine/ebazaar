$(document).ready(function(){ 

//allCategoryWrapperSelect
$(".allCategoryWrapperSelect").mouseover(function(){
			$("#myCarousel").hide();
	});

	$(".allCategoryWrapperSelect").mouseout(function(){
		$("#myCarousel").show();
		$(".womenClothing").hide();
		$(".manClothing").hide();
		$(".phoneAccessories").hide();
		$(".computerLaptops").hide();
		$(".jewelryWatches").hide();
		$(".homeGarden").hide();
		$(".bagsShoes").hide();
		$(".toysKidsBaby").hide();
		$(".sportsOutdoors").hide();
		$(".healthBeauty").hide();
		$(".automobilesMotorcycles").hide();
		$(".tvAppliancesCamera").hide();
	});


//Women Clothing
	$(".womenClothingSelect").mouseover(function(){
		$(".womenClothing").show();
		$(".manClothing").hide();
		$(".phoneAccessories").hide();
		$(".computerLaptops").hide();
		$(".jewelryWatches").hide();
		$(".homeGarden").hide();
		$(".bagsShoes").hide();
		$(".toysKidsBaby").hide();
		$(".sportsOutdoors").hide();
		$(".healthBeauty").hide();
		$(".automobilesMotorcycles").hide();
		$(".tvAppliancesCamera").hide();
	});

//Man Clothing
	$(".manClothingSelect").mouseover(function(){
		$(".womenClothing").hide();
		$(".manClothing").show();
		$(".phoneAccessories").hide();
		$(".computerLaptops").hide();
		$(".jewelryWatches").hide();
		$(".homeGarden").hide();
		$(".bagsShoes").hide();
		$(".toysKidsBaby").hide();
		$(".sportsOutdoors").hide();
		$(".healthBeauty").hide();
		$(".automobilesMotorcycles").hide();
		$(".tvAppliancesCamera").hide();
	});
	
//Phones & Accessories
	$(".phoneAccessoriesSelect").mouseover(function(){
		$(".womenClothing").hide();
		$(".manClothing").hide();
		$(".phoneAccessories").show();
		$(".computerLaptops").hide();
		$(".jewelryWatches").hide();
		$(".homeGarden").hide();
		$(".bagsShoes").hide();
		$(".toysKidsBaby").hide();
		$(".sportsOutdoors").hide();
		$(".healthBeauty").hide();
		$(".automobilesMotorcycles").hide();
		$(".tvAppliancesCamera").hide();
	});
	
//Computer & Laptops
	$(".computerLaptopsSelect").mouseover(function(){
		$(".womenClothing").hide();
		$(".manClothing").hide();
		$(".phoneAccessories").hide();
		$(".computerLaptops").show();
		$(".jewelryWatches").hide();
		$(".homeGarden").hide();
		$(".bagsShoes").hide();
		$(".toysKidsBaby").hide();
		$(".sportsOutdoors").hide();
		$(".healthBeauty").hide();
		$(".automobilesMotorcycles").hide();
		$(".tvAppliancesCamera").hide();
	});
	
	
	
//TV, Appliances & Cameras
	$(".tvAppliancesCameraSelect").mouseover(function(){
		$(".womenClothing").hide();
		$(".manClothing").hide();
		$(".phoneAccessories").hide();
		$(".computerLaptops").hide();
		$(".jewelryWatches").hide();
		$(".homeGarden").hide();
		$(".bagsShoes").hide();
		$(".toysKidsBaby").hide();
		$(".sportsOutdoors").hide();
		$(".healthBeauty").hide();
		$(".automobilesMotorcycles").hide();
		$(".tvAppliancesCamera").show();
	});
	

//Jewelry & Watches
	$(".jewelryWatchesSelect").mouseover(function(){
		$(".womenClothing").hide();
		$(".manClothing").hide();
		$(".phoneAccessories").hide();
		$(".computerLaptops").hide();
		$(".jewelryWatches").show();
		$(".homeGarden").hide();
		$(".bagsShoes").hide();
		$(".toysKidsBaby").hide();
		$(".sportsOutdoors").hide();
		$(".healthBeauty").hide();
		$(".automobilesMotorcycles").hide();
		$(".tvAppliancesCamera").hide();
	});
	
//Home & Garden
	$(".homeGardenSelect").mouseover(function(){
		$(".womenClothing").hide();
		$(".manClothing").hide();
		$(".phoneAccessories").hide();
		$(".computerLaptops").hide();
		$(".jewelryWatches").hide();
		$(".homeGarden").show();
		$(".bagsShoes").hide();
		$(".toysKidsBaby").hide();
		$(".sportsOutdoors").hide();
		$(".healthBeauty").hide();
		$(".automobilesMotorcycles").hide();
		$(".tvAppliancesCamera").hide();
	});

//Bags & Shoes
	$(".bagsShoesSelect").mouseover(function(){
		$(".womenClothing").hide();
		$(".manClothing").hide();
		$(".phoneAccessories").hide();
		$(".computerLaptops").hide();
		$(".jewelryWatches").hide();
		$(".homeGarden").hide();
		$(".bagsShoes").show();
		$(".toysKidsBaby").hide();
		$(".sportsOutdoors").hide();
		$(".healthBeauty").hide();
		$(".automobilesMotorcycles").hide();
		$(".tvAppliancesCamera").hide();
	});
	
//Toys, Kids & Baby
	$(".toysKidsBabySelect").mouseover(function(){
		$(".womenClothing").hide();
		$(".manClothing").hide();
		$(".phoneAccessories").hide();
		$(".computerLaptops").hide();
		$(".jewelryWatches").hide();
		$(".homeGarden").hide();
		$(".bagsShoes").hide();
		$(".toysKidsBaby").show();
		$(".sportsOutdoors").hide();
		$(".healthBeauty").hide();
		$(".automobilesMotorcycles").hide();
		$(".tvAppliancesCamera").hide();
	});
	
//Sports & Outdoors
	$(".sportsOutdoorsSelect").mouseover(function(){
		$(".womenClothing").hide();
		$(".manClothing").hide();
		$(".phoneAccessories").hide();
		$(".computerLaptops").hide();
		$(".jewelryWatches").hide();
		$(".homeGarden").hide();
		$(".bagsShoes").hide();
		$(".toysKidsBaby").hide();
		$(".sportsOutdoors").show();
		$(".healthBeauty").hide();
		$(".automobilesMotorcycles").hide();
		$(".tvAppliancesCamera").hide();
	});
	
//Health & Beauty
	$(".healthBeautySelect").mouseover(function(){
		$(".womenClothing").hide();
		$(".manClothing").hide();
		$(".phoneAccessories").hide();
		$(".computerLaptops").hide();
		$(".jewelryWatches").hide();
		$(".homeGarden").hide();
		$(".bagsShoes").hide();
		$(".toysKidsBaby").hide();
		$(".sportsOutdoors").hide();
		$(".healthBeauty").show();
		$(".automobilesMotorcycles").hide();
		$(".tvAppliancesCamera").hide();
	});
	
//Automobiles & Motorcycles
	$(".automobilesMotorcyclesSelect").mouseover(function(){
		$(".womenClothing").hide();
		$(".manClothing").hide();
		$(".phoneAccessories").hide();
		$(".computerLaptops").hide();
		$(".jewelryWatches").hide();
		$(".homeGarden").hide();
		$(".bagsShoes").hide();
		$(".toysKidsBaby").hide();
		$(".sportsOutdoors").hide();
		$(".healthBeauty").hide();
		$(".automobilesMotorcycles").show();
		$(".tvAppliancesCamera").hide();
	});

});