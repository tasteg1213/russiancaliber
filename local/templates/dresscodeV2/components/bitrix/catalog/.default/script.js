$(function(){

	//global vars
	var openSmartFilterFlag = false;
	var changeSortParams = function(){
		window.location.href = $(this).val();
	};

	$("#selectSortParams, #selectCountElements").on("change", changeSortParams);


	var openSmartFilter = function(event){

		// smartFilter block adaptive toggle
		if(!openSmartFilterFlag){
			$("#smartFilter").addClass("opened").css('marginTop', ($('.oSmartFilter').offset().top - $('#nextSection').offset().top - $('#nextSection').height() +25));
			openSmartFilterFlag = true;
		}

		else{
			$("#smartFilter").removeClass("opened").removeAttr("style");
			openSmartFilterFlag = false;
		}

		return event.preventDefault();
	};

	var closeSmartFilter = function(event){
		if(openSmartFilterFlag){
			$("#smartFilter").removeClass("opened");
			openSmartFilterFlag = false;
		}
	};

	$(document).on("click", ".oSmartFilter", openSmartFilter);
    $(document).on("click", "#smartFilter, .oSmartFilter, .rangeSlider", function(event){
    	return event.stopImmediatePropagation();
    });
	$(document).on("click", closeSmartFilter);

	if (window.location.search.length > 0){
		var loc = window.location.search.replace("?", "").split("&").reduce(function(index, value){
			var res =  value.split("=");
			index[decodeURIComponent(res[0])] = decodeURIComponent(res[1]);
			return index;
		}, {});

		if (loc['em'] && loc['em'].length > 0) {
			console.log(loc['em']);
			loadLastList(loc['em']);
		}
	}

	/*if (typeof(moveElem) !== "undefined"){
		console.log(moveElem);
		loadLastList(moveElem);
		// moveToElement(moveElem);
	}*/

	$(document).on("click", ".filter_close", function(e){
		e.preventDefault();
		closeSmartFilter();
	});

	if (window.outerWidth<1025 && $(".filter_close").length == 0) {
		$("#smartFilterForm").prepend('<a href="#" class="filter_close">X</a>');
	}
});

// $(document).on("click", "h1", function(e){
// 	console.log(arParams);
// 	e.preventDefault();
// 	$.ajax({
// 		type: "POST",
// 		url: location.href,
// 		data: arParams,
// 		dataType: "html",
// 		success: function(msg){
// 			if ($(msg).find("#catalogTableList").length > 0){
// 				$('#catalogTableList').replaceWith($(msg).find("#catalogTableList"));
// 			} else if($(msg).find("#catalogLineList").length > 0){
// 				$('#catalogLineList').replaceWith($(msg).find("#catalogLineList"));
// 			} else if($(msg).find(".items.productList").length > 0){
// 				$(".items.productList").replaceWith($(msg).find(".items.productList"));
// 			}
//
//
// 		}
// 	});
// });


function loadLastList(elemId = false){
	console.log(arParams);
	// e.preventDefault();
	$.ajax({
		type: "POST",
		url: location.href,
		data: arParams,
		dataType: "html",
		success: function(msg){
			if ($(msg).find("#catalogTableList").length > 0){
				$('#catalogTableList').replaceWith($(msg).find("#catalogTableList"));
			} else if($(msg).find("#catalogLineList").length > 0){
				$('#catalogLineList').replaceWith($(msg).find("#catalogLineList"));
			} else if($(msg).find(".items.productList").length > 0){
				$(".items.productList").replaceWith($(msg).find(".items.productList"));
			}

			// console.log(elemId);
			// console.log($(msg).find("pre.arParams"));
			moveToElement(elemId);
		}
	});
}


function moveToElement (element = false){
// console.log(element);
	if (element !== false && element > 0) {

		// var product;
		$(".itemRow.item").each(function(ind, val){

			if($(this).data("productId") == element){
				// console.log($(this));
				// console.log($(this).prop("offsetTop"));

				if ($(this).length > 0){
					// console.log($(this).prop("offsetTop"));

					var scrollToElem =  $(this).prop("offsetTop");
					$(window).scrollTop(scrollToElem - 100);
				}
			}
		});
	}
}

