$(document).ready(function () {
    var boasVindas = adaptarNome($('span#boasVindas').html());
    var larguraJanela = $(window).width();

    $('span#boasVindas').html(exibirBoasVindas(boasVindas, larguraJanela));

    $(window).resize(function () {
        larguraJanela = $(window).width();

        $('span#boasVindas').html(exibirBoasVindas(boasVindas, larguraJanela));
    });
    
});

function exibirBoasVindas(boasVindas, larguraJanela) {
    if (larguraJanela <= 1220) {
        return "";
    } else {
        return boasVindas;
    }
}

function adaptarNome(boasVindas){
    var tamMaximo = 25;
    
    boasVindas = boasVindas.substr(0, boasVindas.length - 4);
    
    if(boasVindas.length > tamMaximo + 1){
        boasVindas = boasVindas.substr(0, tamMaximo) + "...";
    }
    
    return boasVindas + " | ";
}