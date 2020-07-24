
   function addElem(){

       var values = [];
       var colums = [];

       var listElems = $(".values_to_add");

       for (var i = 0; i < listElems.length; i++) {
               var eqSelect = '.values_to_add:eq('+ i +')';
               values[i] = $(eqSelect).val();
               colums[i] = $(eqSelect).attr('data-column');
       }

         let arrInfoAdd = [values, colums];

         $.ajax({
             url: "admin_page.php",
             data:({ arrInfoAdd }),
             type: "POST",
             dataType: "html",
             success: function (data) {
                $("body").html(data);
                alert('Entry added successfully');
             }
          });
    }

    function changeColumn(){

        var values = [];
        var colums = [];
      
        var idField = $(this).attr('data-id-save');
        var selector = "textarea[data-id-filed='"+ idField +"']";
        var listElems = $(selector);

        for (var i = 0; i < listElems.length; i++) {
               var listSelector = selector + ':eq('+ i +')';
               values[i] = $(listSelector).val();
               colums[i] = $(listSelector).attr('data-select-column-tochange');
        }

        let arrToChange = [idField,values,colums];
        console.log(arrToChange);
        $.ajax({
             url: "admin_page.php",
             data:({ arrToChange }),
             type: "POST",
             dataType: "html",
             success: function (data) {
                $("body").html(data);
                alert('Entry updated successfully');
             }
        });
    }

    function delField(){
          var selectElemDel = $(this).attr('data-id-remove');
         $.ajax({
             url: "admin_page.php",
             data:({ selectElemDel }),
             type: "POST",
             dataType: "html",
             success: function (data) {
                $("body").html(data);
                alert('Entry deleted successfully');
             }
          });

    }

    function exit(){
            $.ajax({
               url: "admin_page.php",
               data: ({exit}) ,
               type: "POST",
               dataType: "html",
               success: function (data) {
                $("body").html(data);
               }
            });
    }
$(".add_values").click(addElem);
$(".saveField").click(changeColumn);
$(".deleteField").click(delField);
$("#exit").click(exit);



