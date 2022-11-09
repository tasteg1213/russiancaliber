$(function(){
	$(document).on("click", ".on_u_order", function(e){
		e.preventDefault();
		$("#appOnOrder").css({"display":"block"});
		$("#foundation").addClass("blurred");
			$("#ITEM_NAME").text($(this).data("itemName"));
	});

	if ($("#CLIENT_MC_ID").length > 0){
		getMcClientID();
	}


	$(document).on("click", "a.requestPrice", function(e){
		if (typeof ym == 'function') {
			ym(53244133, 'getClientID', function (clientID) {
				$("#requestPriceForm #CLIENT_MC_ID").val(clientID);
				$("#requestPriceForm #CLIENT_MC_ID").attr({"value": clientID});
			});
		}
	})
});


function getMcClientID() {
	if (typeof ym == 'function') {
		ym(53244133, 'getClientID', function (clientID) {
			$("#CLIENT_MC_ID").val(clientID);
			$("#CLIENT_MC_ID").attr({"value": clientID});
			// console.log(clientID);
		});
	}
}

