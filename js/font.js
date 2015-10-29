var $z = jQuery.noConflict();
$z(document).ready(function(){
    $z("#inc-font").click(function () {
        var size = $z("#questoes ol").css('font-size');
        var size = $z("#questoes label").css('font-size');
        var size = $z(".conteudoLetras p").css('font-size');



        size = size.replace('px', '');
        size = parseInt(size) + 2;

        $z("#questoes ol").animate({'font-size' : size + 'px'});
        $z("#questoes label").animate({'font-size' : size + 'px'});
        $z(".conteudoLetras p").animate({'font-size' : size + 'px'});


        return false;
    });

    $z("#dec-font").click(function () {
        var size = $z("#questoes ol").css('font-size');
        var size = $z("#questoes label").css('font-size');
        var size = $z(".conteudoLetras p").css('font-size');


        size = size.replace('px', '');
        size = parseInt(size) - 2;

        $z("#questoes ol").animate({'font-size' : size + 'px'});
        $z("#questoes label").animate({'font-size' : size + 'px'});
        $z(".conteudoLetras p").animate({'font-size' : size + 'px'});

        return false;
    });

});
