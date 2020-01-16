$('#nombre-input').keyup(function(){
    var nombreValue = document.getElementById("nombre-input").value;
    document.getElementById("nombre-field").innerHTML = nombreValue;
})

$('#nombre-novia-input').keyup(function(){
    var nombreNoviaValue = document.getElementById("nombre-novia-input").value;
    document.getElementById("nombre-novia-field").innerHTML = nombreNoviaValue;
})

$('#nombre-novio-input').keyup(function(){
    var nombreNovioValue = document.getElementById("nombre-novio-input").value;
    document.getElementById("nombre-novio-field").innerHTML = nombreNovioValue;
})

$('#nombre-iglesia-input').keyup(function(){
    var nombreMisaValue = document.getElementById("nombre-iglesia-input").value;
    document.getElementById("nombre-iglesia-field").innerHTML = nombreMisaValue;
})

$('#nombre-fiesta-input').keyup(function(){
    var nombreFiestaValue = document.getElementById("nombre-fiesta-input").value;
    document.getElementById("nombre-fiesta-field").innerHTML = nombreFiestaValue;
})

$('#texto-1-input').keyup(function(){
    var texto1Value = document.getElementById("texto-1-input").value;
    document.getElementById("texto-1-field").innerHTML = texto1Value;

    var key = window.event.keyCode;
    if (key === 13) {
        document.getElementById("texto-1-input").value = document.getElementById("texto-1-input").value + "<br>\n";
    }
})

$('#papas-input').keyup(function(){
    var texto1Value = document.getElementById("papas-input").value;
    document.getElementById("papas-field").innerHTML = texto1Value;

    var key = window.event.keyCode;
    if (key === 13) {
        document.getElementById("papas-input").value = document.getElementById("papas-input").value + "\n<br>";
    }
})

$('#padrinos-input').keyup(function(){
    var texto1Value = document.getElementById("padrinos-input").value;
    document.getElementById("padrinos-field").innerHTML = texto1Value;

    var key = window.event.keyCode;
    if (key === 13) {
        document.getElementById("padrinos-input").value = document.getElementById("padrinos-input").value + "<br>\n";
    }
})

$('#dia-input').change(function(){
    var diaValue = document.getElementById("dia-input").value;
    document.getElementById("dia-field").innerHTML = diaValue;
})

$('#fecha-input').change(function(){
    var fechaValue = document.getElementById("fecha-input").value;
    var fechaFormat = new Date(fechaValue);

    var monthNames = [
        "Enero", "Febrero", "Marzo",
        "Abril", "Mayo", "Junio", "Julio",
        "Agosto", "Septiembre", "Octubre",
        "Noviembre", "Diciembre"
    ];
    var weekDays = [
        "Lunes", "Martes", "Miércoles", "Jueves",
        "Viernes", "Sábado", "Domingo"
    ];

    var diaSemana = weekDays[fechaFormat.getDay()];
    var day = (fechaFormat.getDate()) + 1;
    var monthIndex = fechaFormat.getMonth();

    var fechaFiesta = (diaSemana + ' ' + day + ' de ' + monthNames[monthIndex]);
    document.getElementById("fecha-field").innerHTML = fechaFiesta;
})

$('#hora-input').change(function () {
    var horaValue = document.getElementById("hora-input").value;
    document.getElementById("hora-field").innerHTML = horaValue;
})

$('#am-pm-input').change(function () {
    var ampmValue = document.getElementById("am-pm-input").value;
    document.getElementById("am-pm-field").innerHTML = ampmValue;
})

$('#hora-misa-input').change(function () {
    var horaMisaValue = document.getElementById("hora-misa-input").value;
    document.getElementById("hora-misa-field").innerHTML = horaMisaValue;
})

$('#am-pm-misa-input').change(function () {
    var ampmMisaValue = document.getElementById("am-pm-misa-input").value;
    document.getElementById("am-pm-misa-field").innerHTML = ampmMisaValue;
})

$('#hora-fiesta-input').change(function () {
    var horaFiestaValue = document.getElementById("hora-fiesta-input").value;
    document.getElementById("hora-fiesta-field").innerHTML = horaFiestaValue;
})

$('#am-pm-fiesta-input').change(function () {
    var ampmFiestaValue = document.getElementById("am-pm-fiesta-input").value;
    document.getElementById("am-pm-fiesta-field").innerHTML = ampmFiestaValue;
})

