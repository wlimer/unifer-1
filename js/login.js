document.getElementById("btn-registrar").addEventListener("click",register);
document.getElementById("btn-iniciarSesion").addEventListener("click",iniciarSesion);

var contenedor_login_register=document.querySelector(".contenedor__login-register");
var formulario_login=document.querySelector(".formulario__login");
var formulario_register=document.querySelector(".formulario__register");
var caja_trasera_login=document.querySelector(".box__back-login");
var caja_trasera_register=document.querySelector(".box__back-register");

function iniciarSesion(){

    if(window.innerWidth > 850){
        formulario_register.style.display = "none";
        contenedor_login_register.style.left ="10px";
        formulario_login.style.display="block";
        caja_trasera_register.style.opacity="1";
        caja_trasera_login.style.opacity="0";
    }
    else{
        formulario_register.style.display = "none";
        contenedor_login_register.style.left ="0px";
        formulario_login.style.display="block";
        caja_trasera_register.style.opacity="block";
        caja_trasera_login.style.opacity="none";
    }

}

function register(){
    if(window.innerWidth> 850){
        formulario_register.style.display = "block";
        contenedor_login_register.style.left ="410px";
        formulario_login.style.display="none";
        caja_trasera_register.style.opacity="0";
        caja_trasera_login.style.opacity="1";
    }
    else{
        formulario_register.style.display = "block";
        contenedor_login_register.style.left ="0px";
        formulario_login.style.display="none";
        caja_trasera_register.style.opacity="none";
        caja_trasera_login.style.opacity="1";
    }


}

function validar(){
    var nombre,correo,apellido, telefono, contraseña, contraseña2, expresion;
    nombre= document.getElementById("nombre").value;
    nombre= document.getElementById("apellido").value;
    correo= document.getElementById("correo").value;
    telefono= document.getElementById("telefono").value;
    contraseña= document.getElementById("contraseña").value;
    contraseña2= document.getElementById("contraseña2").value;

    expresion = /\w+@\w+\.+[a-z]/;

    if(nombre==="" ||apellido===""|| correo==="" || telefono==="" || contraseña=== "" || contraseña2=== "" ){
        alert("Uno de los campos esta vacio");
        return false;
    }
    else if(nombre.length>40){
        alert("El nombre NO debe llevar mas de 30 caracteres");
        return false;
    }
    else if(correo.length>30){
        alert("El correo NO debe llevar mas de 30 caracteres");
        return false;
    }
    else if(isNaN(telefono)){
        alert("Solo se deben ingresar numeros en el campo telefono");
        return false;
    }
    else if(telefono.length>10){
        alert("El numero de telefono no debe llevar mas de 10 digitos");
        return false;
    }
    else if(contraseña !== contraseña2){
        alert("Las contraseñas no coinciden");
        return false;
    }
    else if(contraseña.length<6){
        alert("Las contraseñas DEBE DE SER MAYOR A 6 DIGITOS");
        return false;
    }
    else if(contraseña.length>10){
        alert("Las contraseñas no DEBE DE SER MAYOR A 10 DIGITOS");
        return false;
    }



}

function validarLogin(){
    var nombre,correo,apellido, telefono, contraseña, contraseña2, expresion;

    correo= document.getElementById("emausu").value;
    contraseña= document.getElementById("pasusu").value;
    

    expresion = /\w+@\w+\.+[a-z]/;

    if(correo==="" || contraseña=== "" ){
        alert("Uno de los campos esta vacio");
        return false;
    }

    else if(correo.length>30){
        alert("El correo NO debe llevar mas de 30 caracteres");
        return false;
    }

    // else if(!expresion.test(correo)){
    //     alert("El correo no es valido");
    //     return false;
    // }

    else if(telefono.length>10){
        alert("El numero de telefono no debe llevar mas de 10 digitos");
        return false;
    }
    
    else if(contraseña.length<6){
        alert("Las contraseñas DEBE DE SER MAYOR A 6 DIGITOS");
        return false;
    }
    else if(contraseña.length>10){
        alert("Las contraseñas no DEBE DE SER MAYOR A 10 DIGITOS");
        return false;
    }

    $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
     });

}




