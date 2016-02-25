$(document).ready(function () {
        var itens = $("input#array").val();
        var obj = $.parseJSON(itens);      
        
        $("input[name='login']").on('blur', function(){
            var login = $(this).val();
            $.post('login.php?login=' + login, function(dado){
               var i = 0;
               var verificar;
               while(obj.hasOwnProperty('u'+i)){
                    if(obj['u'+i] == login){
                        verificar = 1;
                        $('#info').html("Esse login já existe!")
                                .removeClass('logado')
                                .addClass('erro');
                        break;
                    } else {
                        verificar = 0;
                    } 
                    i++;
                }
                if(verificar == 0){
                $('#info').html("Login válido.")
                        .removeClass('erro')
                        .addClass('logado');}  
            });
       
        });
        
        $("form#areaLogin").submit(function(){
            if($("#info").html() == "Esse login já existe!"){
                return false;
            }
            return true;
        });
    
    });