$(function () {

    $("#slider").dwSlider({
        afterResize: setSliderHeight, // callback
        afterLoad: setSliderHeight, // callback
        timeLine: false,
        responsive: true,
        delay: 5000,
        speed: 1000

    });

    function razmer_kartinki() {
        var slidePictures = $("#slider .slideBox").find("span");

        var wW = $(window).outerWidth();
        if (wW < 500) {

            var ch = "small";


            //var ch = (wW > 1350) ? "large" : "normal";
            slidePictures.each(function (i, el) {

                console.log(slidePictures);

                $(el).css({
                    "background-image": "url('" + $(el).data(ch) + "')"
                });
            });
        }
    }




    //callBack functions
    function setSliderHeight(link) {
       // razmer_kartinki();


        function setHeight() {
            return false;
        }

        setHeight();

    }

    //
    $("#slider .sliderContent").removeClass("loading").show();



});