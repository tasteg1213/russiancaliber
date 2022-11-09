// $(function(){
// 	var showHint = function (e) {
//         var thisElementEvent = $(this);
//         if ($(e.target).hasClass("hint")) {
//             thisElementEvent.find(".hintValue").removeClass("hint_hide");
//             thisElementEvent.find(".hintValue").addClass("hint_show");
//         } else if ($(e.target).hasClass("close")) {
//             thisElementEvent.closest(".hintValue").removeClass("hint_show");
//             thisElementEvent.find(".hintValue").addClass("hint_hide");           
//         }
//     }

// 		$(document).on("click", ".hint, .hintValue .close", showHint);
// })


$(function(){
	var showOnMobile = function (e){
		e.preventDefault();
		$("#modelTableList").toggleClass("show");
		console.log($(this));
		$(this).toggleClass("show");
	}

	var showModelLine = function (e){
		e.preventDefault();
		$("#model_ryd").toggleClass("hidden");

		var scrollTable = $("#scrollTable > ul, #fakeScroll");
		var topScroll = $("#topScroll");

		var H_model_rydEl = [];
		var model_rydEl = $("#model_ryd").find(".scrollElement");

		$.each(model_rydEl, function (index, value) {
			H_model_rydEl[$(this).height() * 1] = $(this).height() * 1;
		});
		var heightD = H_model_rydEl.max();

		$.each(model_rydEl, function (index, value) {
			if ($(this).height() * 1 != heightD) {
				$(this).css({height: heightD + 18});
			}
		});

		if (scrollTable.width() < $("#scrollTable").width()) {
			console.log(1);
			$("#model_ryd #compareBlock .left .headingTools").css({height: heightD - 24});
			topScroll.hide();
			$("#compareBlock .left .propList").css("margin-top", "0");
		} else {
			console.log(2);
			$("#model_ryd #compareBlock .left .headingTools").css({height: heightD - 18});
			$("#compareBlock .left .propList").css("margin-top", +$("#topScroll").height() + "px");
		}

		$(window).resize(function (e) {
			if (scrollTable.width() < $("#scrollTable").width()) {
				console.log(3);
				topScroll.hide();
				$("#model_ryd #compareBlock .left .headingTools").css({height: heightD - 24});
				$("#compareBlock .left .propList").css("margin-top", "0");
			} else {
				console.log(4);
				$("#compareBlock .left .propList").css("margin-top", 0 + $("#topScroll").height() + "px");
				topScroll.show();
				$("#model_ryd #compareBlock .left .headingTools").css({height: heightD - 18});
			}
		});
	}

	var getmodelRad = function () {
		$("#elementNavigation .changeTabs div[data-id=\"browse\"]").after('<div class="tab" data-id="model_ryd"><a href="#">' + "AjaxParamsModelRadText" + '</a></div>')

		$(document).on("click", ".scrollElement ins", function (e) {
			$this = $(this);
			$this.addClass("delete");
			$.get(ajaxPath + "?act=compDEL&id=" + $this.data("id"), function (data) {
				if (data == 1) {
					document.location.reload();
				}
			});
		});


		var propList = $("ul.propList");
		var checkList = $("ul.check");
		var checkListElements = $("ul.check > li");
		var propListElements = propList.find("li");
		var scrollTable = $("#scrollTable > ul, #fakeScroll");
		var topScroll = $("#topScroll");
		var scrollTableElements = $("#scrollTable > ul > li");
		var scrollTableElementsCount = $("ul.check li").length / $("ul.check").length;
		var listIndex = 0;
		var hide = true;
		propListElements.hover(function (e) {

			listIndex = $(this).index();
			propListElements.removeClass("selected");
			propListElements.filter(":nth-child(" + (listIndex + 1) + ")").addClass("selected");

		}, function () {
			propListElements.removeClass("selected");
		});

		scrollTable.width((scrollTableElements.length * 185) + "px");

		if ($(".propList").length > 0){
			$(window).scroll(function () {
				if ($(this).scrollTop() > $(".propList").offset().top - 120) {
					$("#compareLine").fadeIn();
				} else {
					$("#compareLine").fadeOut();
				}
			});
		}

		var hint = $('#hintCompare');
		$("#scrollTable .propList li").on({
			mouseenter: function () {

				if ($(this).text().length > 14) {
					hint.text($(this).data('hint')).css({display: "block"});
				}
			},
			mouseleave: function () {
				if ($(this).text().length > 14) {
					hint.css({display: "none"});
				}
			},
			mousemove: function (e) {
				if ($(this).text().length > 14) {
					hint.css({top: e.clientY, left: e.clientX});
				}
			}
		});

		var H_model_rydEl = [];
		var model_rydEl = $("#model_ryd").find(".scrollElement");

		$.each(model_rydEl, function (index, value) {
			H_model_rydEl[$(this).height() * 1] = $(this).height() * 1;
		});
		var heightD = H_model_rydEl.max();

		$.each(model_rydEl, function (index, value) {
			if ($(this).height() * 1 != heightD) {
				$(this).css({height: heightD + 18});
			}

		});

		if (scrollTable.width() < $("#scrollTable").width()) {
			console.log(1);
			$("#model_ryd #compareBlock .left .headingTools").css({height: heightD - 24});
			topScroll.hide();
			$("#compareBlock .left .propList").css("margin-top", "0");
		} else {
			console.log(2);
			$("#model_ryd #compareBlock .left .headingTools").css({height: heightD - 18});
			$("#compareBlock .left .propList").css("margin-top", +$("#topScroll").height() + "px");
		}

		$(window).resize(function (e) {
			if (scrollTable.width() < $("#scrollTable").width()) {
				console.log(3);
				topScroll.hide();
				$("#model_ryd #compareBlock .left .headingTools").css({height: heightD - 24});
				$("#compareBlock .left .propList").css("margin-top", "0");
			} else {
				console.log(4);
				$("#compareBlock .left .propList").css("margin-top", 0 + $("#topScroll").height() + "px");
				topScroll.show();
				$("#model_ryd #compareBlock .left .headingTools").css({height: heightD - 18});
			}
		});

		topScroll.scroll(function (e) {
			$("#scrollTable").scrollLeft($(this).scrollLeft());
		});

		$("#scrollTable").scroll(function (e) {
			topScroll.scrollLeft($(this).scrollLeft());
		});


		$("#compareTools a.hide").on("click", function (e) {
			$("#compareCheck input:checked").each(function (index) {
				propList.find('[data-id="' + $(this).prop("id") + '"]').hide();
			});
			e.preventDefault();
		});

		$("#compareTools a.show").on("click", function (e) {
			$("#compareCheck input:checked").each(function (index) {
				propListElements.show();
			});
			e.preventDefault();
		});

		$(".leftTools a.all").on("click", function (e) {
			propListElements.show();
			e.preventDefault();
		});

		$(".leftTools a.different").on("click", function (e) {
			for (var i = 1; i <= scrollTableElementsCount; i++) {
				hide = true;
				for (var c = 0; c <= checkList.length - 1; c++) {
					if (c + 1 <= checkList.length - 1) {
						if (checkList.eq(c).find('li:nth-child(' + i + ')').html() != checkList.eq(c + 1).find('li:nth-child(' + i + ')').html()) {
							hide = false;
							break;
						}
					}
				}

				if (hide == true) {
					propList.find('li:nth-child(' + i + ')').hide();
				}
			}
			e.preventDefault();
		});
	};

	getmodelRad();

	$("#model_ryd").addClass("hidden");

	$(document).on("click", ".model_btn", showModelLine);
	$(document).on("click", ".show_model_line-mobele", showOnMobile);
});

Array.prototype.max = function () {
	var max = parseInt(this[this.length - 1]), el;
	for (var i = this.length - 2; i >= 0; i--) {
		el = parseInt(this[i]);
		if (el > max) {
			max = el;
		}
	}
	return max;
};