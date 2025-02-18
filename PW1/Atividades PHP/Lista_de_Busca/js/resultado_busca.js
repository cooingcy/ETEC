$(document).ready(function() {
    // Obtém o parâmetro de busca da URL
    var searchParam = getParameterByName("search");

    // Preenche a barra de pesquisa com o termo da busca anterior
    $("#searchInput").val(searchParam);

    // Realiza a busca inicial
    performSearch(searchParam);

    $("#searchButton").on("click", function() {
        var searchText = $("#searchInput").val().toLowerCase();
        performSearch(searchText);
    });

    function performSearch(searchText) {
        // Limpa a tabela antes de adicionar os novos resultados
        $("#ResultTableData").empty();

        $.getJSON("js/automoveis.json", function(data) {
            for (var i = 0; i < data['automoveis'].length; i++) {
                // Verifica se a marca ou modelo contém o termo de busca
                if (data['automoveis'][i]['MARCA'].toLowerCase().includes(searchText) ||
                    data['automoveis'][i]['CARRO'].toLowerCase().includes(searchText)) {
                    
                    $("#ResultTableData").append("<tr>");
                    $("#ResultTableData").append("<td scope='col'>" + data['automoveis'][i]['MARCA'] + "</td>");
                    $("#ResultTableData").append("<td scope='col'>" + data['automoveis'][i]['CARRO'] + "</td>");
                    $("#ResultTableData").append("<td scope='col'>" + data['automoveis'][i]['CAMBER_DIANTEIRO_MIN'] + "</td>");
                    $("#ResultTableData").append("<td scope='col'>" + data['automoveis'][i]['CAMBER_DIANTEIRO_MAX'] + "</td>");
                    $("#ResultTableData").append("<td scope='col'>" + data['automoveis'][i]['CASTER_DIANTEIRO_MIN'] + "</td>");
                    $("#ResultTableData").append("<td scope='col'>" + data['automoveis'][i]['CASTER_DIANTEIRO_MAX'] + "</td>");
                    $("#ResultTableData").append("<td scope='col'>" + data['automoveis'][i]['CONVERGENCIA_DIANTEIRA_MIN'] + "</td>");
                    $("#ResultTableData").append("<td scope='col'>" + data['automoveis'][i]['CONVERGENCIA_DIANTEIRA_MAX'] + "</td>");
                    $("#ResultTableData").append("<td scope='col'>" + data['automoveis'][i]['CAMBER_TRASEIRA_MIN'] + "</td>");
                    $("#ResultTableData").append("<td scope='col'>" + data['automoveis'][i]['CAMBER_TRASEIRA_MAX'] + "</td>");
                    $("#ResultTableData").append("<td scope='col'>" + data['automoveis'][i]['CONVERGENCIA_TRASEIRA_MIN'] + "</td>");
                    $("#ResultTableData").append("<td scope='col'>" + data['automoveis'][i]['CONVERGENCIA_TRASEIRA_MAX'] + "</td>");
                    $("#ResultTableData").append("</tr>");
                }
            }
        });
    }

    function getParameterByName(name) {
        // Função para obter parâmetros da URL
        var url = new URL(window.location.href);
        return url.searchParams.get(name);
    }
});
