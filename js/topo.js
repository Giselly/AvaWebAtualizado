$(document).ready(function () {
    var boasVindas = adaptarNome($('span#boasVindas').html());
    var larguraJanela = $(window).width();

    $('span#boasVindas').html(exibirBoasVindas(boasVindas, larguraJanela));

    $(window).resize(function () {
        larguraJanela = $(window).width();

        $('span#boasVindas').html(exibirBoasVindas(boasVindas, larguraJanela));
    });
    
    $(function () {
        $('.listagem').DataTable({
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            }
        });
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