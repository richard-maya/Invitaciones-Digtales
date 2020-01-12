$('#nombre-input').keyup(function(){
    var nombreValue = document.getElementById("nombre-input").value;
    document.getElementById("nombre-field").innerHTML = nombreValue;
})

$('#texto-1-input').keyup(function(){
    var texto1Value = document.getElementById("texto-1-input").value;
    document.getElementById("texto-1-field").innerHTML = texto1Value;

    var key = window.event.keyCode;
    if (key === 13) {
        document.getElementById("texto-1-input").value = document.getElementById("texto-1-input").value + "<br>\n";
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

$('#direccion-1-input').keyup(function(){
    var direccion1Value = document.getElementById("direccion-1-input").value;
    document.getElementById("direccion-1-field").innerHTML = direccion1Value;

    var keyDireccion = window.event.keyCode;
    if (keyDireccion === 13) {
        document.getElementById("direccion-1-input").value = document.getElementById("direccion-1-input").value + "<br>\n";
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
    $("#texto-1-field").css('font-size', (fontSize)/2 + "px");
    $("#fecha-y-hora-field").css('font-size', (fontSize)/2 + "px");
    $("#direccion-1-field").css('font-size', (fontSize)/2 + "px");
    $("#texto-2-field").css('font-size', (fontSize)/2 + "px");
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
});

$("#secondary-font-input").change(function () {
    var secondaryFont = document.getElementById("secondary-font-input").value;
    $("#texto-1-field").css('font-family', "'" + secondaryFont + "', sans-serif");
    $("#fecha-y-hora-field").css('font-family', "'" + secondaryFont + "', sans-serif");
    $("#direccion-1-field").css('font-family', "'" + secondaryFont + "', sans-serif");
    $("#texto-2-field").css('font-family', "'" + secondaryFont + "', sans-serif");
});


// $('#save-image').click(function(){
//     $("p.signature").removeClass('d-none').addClass('d-block');
//     domtoimage.toBlob(document.getElementById('invitation-template-aspect-ratio')).then(function (blob) {
//         window.saveAs(blob, 'mi-invitacion.png');
//         $("p.signature").removeClass('d-block').addClass('d-none');
//     });
// });

// TODO: Update invitaciones.js

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
