$(document).ready(function () {
        var itens = $("input#array").val();
        var obj = $.parseJSON(itens);   
        
        $("input[name='login']").on('blur', function(){
            var login = $(this).val();
            $.post('login.php?login=' + login, function(dado){
               var i = 0;
               var verificar;
               var validacao;
               validacao = validarCPF(login);
               
                if(!(validacao)){
                    $('#info').html("Login inválido!")
                            .removeClass('logado')
                            .addClass('erro'); 
                }               
                while(obj.hasOwnProperty('u'+i)){
                   //verificar = 0;
                    if(obj['u'+i] == login){
                        verificar = 1;
                        $('#info').html("Esse login já existe!")
                                .removeClass('logado')
                                .addClass('erro');
                        break; 
                    }else if(login == ""){
                        verificar = 0; 
                        $('#info').html("")
                                  .removeClass('logado')
                                  .removeClass('erro');
                    } else {
                        verificar = 2;
                       
                    }
                    i++;
                }
                if(verificar == 2 && validacao){
                    $('#info').html("Login válido.")
                            .removeClass('erro')
                            .addClass('logado');
                }  
            });
            

            /*if(!(validarCPF(login))){
                $('#info').html("Login inválido!")
                        .removeClass('logado')
                        .addClass('erro'); 
            } else {
                $('#info').html("Login válido.")
                        .removeClass('erro')
                        .addClass('logado');
             
            }*/
       
        });
        
        $("form#areaLogin").submit(function(){
            if($("#info").html() == "Esse login já existe!" || $("#info").html() == "Login inválido!" ){
                return false;
            }
            return true;
        });
        
       // validador CPF
        function validarCPF(cpf) {  
            cpf = cpf.replace(/[^\d]+/g,'');    
            if(cpf == '') return false; 
            // Elimina CPFs invalidos conhecidos    
            if (cpf.length != 11 || 
                cpf == "00000000000" || 
                cpf == "11111111111" || 
                cpf == "22222222222" || 
                cpf == "33333333333" || 
                cpf == "44444444444" || 
                cpf == "55555555555" || 
                cpf == "66666666666" || 
                cpf == "77777777777" || 
                cpf == "88888888888" || 
                cpf == "99999999999")
                    return false;       
            // Valida 1o digito 
            add = 0;    
            for (i=0; i < 9; i ++)       
                add += parseInt(cpf.charAt(i)) * (10 - i);  
                rev = 11 - (add % 11);  
                if (rev == 10 || rev == 11)     
                    rev = 0;    
                if (rev != parseInt(cpf.charAt(9)))     
                    return false;       
            // Valida 2o digito 
            add = 0;    
            for (i = 0; i < 10; i ++)        
                add += parseInt(cpf.charAt(i)) * (11 - i);  
            rev = 11 - (add % 11);  
            if (rev == 10 || rev == 11) 
                rev = 0;    
            if (rev != parseInt(cpf.charAt(10)))
                return false;       
            return true;   
        }
            
    });