$(document).ready(function () {
        var cap;
        var id;
        var href;
        
    $("#b_next").click(function(){     
        cap = $("#clicado").parent().attr("class");  
        if($("#clicado").hasClass("resumo")) {
            cap = parseInt(cap)+1;
            id = 1;
            href = $(".0"+cap+""+id).attr("href");
        } else {
            id = $("#clicado").parent().attr("id");
            id = parseInt(id)+1; 
            href = $("."+cap+""+id).attr("href");          
        }
         window.location = $('#raiz').val() + href;
    });
    
    $("#b_prev").click(function(){ 
        cap = $("#clicado").parent().attr("class");
        if($("#clicado").parent().attr("id") !== "1"){        
            id = $("#clicado").parent().attr("id");
            if(id > 1) {
                id = parseInt(id)-1;
            } 
            href = $("."+cap+""+id).attr("href");
        } else {
            if(cap > 1) {
                cap = parseInt(cap)-1;
            }
            href = "treinamento/"+cap+"/resumo";
        }
        window.location = $('#raiz').val() + href;
    });
    
});
