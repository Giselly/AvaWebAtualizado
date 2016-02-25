<?php
/*include_once('../Classes/config.inc.php');

$dadosUser = $usuarioBusiness->buscar();
$user = array();
$i = 0;
foreach($dadosUser as $dados){
    $user[$i]= $dados['login'];
    $i++;
}
$js_array = json_encode($user);*/
?>
<!--<a href="../../../../../Users/MC 80/AppData/Local/Temp/4745.url"></a>
<input type="hidden" value=""/>
<script type='text/javascript'>
    <?php
   
    ?>
    $(document).ready(function () {
        $("input[name='login']").on('blur', function(){
            var login = $(this).val();
            $.post('login.php?login=' + login, function(dado){
                alert(login);        
            });
            
            $.ajax({
            method: "POST",
            url: "responses/rescadastro.php",
            data: {login: $('input[name=login]').val()}
            })
                .done(function (resultado) {
                    $('#info').removeClass('processando');
                    /** Verifica se o usuario é válido */
                    if(resultado == '0'){
                        $('#info').html("Esse login já existe!")
                                .addClass('erro');
                    }else if(resultado == 0) {
                        $('#info').html("Login válido.")
                                .addClass('logado');                      
                    }
                });
        return false;
        });
    });  
</script>-->
