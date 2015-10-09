$(document).ready(function () {
    
    /** Função para ajusta o conteudo ao tamanho da tela */
    ajustarConteudo();
    setTimeout(ajustarConteudo(), 1000);
    
    /** Reajusta o conteudo sempre que a tela mudar de tamanho */
    $(window).resize(function () {
        ajustarConteudo();
    });
    
    /** Exibe o questionario quando a pessoa clicar em iniciar exercicio */
    $('input#iniciar').click(function () {
        $('form#exercicio').show();
        $('section#iniciarExercicio').hide();
        ajustarConteudo();
    });
    
    /** Verifica se o usuario preencheu todas as questoes antes de enviar o teste */
    $('form#exercicio').submit(function () {
        var preenchido = true;
        $('ol#questoes > li').each(function () {
            if (preenchido) {
                var respondido = false;
                $(this).find('input[type=radio]').each(function () {
                    if ($(this).is(':checked')) {
                        respondido = true;
                    }
                });
                
                preenchido = respondido;
            }
        });
        
        if(!preenchido) alert('responda todas as questoes');
        return preenchido;
    });
    
    /** Receber a imagem selecionada e exibe no img#fotoAtual */
    $('input#fotoMenu').change(function(){
        
        /** Verifica se o arquivo possui menos que 2MB */
        if(this.files[0].size < 2*(1024*1024)){
            readURL(this);
            $('p#info').html('');
        }else{
            $('p#info').html('A imagem do perfil deve ter no máximo 2 MB.');
            $('');
            $(this).val('');
        }
       
    });
    
    $("img#fotoAt").mouseenter(function(){
        $("input#editarMenu").fadeIn("slow").css('height','100%');
    });
        
    $("input#editarMenu").click(function(){
        $("input#fotoMenu").click();
        $("input#editarFoto").css('display','block');
       
        $("img#fotoAt").mouseenter(function(){
            $("input#editarFoto").css('display','block');
        });
    });
    
    $("div#fotoPerfilMenu").mouseleave(function(){
        $("input#editarMenu").fadeOut("slow");  
        $("input#editarFoto").css('display','none');
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
            $('#fotoAt').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
   
});

/** Função que ajusta o conteudo ao tamanho da tela */
function ajustarConteudo() {
    var largura = $(document).width();

    $('#conteudoTopico').css('width', larguraConteudo(largura) + "%");

    ajustarAltura();
}

/** */
function ajustarAltura() {
    var altura = $('section#conteudoTopico').height() + 30;
    var alturaCapitulos = $('section#capitulos').height();
    var posRodape = $('footer#rodape').position().top - 65;
    console.log(posRodape);
    if (posRodape > altura) {
        altura = posRodape;
    }

    if (altura < alturaCapitulos) {
        altura = alturaCapitulos + 15;
    }
    
    /*if(altura < 500) {
        altura = 500;
    }*/

    $('#capitulos').css('height', (altura) + 'px');
    $('#paginas').css('height', (altura) + 'px');
}

/**
 * Ajusta o conteudo ao tamanho horizontal da tela
 * 
 * @param int largura da tela
 * @return int largura do documento 
 */
function larguraConteudo(largura) {
    if (largura > 980) {
        return 36.5 + 31 * (largura - 990) / (1920 - 990);
    } else {
        return 35;
    }
}