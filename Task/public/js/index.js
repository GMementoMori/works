function renderBlockList() {
    let min = $(this).attr("data-min-block");

    let actualButton = $(this).val();

    if (actualButton === '<- back') {
       min = 0;
    }
    else if(actualButton === 'end ->'){
       min = $(this).attr("data-end");
       actualButton = $(this).attr("data-end-button");
    }
    let arrToRender = [min,actualButton];
	      $.ajax({
               url: "App/view/home.phtml",
               data: ({arrToRender}),
               type: "POST",
               dataType: "html",
               success: function (data) {

                  $("body").html(data);

               }
            });
}
$(".render-list").click(renderBlockList);
$(".render-list-quick-buttons").click(renderBlockList);
