jQuery(document).ready(function(){
    $(".flip").click(function(){
        $(this).parent().find(".panel").slideToggle("2000");
    });
    
});