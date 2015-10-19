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
                    if (resultado === "true") {
                        window.location = $('#raiz').val() + "login";
                    } else if (resultado !== "true" ){
                        $('p#info').html(resultado);
                    }
                });
        return false;
    });
});