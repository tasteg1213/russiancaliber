$(function(){

	var skuLoading = false;

	var elementSelectSku = function(event){

		if(skuLoading == true){
			return false;
		}

		var _params = "";
		var _props = "";
		var _highload= "";

		var $_this = $(this);

		if($_this.parent().hasClass("selected")){
			return false;
		}

		var $_mProduct = $_this.parents(".elementSku");
		var $_mProductContainer = $_this.parents(".item");
		var $_parentProp = $_this.parents(".elementSkuProperty");
		var $_propList = $_mProduct.find(".elementSkuProperty");
		var $_clickedProp = $_this.parents(".elementSkuPropertyValue");
		var $changeFastBack = $_mProduct.find(".fastBack").removeClass("disabled");

		var _level = $_parentProp.data("level");

		$_this.parents(".elementSkuPropertyList").find("li").removeClass("selected");
		$_clickedProp.addClass("selected loading");

		skuLoading = true; //block

		$_propList.each(function(i, prop){

			var $_nextProp  = $(prop);
			var $_nextPropList = $_nextProp.find("li");

			var propName = $_nextProp.data("name");
			var _used = false;

			if($_nextProp.data("highload") == "Y"){
				_highload = _highload + propName + ";"
			}

			$_nextPropList.each(function(io, obj){
				var $_currentObj = $(obj);
				_props = _props + propName + ":" + $_currentObj.data("value") + ";";
				if($_currentObj.hasClass("selected")){
					_params = _params + propName + ":" + $_currentObj.data("value") + ";";
					return _used = true;
				}
			});

			if(!_used){
				_params = _params + propName + ":-forse;";
			}

		});

		$.getJSON(elementAjaxPath + "?act=selectSku&props=" + encodeURIComponent(_props) + "&params=" + encodeURIComponent(_params) + "&level=" + _level + "&iblock_id=" + $_mProduct.data("iblock-id") + "&prop_id=" + $_mProduct.data("prop-id") + "&product_id=" + $_mProduct.data("product-id") + "&highload=" + encodeURIComponent(_highload) + "&price-code=" + encodeURIComponent($_mProductContainer.data("price-code")))
		  .done(function(http){
	  		$_propList.each(function(pI, pV){
	  			var $_sf = $(pV);
	  				$_sf.data("level") > _level && $_sf.find(".elementSkuPropertyValue").removeClass("selected").addClass("disabled");
	  		});
			$.each(http[1]["PROPERTIES"], function(name, val){
			  	var $_gPropList = $_propList.filter(function(){ return ($(this).data("name") == name); });
			  	var $_gPropListValues = $_gPropList.find(".elementSkuPropertyValue");
				$_gPropListValues.each(function(il, element){
					var $nextElement = $(element);
					$.each(val, function(pVal, _selected){
						if(pVal == $nextElement.data("value") && _selected != "D"){
							(_selected == "Y") ? $nextElement.addClass("selected").removeClass("disabled") : $nextElement.removeClass("disabled");
							return false;
						}
					});
				});
			});
			
			$(".changeName").html(http[0]["PRODUCT"]["NAME"]);

			$_mProduct.find(".changeID").data("id", http[0]["PRODUCT"]["ID"]);
			$_mProduct.find(".changePicture").html($("<img/>").attr("src", http[0]["PRODUCT"]["IMAGES"][0]["MEDIUM_IMAGE"]["SRC"]));
			$_mProduct.find(".changePropertiesNoGroup").html(http[0]["PRODUCT"]["RESULT_PROPERTIES_NO_GROUP"]);
			$_mProduct.find(".changePropertiesGroup").html(http[0]["PRODUCT"]["RESULT_PROPERTIES_GROUP"]);

			var $changeCart = $_mProduct.find(".changeCart");
			
			$changeCart.find("img").remove();
			if(http[0]["PRODUCT"]["PRICE"]["DISCOUNT_PRICE"]){
				$changeCart.removeClass("added").removeClass("disabled").removeClass("requestPrice")
					.html(LANG["ADD_BASKET_DEFAULT_LABEL"])
					.prepend($("<img />").attr({src: TEMPLATE_PATH + "/images/incart.png", class: "icon"}))
					.attr("href", "#");
			}else{
				$changeFastBack.addClass("disabled");
				$changeCart.removeClass("added").addClass("disabled").addClass("requestPrice")
					.html(LANG["REQUEST_PRICE_BUTTON_LABEL"])
					.prepend($("<img />").attr({src: TEMPLATE_PATH + "/images/request.png", class: "icon"}))
					.attr("href", "#");
			}

			//AVAILABLE
			
			var $changeAvailable = $_mProduct.find(".changeAvailable");

			$changeAvailable.removeClass("getStoresWindow");
			$changeAvailable.removeClass("outOfStock");
			$changeAvailable.removeClass("onOrder");
			$changeAvailable.removeClass("inStock");
			$changeAvailable.removeAttr("href");

			if(http[0]["PRODUCT"]["PRICE"]["DISCOUNT_PRICE"]){
				var $productChangePrice = $_mProduct.find(".changePrice").empty().removeClass("getPricesWindow").removeAttr("href").data("id", http[0]["PRODUCT"]["ID"]);
				$productChangePrice.html(http[0]["PRODUCT"]["PRICE"]["DISCOUNT_PRICE"]);
			}else{
				var $productChangePrice = $_mProduct.find(".changePrice").empty().removeClass("getPricesWindow").removeAttr("href").addClass("requestPrice").addClass("disabled").data("id", http[0]["PRODUCT"]["ID"]);
				$productChangePrice.html(LANG["REQUEST_PRICE_LABEL"]);
				http[0]["PRODUCT"]["CAN_BUY"] = "N";
			}
			if(http[0]["PRODUCT"]["RESULT_PROPERTIES"]){
				$product.find(".changeProperties").html(http[0]["PRODUCT"]["RESULT_PROPERTIES"]);
			}

			if(http[0]["PRODUCT"]["COUNT_PRICES"] > 1){
				$productChangePrice.prepend($("<span/>", {class: "priceIcon"})).addClass("getPricesWindow").attr("href", "#");
			}

			if(http[0]["PRODUCT"]["CATALOG_QUANTITY"] > 0){
				if(http[0]["PRODUCT"]["STORES_COUNT"] > 1){
					$changeAvailable.html($("<span/>").html(LANG["CATALOG_AVAILABLE"])).addClass("inStock").attr("href", "#").addClass("getStoresWindow").data("id", http[0]["PRODUCT"]["ID"]);
					$changeAvailable.prepend(
						$("<img/>").addClass("icon").attr("src", TEMPLATE_PATH + "/images/inStock.png")
					);
				}else{
					$changeAvailable.html(LANG["CATALOG_AVAILABLE"]).addClass("inStock");
					$changeAvailable.prepend(
						$("<img/>").addClass("icon").attr("src", TEMPLATE_PATH + "/images/inStock.png")
					);
				}
			}else{
				if(http[0]["PRODUCT"]["CAN_BUY"] != "Y"){
					$changeAvailable.html(LANG["CATALOG_NO_AVAILABLE"]).addClass("outOfStock");
					$changeFastBack.addClass("disabled");
					$changeCart.addClass("disabled");
					$changeAvailable.prepend(
						$("<img/>").addClass("icon").attr("src", TEMPLATE_PATH + "/images/outOfStock.png")
					);
				}else{
					$changeAvailable.html(LANG["CATALOG_ON_ORDER"]).addClass("onOrder");
					$changeAvailable.prepend(
						$("<img/>").addClass("icon").attr("src", TEMPLATE_PATH + "/images/onOrder.png")
					);
				}
			}

			// pictures
			var countImages = 0;

			if(http[0]["PRODUCT"]["IMAGES"]){

				for(var i in http[0]["PRODUCT"]["IMAGES"]) {
					countImages = i;
				}

				// big slider vars
				var $pictureSlider = $("#pictureContainer .pictureSlider").empty();

				// small pictures slider
				var $moreImagesCarousel = $("#moreImagesCarousel").removeClass("hide");
				var $moreImagesCarouselSlideBox = $moreImagesCarousel.find(".slideBox");
				$moreImagesCarouselSlideBox.find(".item").remove();

				$.each(http[0]["PRODUCT"]["IMAGES"], function(i, nextElement){

					//big slider
					$pictureSlider.append(
						$("<div />", {class: "item"}).append(
							$("<a/>", {class: "zoom", href: nextElement["LARGE_IMAGE"]["SRC"]}).data("large-picture", nextElement["LARGE_IMAGE"]["SRC"]).data("small-picture", nextElement["SMALL_IMAGE"]["SRC"]).append(
								$("<img />", {src: nextElement["MEDIUM_IMAGE"]["SRC"]})
							)
						)
					)

					if(countImages > 0){
						//small slider
						$moreImagesCarouselSlideBox.append(
							$("<div />", {class: "item"}).append(
								$("<a/>", {class: "zoom", href: nextElement["LARGE_IMAGE"]["SRC"]}).data("large-picture", nextElement["LARGE_IMAGE"]["SRC"]).append(
									$("<img />", {src: nextElement["SMALL_IMAGE"]["SRC"]})
								)
							)
						);
					}else{
						$moreImagesCarousel.addClass("hide");
					}
				});

				startPictureElementSlider();
				startMorePicturesElementCarousel();
				createZoomer();
			
			}

			//short description

			if(http[0]["PRODUCT"]["PREVIEW_TEXT"]){
				$_mProduct.find(".changeShortDescription").html(http[0]["PRODUCT"]["PREVIEW_TEXT"]);
			}else{
				if($_mProduct.find(".changeShortDescription").data("first-value")){
					$_mProduct.find(".changeShortDescription").html($_mProduct.find(".changeShortDescription").data("first-value"));
				}
			}

			// full description

			if(http[0]["PRODUCT"]["DETAIL_TEXT"]){
				$_mProduct.find(".changeDescription").html(http[0]["PRODUCT"]["DETAIL_TEXT"]);
			}else{
				if($_mProduct.find(".changeDescription").data("first-value")){
					$_mProduct.find(".changeDescription").html($_mProduct.find(".changeDescription").data("first-value"));
				}
			}

			//article

			if(typeof(http[0]["PRODUCT"]["PROPERTIES"]["CML2_ARTICLE"]) != "undefined"){
				if(typeof(http[0]["PRODUCT"]["PROPERTIES"]["CML2_ARTICLE"]["VALUE"]) != "undefined" && http[0]["PRODUCT"]["PROPERTIES"]["CML2_ARTICLE"]["VALUE"] !=""){
					$_mProduct.find(".changeArticle").html(http[0]["PRODUCT"]["PROPERTIES"]["CML2_ARTICLE"]["VALUE"]).parents(".article").removeClass("hidden");
				}else{
					if($_mProduct.find(".changeArticle").data("first-value")){
						$_mProduct.find(".changeArticle").html($_mProduct.find(".changeArticle").data("first-value"));
					}else{
						$_mProduct.find(".changeArticle").parents(".article").addClass("hidden");
					}
				}
			}

			if(http[0]["PRODUCT"]["PRICE"]["DISCOUNT_PRICE"]){
				if($_mProduct.data("hide-measure") != "Y" && http[0]["PRODUCT"]["MEASURE"] != undefined && http[0]["PRODUCT"]["MEASURE"]["SYMBOL_RUS"] != ""){
					$_mProduct.find(".changePrice").append(
						$("<span/>").addClass("measure").html(
							" / " + http[0]["PRODUCT"]["MEASURE"]["SYMBOL_RUS"] + " "
						)
					);
				}
			}

			if(http[0]["PRODUCT"]["PRICE"]["RESULT_PRICE"]["DISCOUNT"] > 0){
				$_mProduct.find(".changePrice").append(
					$("<span/>").addClass("oldPriceLabel").html(CATALOG_LANG["OLD_PRICE_LABEL"]).append(
						$("<s/>").addClass("discount").html(
							http[0]["PRODUCT"]["PRICE"]["RESULT_PRICE"]["BASE_PRICE"]
						)
					)
				);
			}

			//catalog set (complect) block

			if($("div").is("#set")){

				var $changePriceSet = $(".changePriceSet").html(http[0]["PRODUCT"]["PRICE"]["DISCOUNT_PRICE"]);
				if(http[0]["PRODUCT"]["PRICE"]["RESULT_PRICE"]["DISCOUNT"] > 0){
					$changePriceSet.append(
						$("<s/>").addClass("discount").html(
							http[0]["PRODUCT"]["PRICE"]["RESULT_PRICE"]["BASE_PRICE"]
						)
					);
				}

				//j vars
				var $setProductContainer = $("#set");
				var $setMainElements = $setProductContainer.find('.setMainElement:not(".disabled")');
				var $setPrice = $("#setPrice");
				var $setDisnt = $("#setDisnt");

				//n vars
				var setPriceValue = 0;
				var setPriceDiscountValue = 0;

				//str vars
				var tmpPriceLabel = $setPrice.html().replace(/[0-9]/g, '');
				var tmpDisntLabel = $setDisnt.html().replace(/[0-9]/g, '');

				var changePriceValue = parseInt(http[0]["PRODUCT"]["PRICE"]["DISCOUNT_PRICE"].replace(/[^0-9]/g, ''));

				$setProductContainer.find(".general.setElement").data("price", changePriceValue).data("discount", http[0]["PRODUCT"]["PRICE"]["RESULT_PRICE"]["DISCOUNT"]);

				$setMainElements.each(function(i, nextElement){
					var $nextElement = $(nextElement);
					setPriceValue += parseInt($nextElement.data("price"));
					setPriceDiscountValue += parseInt($nextElement.data("price")) + parseInt($nextElement.data("discount"));
				});

				$setPrice.html(
					formatPrice(setPriceValue) + tmpPriceLabel
				);

				$setDisnt.html(
					formatPrice(setPriceDiscountValue) + tmpDisntLabel
				);

				if(setPriceDiscountValue == 0){
					$setDisnt.hide();
				}else{
					$setDisnt.show();
				}

			}

			if($("div").is("#setWindow")){

				// catalog set window
				var $setWindowContainer = $("#setWindow");
				var $setWindowElements = $setWindowContainer.find('.setWindowElement:not(".disabled")');
				var $setWindowPrice = $("#setWPrice");
				var $setWindowDisnt = $("#setWDisnt");

				//n vars
				var setWindowPriceValue = 0;
				var setWindowPriceDiscountValue = 0;

				//str vars
				var tmpPriceWindowLabel = $setWindowPrice.html().replace(/[0-9]/g, '');
				var tmpDisntWindowLabel = $setWindowDisnt.html().replace(/[0-9]/g, '');

				var changePriceValue = parseInt(http[0]["PRODUCT"]["PRICE"]["DISCOUNT_PRICE"].replace(/[^0-9]/g, ''));

				$setWindowContainer.find("#wProduct").data("price", changePriceValue).data("discount", http[0]["PRODUCT"]["PRICE"]["RESULT_PRICE"]["DISCOUNT"]);

				$setWindowElements.each(function(i, nextElement){
					var $nextElement = $(nextElement);
					setWindowPriceValue += parseInt($nextElement.data("price"));
					setWindowPriceDiscountValue += parseInt($nextElement.data("price")) + parseInt($nextElement.data("discount"));
				});

				$setWindowPrice.html(
					formatPrice(setWindowPriceValue) + tmpPriceLabel
				);

				$setWindowDisnt.html(
					formatPrice(setWindowPriceDiscountValue) + tmpDisntLabel
				);

				if(setWindowPriceDiscountValue == 0){
					$setWindowDisnt.hide();
				}else{
					$setWindowDisnt.show();
				}
			}

			$_clickedProp.removeClass("loading");
			skuLoading = false;

		  }).fail(function(jqxhr, textStatus, error){
		  	$_clickedProp.removeClass("loading");
		  	skuLoading = false;
		    console.error("Request Failed: " + textStatus + ", " + error);
		});

		event.preventDefault();

	}

	$(document).on("click", ".elementSkuPropertyLink", elementSelectSku);

});