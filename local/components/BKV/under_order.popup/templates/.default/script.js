$(document).ready(function(e){
	if (typeof ym == 'function') {
		ym(53244133, 'getClientID', function(clientID) {
            $("#modal_on_order #CLIENT_MC_ID").val(clientID);
            $("#modal_on_order #CLIENT_MC_ID").attr({"value": clientID});
		});
	}
	
	var linkOnOrder = location.origin + location.pathname;
	$("#PAGE_LINK").val(linkOnOrder);

    $(document).on("click", "#appOnOrder .closeWindow", closeOnOrder);
    $(document).on("click",".on_order-form__submit", subbmitOnOrder);
});



function subbmitOnOrder(e){
    e.preventDefault();

    var formError = 0;
    $("#onorder input:not(#CLIENT_MC_ID, #PAGE_LINK)").each(function(){
        if($(this).val().length < 1){
            $(this).addClass("error");
            formError++;
        }else {
            $(this).removeClass("error");
        }
    });
    $
    $complete = $('#bind__on_order-submit').hasClass('complete_form');
    if (formError < 1 && !$complete){
        $('#bind__on_order-submit').addClass('complete_form');
        var formOnOrder = $("form#onorder");
        var formSerialize = formOnOrder.serialize();
        $.ajax({
            type: "POST",
            url: onOrderPath+'/ajax.php',
            data: formSerialize,
            success: function(msg){
                if (msg == 'error') {
                    $('.error-text').text('пїЅпїЅ пїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅ!');
                } else {
                    console.log(msg);
                    $("#modal_on_order .result").text("Заявка заполнена. Менеджер сообщит вам сроки и стоимость в течение 30 минут.").css({"display": "block"});
                    //$("#modal_on_order .result").text("пїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅ. пїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅ пїЅ пїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅ пїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅ 30 пїЅпїЅпїЅпїЅпїЅ, пїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅ пїЅпїЅпїЅпїЅ.").css({"display": "block"});
                    if(window.innerWidth > 800){
                        formOnOrder.css({"visibility": "hidden"});
                    }else{
                        formOnOrder.css({"display": "none"});
                    }
                }
            }
        });
    }
    return false;
}


function closeOnOrder(e){
    e.preventDefault();
    $("#appOnOrder").css({"display":"none"});
    $("#foundation").removeClass("blurred");
}