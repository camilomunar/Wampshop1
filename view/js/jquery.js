/* INICIO CODIGO DE MENU DESPLEGABLE*/

$(document).ready(function(){
	$(".menu").hide();
	$('.menu li:has(ul)').click(function(e){
		e.preventDefault();
		if($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
			
		}else{
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();		
		}
	});

	$('.menu li ul li a').click(function(){
		window.location.href = $(this).attr("href");
	});

	$(".despligue_menu").click(function(){
		$(".menu").slideToggle();
	});
	
	});/*FIN DEL MENU DESPREGABLE*/

	/* BOTON PARA INICIAR SESION */

$(document).ready(function(){

	$('#logear').click(function(e){
	e.preventDefault();
	$(".contact").delay().show();
	$('#login').slideToggle();

});

$('#registro').click(function(e){
	e.preventDefault();
	$(".contact").delay().show();
	$('#content').slideToggle();
	

});

$('.exit').click(function(e){
	e.preventDefault();
	$(".contact").hide();
	$('#content').slideToggle();
	$('#alert2').hide();

});

$(".cerrar").click(function(){
	$(".contact").delay(500).hide(1);	
	$('#login').slideUp(500);
	
});/* SE FINALZA CERRAR SESION*/

$(".zoom").mlens(
    {
        imgSrc: $(".zoom").attr("data-big"),   // path of the hi-res version of the image
        lensShape: "square",                // shape of the lens (circle/square)
        lensSize: 200,                  // size of the lens (in px)
        borderSize: 4,                  // size of the lens border (in px)
        borderColor: "#fff",                // color of the lens border (#hex)
        borderRadius: 0,                // border radius (optional, only if the shape is square)
        imgOverlay: $(".zoom").attr("data-overlay"), // path of the overlay image (optional)
        overlayAdapt: true // true if the overlay image has to adapt to the lens size (true/false)
	});
	
$(".imgemes img").click(function(){
var url = $(this).attr("src");
$(".imagen_princi .zoom").attr("src",url);
$(".imagen_princi .zoom").attr("data-big",url);

$(".zoom").mlens(
    {
        imgSrc: $(".zoom").attr("data-big"),   // path of the hi-res version of the image
        lensShape: "square",                // shape of the lens (circle/square)
        lensSize: 200,                  // size of the lens (in px)
        borderSize: 4,                  // size of the lens border (in px)
        borderColor: "#fff",                // color of the lens border (#hex)
        borderRadius: 0,                // border radius (optional, only if the shape is square)
        imgOverlay: $(".zoom").attr("data-overlay"), // path of the overlay image (optional)
        overlayAdapt: true // true if the overlay image has to adapt to the lens size (true/false)
    });
});

var precio =$(".totales").val();
$(".cant").change(function(){
var canti=	$(this).val();
var total = canti *precio;
$(".totales").val(total);






});
/* SI EL USUARIO DA CLIC EN UNA IMAGEN DE LIKE PEARA USAR LA LISTA DE DESEOS  GENERA UN MENSAJE*/
$(".manita").click(function(e){
	e.preventDefault();
	$(".contact").show();
	$(".alert").show();
	
});
$(".like").click(function(e){
	e.preventDefault();
	$(".contact").show();
	$(".alert").show();
	
});
//si el usuario de click en la x se sierra el div de alert 
$(".xerrar").click(function(){
	
	$(".contact").hide();
	$(".alert").hide();
	
});

//si el usuario decide iniciar session y da click e iniciar aparacera el div de iniciar sesion y se cerrar el div de alert
$('#iniciar').click(function(e){
	e.preventDefault();
	$(".alert").hide();
	$('#login').slideDown(500);
});
// si el usuario decide registrarse dara clic en registro ///


$("#registrar").click(function(e){
	e.preventDefault();
	$(".alert").hide();
	$('#content').slideDown(500);
});
// cunado le click en los carritos y las manitos

$('.carritos').click(function(e){
	e.preventDefault();
	$(".contact").show();
	$(".alert").show();
});
$('.carrito').click(function(e){
	e.preventDefault();
	$(".contact").show();
	$(".alert").show();
});




});

//ALERTAS DE INICIAR SESION

