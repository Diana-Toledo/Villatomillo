
function validarCodtxt(nombre,idspan){
    var name = document.getElementById(nombre).value;
    name = name.trim();

    if(name.length < 2) {
      
      document.getElementById(idspan).classList.add('error')
      document.getElementById(idspan).innerHTML="debe tener más caracteres"
      

    }
    else{
      document.getElementById(idspan).classList.remove("error")
      document.getElementById(idspan).innerHTML="";
      
    }
  }

  
/*function validarDni() {

  var dni = document.getElementById('dni').value;
  if (dni.length > 9 || dni.length <9) {
      document.getElementById('snumero').classList.add("error");
      document.getElementById('snumero').innerHTML = "introduzca D.Identidad valido";
  }
  else {
      document.getElementById('snumero').classList.remove("error");  //elimina el error
      document.getElementById('snumero').innerHTML = "";             // lo deja en blanco
  }
}*/

function validarDni() {
  var docId = document.getElementById('dni').value;
  if ((/^\d{8}[a-zA-Z]$/.test(docId))) {
   
    //Se separan los números de la letra
    var letraDNI = docId.substring(8, 9).toUpperCase();
    var numDNI = parseInt(docId.substring(0, 8));

    //Se calcula la letra correspondiente al número
    var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
    var letraCorrecta = letras[numDNI % 23];

    if (letraDNI != letraCorrecta) {
      document.getElementById('iniciar').disabled = true;
      alert("Has introducido una letra incorrecta");
    }
  }
  else if (!(/^[XxTt]{1}[0-9]{7}[a-zA-Z]{1}$/.test(docId))){
    alert ("Error dni / nie")
  }
  else {
    document.getElementById(id_input).classList.remove("error")
    document.getElementById(id_span).innerHTML = "";
    document.getElementById(enviar).disabled = false;
  }
 
}

var ok = true;
 


function validarF(id) {
 fecha = document.getElementById(id).value;
 //alert(fecha);
 fecha_sep= fecha.split('-');
  a=fecha_sep[0];
  m=fecha_sep[1];
  d=fecha_sep[2];

  if ((a < 1950) || (a > 2050) || (m < 1) || (m > 12) || (d < 1) || (d > 31)){
    ok = alert("fecha invalida");
  }
    else {
     if ((a % 4 != 0) && (m == 2) && (d > 28)){

      document.getElementById('scumple').disabled=true;
      ok = alert("fecha bisiesto");
     } 
     else{

      if ((((m == 4) || (m == 6) || (m == 9) || (m == 11)) && (d > 30)) || ((m == 2) && (d > 29))){
        document.getElementById().disabled=true;
        ok = alert("fecha no es valida");
      }
     }
    }
}



