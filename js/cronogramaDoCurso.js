
$(document).ready(function(){
    $("th.flip").click(function(){
        $(this).parent().find(".panel").slideToggle("2000");
    });

});