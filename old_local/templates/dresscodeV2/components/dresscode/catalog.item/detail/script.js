var flushTimeout;
var skuDropdownOpened = false;

$(function () {

    //vars
    $body = $("body");

    //sku change after page load
    var offerID = getUrlVars()["offerID"];
    if (offerID) {
        $.getJSON(elementAjaxPath + "?act=getOfferByID&id=" + offerID, function (data) {
            $.each(data[0], function (elementIndex, elementValue) {
                var $searchCurrentProperty = $(".elementSkuPropertyValue[data-name='" + elementIndex + "'][data-value='" + elementValue + "']");
                $searchCurrentProperty.find(".elementSkuPropertyLink").trigger("click", ["ignoreLoading"]);
            });
        });
    }

    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
            vars[key] = value;
        });
        return vars;
    }

    $(document).on("click", ".question", function (e) {
        e.preventDefault();
        $("#hint").remove();
        $("#catalogElement").append(
            $('<div id="hint">').html("<span>" + $(this).siblings().text() + "</span><ins></ins><p>" + $(this).data("description") + "</p>").css({
                "top": ($(this).offset().top - 20) + "px",
                "left": ($(this).offset().left + 40) + "px"
            })
        );
    });

    $(document).on("click", "#hint ins", function (e) {
        $("#hint").remove();
    });

    var $catalogElement = $("#catalogElement");
    var $elementNavigation = $("#elementNavigation");
    var $elementTools = $("#elementTools");

    if ($elementNavigation.find(".tabs").height() > $elementTools.find(".fixContainer").height()) {
        var maxScroll = $catalogElement.offset().top - $elementNavigation.find(".tabs").outerHeight();
    } else {
        var maxScroll = $catalogElement.offset().top - $elementTools.find(".fixContainer").outerHeight() - 36;
    }
    var navOffset = $elementTools.offset().top;

    var scrollControl = function (event) {
        var curScrollValueY = (event.currentTarget.scrollY) ? event.currentTarget.scrollY : $(window).scrollTop()
        if (curScrollValueY <= maxScroll + $catalogElement.height()) {
            if (navOffset <= curScrollValueY) {
                $elementNavigation.addClass("fixed").find(".tabs").removeClass("maxScroll");
                $elementTools.addClass("fixed").find(".fixContainer").removeClass("maxScroll");
                ;
            } else {
                $elementNavigation.removeClass("fixed").find(".tabs").removeClass("maxScroll");
                $elementTools.removeClass("fixed").find(".fixContainer").removeClass("maxScroll");
            }
        } else {
            $elementNavigation.removeClass("fixed").find(".tabs").addClass("maxScroll");
            $elementTools.removeClass("fixed").find(".fixContainer").addClass("maxScroll");
        }

    };

    var scrollToPropertyList = function (event) {

        $("html, body").animate({
            scrollTop: $("#elementProperties").offset().top + "px"
        }, 250);

        return event.preventDefault();

    };

    var $_this = {},
        $_parn = {},
        $_addCart = {};


    var _tmpPrice = null,
        _sumPrice = null,
        _tmpDisnt = null,
        _sumDisnt = null,
        _prs = null,
        _prd = null;


    var lsClick = function (event) {

        var __priceID = event.data.lsWindow === true ? "#setWPrice" : "#setPrice",
            __priceDS = event.data.lsWindow === true ? "#setWDisnt" : "#setDisnt",
            __addCart = event.data.lsWindow === true ? "#setWindowPrice .addCart" : ".rt .addCart",
            __prodCls = ".setElement",
            __disbCLs = "disabled",
            __priceDT = "price",
            __priceDI = "discount",
            __textDat = "text";

        var $_setPrice = $(__priceID),
            $_setDisnt = $(__priceDS);


        $_this = $(this);
        $_parn = $_this.parents(__prodCls);

        $_this.toggleClass(__disbCLs);
        $_parn.toggleClass(__disbCLs);

        _prs = $_this.hasClass(__disbCLs) ? -parseInt($_parn.data(__priceDT)) : parseInt($_parn.data(__priceDT));
        _prd = $_this.hasClass(__disbCLs) ? -(parseInt($_parn.data(__priceDT)) + Math.ceil($_parn.data(__priceDI))) : (parseInt($_parn.data(__priceDT)) + Math.ceil($_parn.data(__priceDI)));

        _tmpPrice = $_setPrice.html().replace(/[0-9]/g, '');
        _sumPrice = parseInt($_setPrice.html().replace(/[^0-9]/g, '')) + _prs;

        _tmpDisnt = $_setDisnt.html().replace(/[0-9]/g, '');
        _sumDisnt = parseInt($_setDisnt.html().replace(/[^0-9]/g, '')) + _prd;

        $_setPrice.html(
            formatPrice(_sumPrice) + _tmpPrice
        );

        $_setDisnt.html(
            formatPrice(_sumDisnt) + _tmpDisnt
        );

        _sumPrice == _sumDisnt ? $_setDisnt.hide() : $_setDisnt.show();

        $_addCart = $(__addCart);
        $_addCartImg = $_addCart.find("img");
        $_addCart.text($_addCart.data(__textDat)).attr("href", "#").removeClass("added").prepend($_addCartImg);

    };

    var oSetWindow = function (event) {
        $("#setWindow").toggle();
        event.preventDefault();
    };

    var setCheaperFormData = function (event) {

        var $this = $(this);
        var cheaperFormId = $this.data("id");
        var $cheaperForm = $("#webFormDwModal_" + cheaperFormId);
        var $cheaperProductName = $(".cheaper-product-name");
        var $cheaperProductNameField = $cheaperForm.find(".product-auto-name").parents(".webFormItem").find(".inputtext");

        $cheaperProductNameField.val($cheaperProductName.text()).prop("readonly", "readonly");

    };

    var sendRating = function (event) {
        var $this = $(this);
        var $win = $("#elementError");
        var trig = event.data.dest == "good" ? true : false;

        $.getJSON(ajaxPath + "?act=rating&id=" + $this.data("id") + "&trig=" + trig, function (data) {
            if (data["result"]) {
                $this.find("span").html(
                    parseInt($this.find("span").html()) + 1
                );
            } else {
                $win.show().find("p").text(data["error"]).parent().find(".heading").text(data["heading"]);
            }
        });
        event.preventDefault();
    };

    var calcRating = function (event) {
        var $this = $(this);
        var $mover = $this.find(".m");
        var $ratingInput = $("#ratingInput");
        var position = $this.offset().left;
        var curWidth = $this.width() / 5;
        var value = Math.ceil((event.pageX - position) / curWidth);

        $mover.stop().css({
            "width": (value * 20) + "%"
        });

        if (event.data.action) {
            $ratingInput.val(value);
        }
        ;

    };

    var callRating = function (event) {
        var $this = $(this);
        var $ratingInput = $("#ratingInput");
        var value = $ratingInput.val() != "" ? parseInt($ratingInput.val()) : 0;

        clearTimeout(flushTimeout);
        flushTimeout = setTimeout(function () {
            $this.find(".m").css({
                "width": (value * 20) + "%"
            })
        }, 500);
    };

    var usedSelect = function (event) {
        var $this = $(this);
        var $ul = $(".usedSelect");
        var usedInput = $("#usedInput");

        $ul.find("a").removeClass("selected");
        $this.addClass("selected");
        $("#usedInput").val($this.data("id"));

        event.preventDefault();
    };

    var reviewSubmit = function (event) {
        var $this = $(this);
        var $form = $(this).parents("form");
        var formData = $form.serialize();
        var $win = $("#elementError");

        $.getJSON(ajaxPath + "?act=newReview&" + formData + "&iblock_id=" + $this.data("id"), function (data) {
            //metrica
            if (typeof globalSettings != "undefined" && typeof globalSettings["TEMPLATE_METRICA_REVIEW_PRODUCT"] != "undefined" && typeof globalSettings["TEMPLATE_METRICA_ID"] != "undefined") {
                window["yaCounter" + globalSettings["TEMPLATE_METRICA_ID"]].reachGoal(globalSettings["TEMPLATE_METRICA_REVIEW_PRODUCT"]);
            }
            $win.show().find("p").text(data["message"]).parent().find(".heading").text(data["heading"]);
            data["reload"] ? $win.data("reload", 1) : void 0;
        });

        event.preventDefault();
    };

    var windowClose = function (event) {
        var $win = $("#elementError");
        $win.data("reload") ? document.location.reload() : $("#elementError").hide();
        event.preventDefault();
    };

    var showReview = function (event) {
        var $this = $(this);
        var $reviews = $("#reviews");
        if ($this.data("open") == "N") {
            $reviews.children("li").removeClass("hide");
            $this.data("open", "Y").html(CATALOG_LANG["REVIEWS_HIDE"]);
        } else {
            $reviews.children("li").slice(3).addClass("hide")
            $this.data("open", "N").html(CATALOG_LANG["REVIEWS_SHOW"]);
        }
        event.preventDefault();
    };

    var showReviewForm = function (event) {
        var $newReview = $("#newReview");
        $newReview.show();
        $("html, body").animate({
            scrollTop: $newReview.offset().top + "px"
        }, 250);
        return event.preventDefault();
    };

    var scrollToReviews = function (event) {
        var $newReview = $("#catalogReviews");
        $("html, body").animate({
            scrollTop: $newReview.offset().top + "px"
        }, 250);
        return event.preventDefault();
    };

    $(document).on("click", ".showReviewDetail", function (event) {
        var $this = $(this);
        var $reviewContainer = $("#reviews");

        scrollElement(
            $reviewContainer.children("li").eq(
                $this.data("cnt")
            ).offset().top
        );
        event.preventDefault();
    });


    //get fast delivery processing
    var DLProcessing = function (jsonData) {
        if (typeof jsonData["COMPONENT_HTML"] != "undefined") {
            if (jsonData["COMPONENT_HTML"] != "") {
                $body.append(jsonData["COMPONENT_HTML"]);
            }
        }
    };

    var getFastDelivery = function (event) {

        //vars
        var $this = $(this);
        var productId = $this.data("id");

        if (typeof SITE_ID != "undefined") {

            //check id
            if (productId != "") {

                //vars
                var sendObject = {
                    product_id: productId,
                    act: "getFastDelivery",
                    site_id: SITE_ID
                }

                if (typeof fastDeliveryScriptLoaded != "undefined") {
                    sendObject["loadScript"] = "N";
                }

                //check ajax path
                if (typeof elementAjaxPath != "undefined") {
                    //get json data
                    $.getJSON(elementAjaxPath, sendObject, DLProcessing);
                } else {
                    console.error("var elementAjaxPath not found");
                }

            }

        } else {
            console.error("SITE_ID not found");
        }

        //block actions
        return event.preventDefault();

    };

    //rating review
    $(document).on("mousemove", "#newRating .rating", {action: false}, calcRating);
    $(document).on("mouseleave", "#newRating .rating", callRating)
    $(document).on("click", "#newRating .rating", {action: true}, calcRating);
    $(document).on("click", ".usedSelect a", usedSelect);
    $(document).on("click", "#showallReviews", showReview);
    $(document).on("click", "#newReview .submit", reviewSubmit);
    $(document).on("click", "#elementErrorClose, #elementError .close", windowClose);
    $(document).on("click", ".reviewAddButton", showReviewForm);
    $(document).on("click", ".countReviewsTools", scrollToReviews);

    //rating vote
    $(document).on("click", ".good", {dest: "good"}, sendRating);
    $(document).on("click", ".bad", {dest: "bad"}, sendRating);

    //control tabs after scroll
    $(window).on("ready scroll resize", scrollControl);
    $(document).on("load", scrollControl);

    //scroll to more property table
    $(document).on("click", ".morePropertiesLink", scrollToPropertyList);

    //set
    $(document).on("click", ".sCheck", {lsWindow: false}, lsClick);
    $(document).on("click", ".sWindowCheck", {lsWindow: true}, lsClick);
    $(document).on("click", "#setWindow .close, #catalogElement .addSet, #setWindow .closeWindow", oSetWindow);

    //cheaper
    $(document).on("click", ".cheaper", setCheaperFormData);

    //open delivery modal
    $(document).on("click", ".calcDeliveryButton", getFastDelivery);

    getmodelRad();


    $(document).on("click", ".hint,.hintValue .close", function (e) {

        var thisElementEvent = $(this)

        if ($(e.target).hasClass("hint")) {

            thisElementEvent.find(".hintValue").removeClass("hint_hide");
            thisElementEvent.find(".hintValue").addClass("hint_show");
           ;
        } else if ($(e.target).hasClass("close")) {
            thisElementEvent.closest(".hintValue").removeClass("hint_show");
            thisElementEvent.find(".hintValue").addClass("hint_hide");
           
        }


    })

});


function getmodelRad() {
    $.ajax({
        type: "POST",
        url: AjaxPathModelRad,
        data: {
            arParams: AjaxParamsModelRad
        },
        cache: false,
        dataType: "html",
        success: function (msg) {

            msg = msg.replace(/^\s*/, '').replace(/\s*$/, '');
            if (msg == "FALSE") {
                return false;
            }

            $("#elementNavigation .changeTabs div[data-id=\"browse\"]").after('<div class="tab" data-id="model_ryd"><a href="#">' + AjaxParamsModelRadText + '</a></div>')

            $("#detailText").before(msg);
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


            $(window).scroll(function () {
                if ($(this).scrollTop() > $(".propList").offset().top - 120) {
                    $("#compareLine").fadeIn();
                } else {
                    $("#compareLine").fadeOut();
                }
            });

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
                })
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


        }
    });
}


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
