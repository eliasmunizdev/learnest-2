//Animar flecha
function flecha() {
    $(".flecha-anim").addClass("anima");
}

function flecha2() {
    $(".flecha-anim").removeClass("anima");
}

$(window).scroll(function() {
    var nav = $('#sticky_side_nav ');
    var top = 400;
    if ($(window).scrollTop() >= top) {

        nav.addClass('fixed-nav');

    } else {
        nav.removeClass('fixed-nav');
    }
});

$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
        $(".wapp-pos").css("background", "transparent");
        $(".wapp-pos > img").css("filter", "invert(0.65)");
       
    }
   else {
       $(".wapp-pos").css("background", "#393b59");
       $(".wapp-pos > img").css("filter", "invert(0)");
    }
});


/* ===================== Validación formulario ================== */
function validar() {
    var txt_correcto = "";
    var txt = "";
    var txt2 = "";
    var txt3 = "";
    var txt4 = "";
    var txt5 = "";
    var txt_dinero = "";
    var submit = 0;

    // Elementos
    var dni = document.getElementById("dni").value;
    var email = document.getElementById("email").value;
    var celular = document.getElementById("celular").value;
    var laboral = document.getElementById("laboral").selectedIndex;
    var dinero = document.getElementById("dinero").selectedIndex;


    //Formato Mail
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    //Formaro número de celular
    var celformat = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

    // Validación DNI
    if (dni < 3000000 ||dni > 50000000) {
        txt = "Ingrese un DNI válido";
        document.getElementById("dniValid").innerHTML = txt;
        document.getElementById("dniValid").style.color = "#bb0811";
        document.getElementById("dniValidmob").innerHTML = txt;
        document.getElementById("dniValidmob").style.color = "#bb0811";
        submit = 1;
    } else {
        txt_correcto = "Correcto!";
        document.getElementById("emailValid").innerHTML = txt_correcto;
        document.getElementById("emailValid").style.color = "#333";
        document.getElementById("emailValidmob").innerHTML = txt_correcto;
        document.getElementById("emailValidmob").style.color = "#333";
    }

    // Validación Dinero
    if (dinero < 1000 || dinero > 50000) {
        txt_dinero = "Ingrese un monto entre 1.000 y 50.000";
        document.getElementById("dniValid").innerHTML = txt_dinero;
        document.getElementById("dniValid").style.color = "#bb0811";
        document.getElementById("dniValidmob").innerHTML = txt_dinero;
        document.getElementById("dniValidmob").style.color = "#bb0811";
        submit = 1;
    } else {
        txt_correcto = "Correcto!";
        document.getElementById("emailValid").innerHTML = txt_correcto;
        document.getElementById("emailValid").style.color = "#333";
        document.getElementById("emailValidmob").innerHTML = txt_correcto;
        document.getElementById("emailValidmob").style.color = "#333";
    }

    // Validación email
    if(!email.match(mailformat)){
        txt2 = "Ingrese un email válido";
        document.getElementById("emailValid").innerHTML = txt2;
        document.getElementById("emailValid").style.color = "#bb0811";
        document.getElementById("emailValidmob").innerHTML = txt2;
        document.getElementById("emailValidmob").style.color = "#bb0811";
        submit = 1;
    } else {
        txt_correcto = "Correcto!";
        document.getElementById("emailValid").innerHTML = txt_correcto;
        document.getElementById("emailValid").style.color = "#333";
        document.getElementById("emailValidmob").innerHTML = txt_correcto;
        document.getElementById("emailValidmob").style.color = "#333";
    }

    // Validación número
    if(!celular.match(celformat)){
        txt3 = "Ingrese un número válido";
        document.getElementById("nroValid").innerHTML = txt3;
        document.getElementById("nroValid").style.color = "#bb0811";
        document.getElementById("nroValidmob").innerHTML = txt3;
        document.getElementById("nroValidmob").style.color = "#bb0811";
        submit = 1;
    } else {
        txt_correcto = "Correcto!";
        document.getElementById("nroValid").style.color = "#333";
        document.getElementById("nroValid").innerHTML = txt_correcto;
        document.getElementById("nroValidmob").style.color = "#333";
        document.getElementById("nroValidmob").innerHTML = txt_correcto;
    }

    // Validación laboral
    if(laboral == 0){
        txt4 = "Elija una opción";
        document.getElementById("laboralValid").innerHTML = txt4;
        document.getElementById("laboralValid").style.color = "#bb0811";
        document.getElementById("laboralValidmob").innerHTML = txt4;
        document.getElementById("laboralValidmob").style.color = "#bb0811";
        submit = 1;
    } else {
        txt_correcto = "Correcto!";
        document.getElementById("laboralValid").style.color = "#333";
        document.getElementById("laboralValid").innerHTML = txt_correcto;
        document.getElementById("laboralValidmob").style.color = "#333";
        document.getElementById("laboralValidmob").innerHTML = txt_correcto;
    }

    
    // Validación provincia
    if(laboral == 0){
        txt5 = "Elija una provincia";
        document.getElementById("provinciaValid").innerHTML = txt5;
        document.getElementById("provinciaValid").style.color = "#bb0811";
        document.getElementById("provinciaValidmob").innerHTML = txt5;
        document.getElementById("provinciaValidmob").style.color = "#bb0811";
        submit = 1;
    } else {
        txt_correcto = "Correcto!";
        document.getElementById("provinciaValid").style.color = "#333";
        document.getElementById("provinciaValid").innerHTML = txt_correcto;
        document.getElementById("provinciaValidmob").style.color = "#333";
        document.getElementById("provinciaValidmob").innerHTML = txt_correcto;
    }

    if (submit == 0) {
        document.getElementById("formulario").submit();
    }
}