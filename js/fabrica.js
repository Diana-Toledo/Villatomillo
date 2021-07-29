function validarNombre(){
 
     var n_f = document.getElementById('n_fabri').value;
     if(n_f.length < 2){
       
       document.getElementById('nameInfo').classList.add('error')
       document.getElementById('nameInfo').innerHTML="debe tener más caracteres"
     }
     else{
       document.getElementById('nameInfo').classList.remove("error")
       document.getElementById('nameInfo').innerHTML=""
     }

}
// document.getElementById('n_fabri').onblur = validarNombre;


