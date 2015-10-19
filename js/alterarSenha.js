$(document).ready(function () {
    $('form#simples').submit(function () {
        var iidUsuario = $('input[name=idUsuario]').val();
        var iSenhaAtual = $('input[name=senhaAtual]').val();
        var iNovaSenha = $('input[name=novaSenha]').val();
        var iConfirmarSenha = $('input[name=confirmarSenha]').val();

        $.ajax({
            method: "POST",
            url: "responses/resalterarSenha.php",
            data: {idUsuario: iidUsuario, senhaAtual: iSenhaAtual, novaSenha: iNovaSenha, confirmarSenha: iConfirmarSenha}
        })
                .done(function (resultado) {
                    if (resultado == "true") {
                        /*window.location = $('#raiz').val() + "treinamento/01/topico/1.1_-_A_folha_de_papel_em_branco";*/
                    } else {
                        $('p#info').html(resultado);
                    }
                });
        return false;
    });
});