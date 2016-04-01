$(document).ready(function () { 
    $(".caixaLightBox").draggable();
    $("a[rel*=leanModal]").leanModal({top: 200, overlay: 0.4, closeButton: ".modal_close"});
        
    /** Exbibição da mensagem de exclusão */
    $('a.exluirFuncionario').click(function (e) {
        e.preventDefault();
        $('#idResumoExcluido').val($(this).attr('href'));        
        $('#btnExcluir').click();
        $('#hrefExcluir').attr('href','resumosCorrecao/excluir/'+$('#idResumoExcluido').val());
        
        
        /*$('#hrefExcluir').href($(this).attr('href'));
        $('#idResumoExcluido').val($(this).attr('href'));        
        $('#btnExcluir').click();
        alert($('#idUsuarioExcluido').val());*/
    });
    
    /** Redireciona para a pagina de exclusão */
    $('#confirmarExcluir').click(function () {
        window.location = $('#raiz').val() + 'resumosCorrecao/excluir/' + $('#idResumoExcluido').val();
    });

});