$('#direccion-1-input').keyup(function(){
    var direccion1Value = document.getElementById("direccion-1-input").value;
    document.getElementById("direccion-1-field").innerHTML = direccion1Value;

    var keyDireccion = window.event.keyCode;
    if (keyDireccion === 13) {
        document.getElementById("direccion-1-input").value = document.getElementById("direccion-1-input").value + "<br>\n";
    }
})

$('#direccion-iglesia-input').keyup(function(){
    var direccionMisaValue = document.getElementById("direccion-iglesia-input").value;
    document.getElementById("direccion-misa-field").innerHTML = direccionMisaValue;

    var keyDireccion = window.event.keyCode;
    if (keyDireccion === 13) {
        document.getElementById("direccion-iglesia-input").value = document.getElementById("direccion-iglesia-input").value + "<br>\n";
    }
})

$('#direccion-fiesta-input').keyup(function(){
    var direccionFiestaValue = document.getElementById("direccion-fiesta-input").value;
    document.getElementById("direccion-fiesta-field").innerHTML = direccionFiestaValue;

    var keyDireccion = window.event.keyCode;
    if (keyDireccion === 13) {
        document.getElementById("direccion-fiesta-input").value = document.getElementById("direccion-fiesta-input").value + "<br>\n";
    }
})

$('#texto-2-input').keyup(function(){
    var texto2Value = document.getElementById("texto-2-input").value;
    document.getElementById("texto-2-field").innerHTML = texto2Value;

    var keyTexto2 = window.event.keyCode;
    if (keyTexto2 === 13) {
        document.getElementById("texto-2-input").value = document.getElementById("texto-2-input").value + "<br>\n";
    }
})



$("#icono-size-input").change(function() {
    var iconoSize = document.getElementById("icono-size-input").value;
    $("#icono-field").css('width', (iconoSize) + "%");
});

$("#font-size-input").change(function() {
    var fontSize = document.getElementById("font-size-input").value;
    $(".invitation-template-aspect-ratio p.plantillas-textos").css('font-size', (fontSize)/3 + "px");
    $(".invitation-template-aspect-ratio p.plantillas-titulos").css('font-size', (fontSize)/2.5 + "px");
});

$("#title-size-input").change(function() {
    var titleFontSize = document.getElementById("title-size-input").value;
    $("#evento-field").css('font-size', (titleFontSize)/2 + "px");
});

$("#name-size-input").change(function() {
    var nameFontSize = document.getElementById("name-size-input").value;
    $("#nombre-field").css('font-size', (nameFontSize)/2 + "px");
});

$("#margin-input").change(function() {
    var marginSize = document.getElementById("margin-input").value;
    $(".invitation-content-aspect-ratio").css('padding-left', (marginSize)/2 + "px");
    $(".invitation-content-aspect-ratio").css('padding-right', (marginSize)/2 + "px");
});

$("#title-font-input").change(function () {
    var primaryFont = document.getElementById("title-font-input").value;
    $("#evento-field").css('font-family', "'" + primaryFont + "', cursive");
    $("#nombre-field").css('font-family', "'" + primaryFont + "', cursive");
    $("#nombre-novia-field").css('font-family', "'" + primaryFont + "', cursive");
    $("#nombre-novio-field").css('font-family', "'" + primaryFont + "', cursive");
});

$("#secondary-font-input").change(function () {
    var secondaryFont = document.getElementById("secondary-font-input").value;
    $(".invitation-template-aspect-ratio p.plantillas-textos").css('font-family', "'" + secondaryFont + "', sans-serif");
    $(".invitation-template-aspect-ratio p.plantillas-titulos").css('font-family', "'" + secondaryFont + "', sans-serif");
});


// $('#save-image').click(function(){
//     $("p.signature").removeClass('d-none').addClass('d-block');
//     domtoimage.toBlob(document.getElementById('invitation-template-aspect-ratio')).then(function (blob) {
//         window.saveAs(blob, 'mi-invitacion.png');
//         $("p.signature").removeClass('d-block').addClass('d-none');
//     });
// });

$('#save-image').click(function(){
    $("p.signature").removeClass('d-none').addClass('d-block');
    domtoimage.toJpeg(document.getElementById('invitation-template-aspect-ratio'), { quality: 1 }).then(function (dataUrl) {
        var link = document.createElement('a');
        link.download = 'mi-invitacion.jpg';
        $("p.signature").removeClass('d-block').addClass('d-none');
        link.href = dataUrl;
        link.click();
    });
});
