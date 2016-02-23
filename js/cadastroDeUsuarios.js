$(document).ready(function () {

    $("#datepicker").datepicker($.datepicker.regional["pt-BR"]);
    
    /**Validação do form */
    $('form#completo').submit(function(){
        var vazio = false ;
        $.each(['nome', 'apelido', 'login'], function(i, l){
            if($('input[name=' + l + ']').val() ==  ''){
                $('p#info').html('Preencha somente os campos necessários.');
                vazio = true;
            }
        });
        return !vazio;
        
    });
    
   /*$("#excluir").click(function(){
        var user;
        user = $("#usuarioExcluir").val();
        $("#hrefExcluir").href("cadastroDeUsuarios/excluir/"+user);
        $(".excluir").href("cadastroDeUsuarios/excluir/"+user);
    });*/
    /** Configurações do lightbox */
    $(".caixaComentarios").draggable();
    $("a[rel*=leanModal]").leanModal({top: 200, overlay: 0.4, closeButton: ".modal_close"});
    
    /** Exbibição da mensagem de exclusão */
    $('a.exluirFuncionario').click(function (e) {
        e.preventDefault();
        /*$('#hrefExcluir').href($(this).attr('href'));*/
        $('#idUsuarioExcluido').val($(this).attr('href'));        
        $('#btnExcluir').click();
        $('#hrefExcluir').attr('href','cadastroDeUsuarios/excluir/'+$('#idUsuarioExcluido').val());
        //alert($('#idUsuarioExcluido').val());
    });
    
    /** Redireciona para a pagina de exclusão */
    $('#confirmarExcluir').click(function () {
        window.location = $('#raiz').val() + 'cadastroDeUsuarios/excluir/' + $('#idUsuarioExcluido').val();
    });
});

/**
 * Função que ler o arquivo e carrega na IMG fotoAtual
 * @param input que contem a imagem
 * @return void
 */
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#fotoAtual').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}