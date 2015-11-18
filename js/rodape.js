$(document).ready(function () {
    $("#b_next").click(function(){        
        var cap = $("#clicado").parent().attr("class");
        var id = $("#clicado").parent().attr("id");
        id = parseInt(id)+1; 
        var href = $("."+cap+""+id).attr("href");
        window.location = $('#raiz').val() + href;
    });
    
    $("#b_prev").click(function(){         
        var cap = $("#clicado").parent().attr("class");
        var id = $("#clicado").parent().attr("id");
        if(id > 1) {
            id = parseInt(id)-1;
        } 
        var href = $("."+cap+""+id).attr("href");
        window.location = $('#raiz').val() + href;
    });
    
});
