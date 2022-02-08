/*
*** Calculo das categorias ***
*/
// Variáveis
var notaAnimacao = 0;
var notaEnredo = 0;
var notaRoteiro = 0;

var pesoAnimacao = 3;
var pesoEnredo = 3;
var pesoRoteiro = 4;

function catchValorCategorias() {
    for (var i = 0; i < document.getElementsByTagName('select').length; i++) {
        switch (document.getElementsByTagName('select')[i].id) {
            case 'notaAnimacao':
                notaAnimacao = parseInt(document.getElementsByTagName('select')[i].value);
                break;
            case 'notaEnredo':
                notaEnredo = parseInt(document.getElementsByTagName('select')[i].value);
                break;
            case 'notaRoteiro':
                notaRoteiro = parseInt(document.getElementsByTagName('select')[i].value);
                break;
            default:
                alert('Criar outra variável com ID: ' + document.getElementsByTagName('select')[i].id + '.');
                break;
        }
    }
}

function resetValorCategorias() {
    for (var i = 0; i < document.getElementsByTagName('select').length; i++) {
        document.getElementsByTagName('select')[i].value = '0';
    }
}

var camposVazios = 0;

function verifyValorCategorias() {
    for (var i = 0; i < document.getElementsByTagName('select').length; i++) {
        switch (document.getElementsByTagName('select')[i].value) {
            case '0':
                camposVazios += 1
                break;
            default:
                camposVazios += 0
                break;
        }
    }
}

function calculo() {
    verifyValorCategorias();
    switch (camposVazios) {
        case 0:
            catchValorCategorias()
            var notaFinal = (notaAnimacao * pesoAnimacao + notaEnredo * pesoEnredo + notaRoteiro * pesoRoteiro) / 10;
            document.getElementById('resultado').value = notaFinal;
            resetValorCategorias();
            break;
        default:
            $(document).ready(function(){
                $("#selectOneEach").modal();
            });
            camposVazios = 0;
            break;
    }
}

function reset() {
    document.getElementById('resultado').value = '';
    resetValorCategorias();
}

// Pop-overs
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});