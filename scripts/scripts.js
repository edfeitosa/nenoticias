/* calcula diferença de datas */
function unidadeTempo (dataTexto, unidade) {
    moment.locale('pt-br');
    var dataAtual = new Date();
    var data1 = moment(dataTexto, 'DD/MM/YYYY HH:mm:ss');
    var data2 = moment(dataAtual, 'DD/MM/YYYY HH:mm:ss');
    return data2.diff(data1, unidade);
}

function formatarTempo (dataTexto) {
    /* 60 segundos - 1 minutos
    3600 segundos - 1 hora
    86400 segundos - 1 dia
    2592000 segundos - 1 mês
    31536000 segundos - 1 ano */
    var segundos = this.unidadeTempo(dataTexto, "seconds");
    if (segundos <= 59) {
        return ((segundos > 1) ? segundos + " seg atrás" : segundos + " seg atrás");
    } else if (segundos >= 60 && segundos <= 3599) {
        var minutos = this.unidadeTempo(dataTexto, "minutes");
        return ((minutos > 1) ? minutos + " min atrás" : minutos + " min atrás");
    } else if (segundos >= 3600 && segundos <= 86399) {
        var horas = this.unidadeTempo(dataTexto, "hours");
        return ((horas > 1) ? horas + " horas atrás" : horas + " hora atrás");
    } else if (segundos >= 86400 && segundos <= 2591999) { 
        var dias = this.unidadeTempo(dataTexto, "days");
        return ((dias > 1) ? dias + " dias atrás" : dias + " dia atrás");
    } else if (segundos >= 2592000 && segundos <= 31535999) { 
        var meses = this.unidadeTempo(dataTexto, "months");
        return ((meses > 1) ? meses + " meses atrás" : meses + " mês atrás");
    } else if (segundos >= 31536000) { 
        var anos = this.unidadeTempo(dataTexto, "years");
        return ((anos > 1) ? anos + " anos atrás" : anos + " ano atrás");
    }
}

function exibirTempo (dataTexto = "", div = "") {
    setInterval(function() {
        jQuery(div).html(this.formatarTempo(dataTexto));
    }, 1000);
}