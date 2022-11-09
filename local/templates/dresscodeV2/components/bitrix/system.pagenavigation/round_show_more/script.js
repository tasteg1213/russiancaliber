$(document).ready(function(){
    $(document).on('click', '.load_more', loadMore);
});
 


loadMore = function(){

    var targetContainer = $('.itemRow.item').parent(),          //  Контейнер, в котором хранятся элементы
        url =  $('.load_more').attr('data-url');    //  URL, из которого будем брать элементы

    if (url !== undefined) {
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'html',
            success: function(data){

                //  Удаляем старую навигацию

                var elCount, nav = $(".bx-pagination li"),
                    thisIndex, nextPageNumber;;
                var elements = $(data).find('.itemRow.item'),  //  Ищем элементы
                    pagination = $(data).find('.load_more');//  Ищем навигацию
                // console.log(pagination);
                $('.load_more').replaceWith(pagination);
                targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                // targetContainer.append(pagination); //  добавляем навигацию следом

                //кол-во элементов на странице, в зависимости от типа таблицы
                if ($("#catalogTableList").length > 0){
                    console.log("catalogTableList");
                    elCount = $("#catalogTableList").find(".itemRow.item").length;
                } else if($("#catalogLineList").length > 0){
                    console.log("catalogLineList");
                    elCount = $("#catalogLineList").find(".itemRow.item").length;
                } else if($(".items.productList").length > 0){
                    console.log("productList");
                    elCount = $(".items.productList").find(".item.product").length;
                }


                nav.each(function(index, value){
                    if($(this).hasClass("bx-active")){
                        thisIndex = index;
                    }
                });

                thisPageNumber = nav.eq(thisIndex);
                nextPageNumber = nav.eq(thisIndex+1);

                if (nextPageNumber.attr("class") == ""){
                    thisPageNumber.removeClass("bx-active");
                    nextPageNumber.addClass("bx-active");
                }

                if (elCount > 0 ){
                    console.log("test");
                    console.log(elCount);

                    $.post(
                        "/local/templates/dresscodeV2/ajax/ajax.php",
                        {ELEM_COUNT: elCount},
                        function(data){
                            console.log(123);
                            console.log($(data));
                        }
                    );
                }
            }
        })
    }
};