$(document).ready(function(){
	
$("#validar").click(function(e){
	
var ajax;
if(window.XMLHttpRequest){
	ajax = new XMLHttpRequest();

}
	ajax.onreadystatechange=function(){
	if(ajax.readyState == 4&& ajax.status ==200){

		 contenido = ajax.responseText;
		
		 	 if(contenido !== ""){
			 $("#alert").animate({top: "10px"}).html(contenido);
			 validar(false);
		 
			
			}else {
				validar(true);
			}
	
	}

};

	
ajax.open("POST", "Logear.php", true);
ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
ajax.send()
hola();
e.preventDefault();

});

});



function validar(dato){
 if(dato==false){
	function hola (){
		console.log("hola");
	}
	
	
 }else{
  console.log("hola2");
 }
}


//Registro 
/* SE TOMA LAS  ETIQUETAS A COMO MENU PARA REGISTRO */


var P3=document.getElementById("P3"); 
var P2=document.getElementById("P2");
var P1=document.getElementById("P1");


/* BOTONES DE REGRESAR Y SIGUIENTE DATOS BASICOS*/
var regresar=document.getElementById("regresar");
var siguiente=document.getElementById("siguiente");

/*BOTONES DEL SEGUNDO CONTENEDOR DATOS DE ENVIO*/
var regresar2=document.getElementById("regresar2");
var atras2=document.getElementById("atras2");
var siguiente2=document.getElementById("siguiente2");

/*BOTONES DEL TERCER CONTENEDOR PERFIL USUARIO*/
var SubirB=document.getElementById("SubirB");
var regresar3=document.getElementById("regresar3");
var atras3=document.getElementById("atras3");
var aceptar=document.getElementById("aceptar");



/* SE TOMA LOS DIV CONTENEDORES DEL FORMU8LARIO*/
var Primero=document.getElementById("Primer"); /*paso 1*/
var Segundo=document.getElementById("Segundo"); /*PASO 2*/
var Tercera=document.getElementById("Tercera"); /*PASO 3*/


/* CUANDO SE OPRIME UNA ETIQUETA A SE GENERA UN EVENTO Y ESTE EVENTO TIENE UNA FUNCION*/
P3.addEventListener("click", mostrar);
P2.addEventListener("click", mostrar2);
P1.addEventListener("click", mostrar3);
/* SIGUIENTE PARA PASAR AL SEGUNDO DIV*/

/*BOTONES DEL SEGUNDO CONTENEDOR*/

atras2.addEventListener("click", cambiar4);
/*BOTONES DEL TERCER CONTENEDOR*/
regresar3.addEventListener("click", cambiar5);

function mostrar(){
   Primero.style.zIndex="1";
   Segundo.style.zIndex="1";
   Tercera.style.zIndex="3";
   P3.style.background =" #207ce5";
   P2.style.background= "#5d6d7e";
   P1.style.background= " #5d6d7e ";
}

function mostrar2(){
   Primero.style.zIndex="1";
   Segundo.style.zIndex="3";
   Tercera.style.zIndex="1";
   P2.style.background=" #207ce5";
   P3.style.background= " #5d6d7e ";
   P1.style.background= " #5d6d7e ";
}

function mostrar3(){
   Primero.style.zIndex="3";
   Segundo.style.zIndex="1";
   Tercera.style.zIndex="1";
   P1.style.background=" #207ce5";
   P2.style.background= " #5d6d7e ";
   P3.style.background= " #5d6d7e ";
}

function cambiar(){
	regresar.style.background="#ecf0f1";
	siguiente.style.background="#207ce5";

}
 

function cambiar4(){
   
   mostrar3();
}

function cambiar5(){
   
   Primero.style.zIndex="1";
   Segundo.style.zIndex="3";
   Tercera.style.zIndex="1";
   P1.style.background="#5d6d7e";
   P2.style.background="#207ce5";
   P3.style.background="#5d6d7e";
}
/* MOSTRAR IMAGEN */
 function init() {
 var inputFile = document.getElementById('documento');
 inputFile.addEventListener('change', mostrarImagen, false);
}

function mostrarImagen(event) {

 var file = event.target.files[0];
 var reader = new FileReader();
 reader.onload = function(event) {
   var img = document.getElementById('img');
   img.src= event.target.result;
 }
 reader.readAsDataURL(file);
}



/*  -------------------------------------------------------------------------------------------------------------
----------------------------------------------------VALIDACION DE CONTRASEÑAS------------------------------------
-----------------------------------------------------------------------------------------------------------------*/

window.addEventListener('load', init, false);

