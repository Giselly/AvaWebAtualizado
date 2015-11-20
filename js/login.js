$(document).ready(function () {
    
    /**Validação do submit do formulario de login */
    $('form[name=login]').submit(function () {

        if ($('input[name=usuario]').val() === "" || $('input[name=senha]').val() === "") {
            $('#info').removeClass('processando');
            $('#info').html("Preencha todos os campos.")
                    .addClass('erro');
            return false;
        }

        /** Personalizando a mensagem para 'Processando...' */
        $('#info').html('Autenticando...')
                .removeClass('logado')
                .removeClass('erro')
                .addClass('processando');

        /** Verificar se o usuario existe */
        $.ajax({
            method: "POST",
            url: "responses/reslogin.php",
            data: {login: $('input[name=usuario]').val(), senha: $('input[name=senha]').val()}
        })
                .done(function (resultado) {
                    $('#info').removeClass('processando');
                    /** Verifica se o usuario é válido */
                    if(resultado == '-1'){
                        /*$('#areaLogin').addClass('aguarde');
                        $('#aguardarConfirmacao').removeClass('aguarde');*/
                        $('#info').html("Aguarde uma confirmação do seu cadastro.")
                                .addClass('erro');;
                    } else if (resultado !== '0') {
                        $('#info').html("Login efetuado com sucesso.")
                                .addClass('logado');

                        /** Redireciona para a home caso o usuario seja válido*/
                        window.location = $('#raiz').val() + "treinamento/01/topico/1.1_-_A_folha_de_papel_em_branco";
                        
                        $('#notification').addClass('toolbar-bottom').end().removeClass('toolbar-bottom');
                    } else {
                        $('#info').html("Login ou senha inválido.")
                                .addClass('erro');
                    }
                });
        return false;
    });
    
    /** Quando clicar em um botão do slider */
    $('a.slider').click(function(e){
       e.preventDefault();
       sliderManual($(this).attr('href'));
       
    });

    /** Iniciar o slider automaticamente */
    sliderPlay();

});
 
 /** Timer que executa sliderFunc a cada 8s */
var slider;

/** Numero da imagem que esta sendo exibida */
var num = 1;

/** Iniciar o timer */
function sliderPlay() {
    slider = setInterval(sliderFunc, 8000);
}

/** Parar o timer */
function sliderStop(){
    clearInterval(slider);
}

/** Reiniciar o timer */
function sliderReset(){
    sliderStop();
    sliderPlay();
}

/**
 * Definir qual imagem será exibida
 * @param n numero da imagem que será exibida
 */
function sliderManual(n){
    num = (parseInt(n) % 2) + 1;
    sliderFunc();
    sliderReset();
}

/** Substituir imagem que esta sendo exibida */
function sliderFunc() {
    num = (num % 2) + 1;
    $('img#computador').attr('src', 'imagens/computador' + num + '.png');
    $('img#bola' + num).attr('src', 'imagens/bolaSelecionada.png');
    $('img#bola' + ((num % 2) + 1)).attr('src', 'imagens/bola.png');
}