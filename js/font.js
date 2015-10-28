var $z = jQuery.noConflict();
$z(document).ready(function(){
    $z("#inc-font").click(function () {
        var size = $z(".conteudoLetras p").css('font-size');
        var size = $z("#questoes li").css('font-size');
        var size = $z("#questoes label").css('font-size');

        size = size.replace('px', '');
        size = parseInt(size) + 2;

        $z(".conteudoLetras p").animate({'font-size' : size + 'px'});
        $z("#questoes li").animate({'font-size' : size + 'px'});
        $z("#questoes label").animate({'font-size' : size + 'px'});

        return false;
    });

    $z("#dec-font").click(function () {
        var size = $z(".conteudoLetras p").css('font-size');
        var size = $z("#questoes li").css('font-size');
        var size = $z("#questoes label").css('font-size');

        size = size.replace('px', '');
        size = parseInt(size) - 2;

        $z(".conteudoLetras p").animate({'font-size' : size + 'px'});
        $z("#questoes li").animate({'font-size' : size + 'px'});
        $z("#questoes label").animate({'font-size' : size + 'px'});
        return false;
    });

});