$(document).ready(function(){

$("#aceptar").click(function(){
 var Password = $("#Password").val();
 var Confirmacion = $("#Confirmacion").val();

 if (Password != Confirmacion) {
	 $("#Confirmacion").focus().css({"border":"solid 1px red"}).attr("placeholder","Contraseñas no coinciden").val("");
   alert("Las contraseñas no coinciden");
	 return false;
 }else{
   
 }
});

/*--------------------------------------------------------------------------------------------------------------------
----------------------------------OJO PARA PODER VER LAS CONTRASEÑA---------------------------------------------------
----------------------------------------------------------------------------------------------------------------------*/


$(".eyes").click(function(){
 var contenido = $(this).attr("src");

 if(contenido=="imagenes/eye.png"){
   $(".Campo12").attr("type","Password");
   $(".Campo13").attr("type","Password");
   $(".eyes").attr("src","imagenes/eye-slash.png");
	
	
   
 }else{
   $(".Campo12").attr("type","text");
   $(".Campo13").attr("type","text");
   $(".eyes").attr("src","imagenes/eye.png");



 }
});

/* VALIDACION DE DATOS PRIMER FORMULARIO*/
$("#siguiente").click(function(){
var nombre= $("#nombre").val();
var apellidos = $("#apellidos").val();
var numero = $("#numero").val();
var tipo = $("#tipo").val();
var genero = $("#genero").val();


 if($("#nombre").val()==""|| $("#apellidos").val()==""||$("#numero").val()==""){
   $("#alert2").html("faltan datos valida por favor").css({"display":"block"}).animate({
	 top:"120px"
	 }),5000;
   
 }else if(isNaN($("#numero").val())){
	$("#alert2").html("Digite solo numeros").css({"display":"block"}).animate({
		top:"120px"
	 }),5000;
   }else if (nombre.length<3) {
	 $("#alert2").html("Le faltan caracteres al nombre").css({"display":"block"}).animate({
	    top:"120px"
	 }),5000;
   }else if (apellidos.length<4) {
	$("#alert2").html("Le faltan caracteres a los apellidos").css({"display":"block"}).animate({
	    top:"120px"
	 }),5000;
  }else if (numero,length>10) {
   $("#alert2").html("Le faltan caracteres al documento").css({"display":"block"}).animate({
	top:"120px"
	 }),5000;
 }else if (tipo == "Seleccione una opcion" || genero == "Seleccione una opcion") {
   $("#alert2").html("Llene los campos que faltan").css({"display":"block"}).animate({
	top:"120px"
   }),5000;

}else{
   $("#alert2").html("faltan datos valida por favor").css("display","none");
   $("#alert2").html("faltan datos valida por favor").css("display","none");
   mostrar2();
 }

});

$("#siguiente2").click(function(){
 var Correo = $("#Correo").val();
 var telefono = $("#telefono").val();
 var direccion = $("#direccion").val();
 var Departamentos = $("#Departamentos").val();
 var ciudad = $("#ciudad").val();
 var expresion = /\w+@\w+\.+[a-z]/;

 if ($("#Correo").val()==" "|| $("#telefono").val() =="" || $("#direccion").val() =="" || $("#Departamentos").val() =="" || $("#ciudad").val() =="") {
   $("#alert2").html("rellene los campos que faltan").css({"display":"block"}).animate({
	top:"120px"
   }),5000;
 }else if (isNaN($("#telefono").val())) {
   $("#alert2").html("El telefono debe tener solo numeros").css({"display":"block"}).animate({
	top:"120px"
   }),5000;
 }else if (!expresion.test(Correo)) {
   $("#alert2").html("El correo no es valido").css({"display":"block"}).animate({
	top:"120px"
   }),5000;

 }else if (telefono.length<7) {
   $("#alert2").html("Le faltan caracteres al telefono").css({"display":"block"}).animate({
	top:"120px"
   }),5000;
 }else if (direccion.length<4) {
   $("#alert2").html("Faltan caracteres en direccion").css({"display":"block"}).animate({
	top:"120px"
   }),5000;
 }else if (Departamentos.length<4) {
   $("#alert2").html("Faltan caracteres en el departamento").css({"display":"block"}).animate({
	top:"120px"
   }),5000;
 }else if (ciudad.length<4) {
   $("#alert2").html("Faltan caracteres en ciudad").css({"display":"block"}).animate({
	top:"120px"
   }),5000;

   }else{
	 $("#alert2").html("faltan datos valida por favor").css("display","none");
	 mostrar();

   }

});

});