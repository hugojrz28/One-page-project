var tabInicio = 1;
var actual = 1;
$(document).on('ready', main);

function main () {
    var intervalo = setInterval("runSlider()", 4000);

    $("#menu a").on("click", goTo);
    $(window).scroll(scrollMenu);

    $("#tabs a").on("click", goTab);
    $(".content-tabs").eq(tabInicio -1).fadeIn();
    $("#tabs a").eq(tabInicio -1).addClass("tabActive");
    $("#btn-submit").on("click", valida);
}

function runSlider(){
    if (actual == $("#container-slider img").size()) {
        actual = 0;
    }
    $("#container-slider").animate({
        marginLeft: (-1*actual*$("#container-slider img").eq(0).width())
    }, 700);
    actual++;
}

function goTo(){
    var seccion = $(this).attr("href");
    $("body, html").animate({
        scrollTop: $(seccion).offset().top-120
    }, 1200);
    return false;
}

function scrollMenu(){
    var secciones = [ $("#home").offset().top, $("#nosotros").offset().top, $("#servicios").offset().top, $("#proyectos").offset().top, $("#contacto").offset().top, $("body").height()];

    if ($(this).scrollTop() > 0){
        $("#header-wrapper").css({"box-shadow": "0px 3px 10px rgba(0,0,0,0.7)"}, 800);
    }else{
        $("#header-wrapper").css({"box-shadow": "none"});
    }

    if ($(this).scrollTop() > secciones[0]-130 && $(this).scrollTop() < secciones[1]-130) {
        $("#menu a").eq(0).addClass("seleccionado");
    } else {
        $("#menu a").eq(0).removeClass("seleccionado");
    };

    if ($(this).scrollTop() > secciones[1]-130 && $(this).scrollTop() < secciones[2]-130) {
        $("#menu a").eq(1).addClass("seleccionado");
    } else {
        $("#menu a").eq(1).removeClass("seleccionado");
    };

    if ($(this).scrollTop() > secciones[2]-130 && $(this).scrollTop() < secciones[3]-130) {
        $("#menu a").eq(2).addClass("seleccionado");
    } else {
        $("#menu a").eq(2).removeClass("seleccionado");
    };

    if ($(this).scrollTop() > secciones[3]-130 && $(this).scrollTop() < secciones[4]-130) {
        $("#menu a").eq(3).addClass("seleccionado");
    } else {
        $("#menu a").eq(3).removeClass("seleccionado");
    };

    if ($(this).scrollTop() > secciones[4]-130 && $(this).scrollTop() < secciones[5]-130) {
        $("#menu a").eq(4).addClass("seleccionado");
    } else {
        $("#menu a").eq(4).removeClass("seleccionado");
    };

    if ($(this).scrollTop() > secciones[5]-130 && $(this).scrollTop() < secciones[6]-130) {
        $("#menu a").eq(5).addClass("seleccionado");
    } else {
        $("#menu a").eq(5).removeClass("seleccionado");
    };
}

function goTab(){
    $(".content-tabs").hide();
    $("#tabs a").removeClass("tabActive");
    $(".content-tabs").eq($(this).index()).fadeIn();
    $(this).addClass("tabActive");
    return false;
}

function valida(){
    $("#frmContacto").validate({
        rules:{
            "nombre"      : {required:true},
            "email"       : {
                required:true,
                email: true
            },
            "titulo"      : {required:true},
            "comentarios" : {required:true}
        },
        messages:{
            "nombre"      : {required :"Obligatorio"},
            "email"       : {
                required :"Obligatorio",
                email :"Cuenta no valida"
            },
            "titulo"      : {required :"Obligatorio"},
            "comentarios" : {required :"Obligatorio"}
        },
        submitHandler: function(){
            var data = $("#frmContacto").serialize();
            alert(data);
        }
    });

}