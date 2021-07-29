
function validarPromo(){
 
    var n_p = document.getElementById('promoNom').value;
    //alert (n_p);
    if(n_p.length < 3){
      
      document.getElementById('nameInfop').classList.add('error')
      document.getElementById('nameInfop').innerHTML="debe tener más caracteres"
    }
    else{
      document.getElementById('nameInfop').classList.remove("error")
      document.getElementById('nameInfop').innerHTML=""
    }

}


function validarFecha(){
 
    var n_f = document.getElementById('fpromo').value;
    var patron = /^[0-9]+$/;
 
    //alert (n_f);

    if(n_f.length != 4){
       
      document.getElementById('nameInfof').classList.add('error')
      document.getElementById('nameInfof').innerHTML="debe tener más caracteres"
    }

   
    else if( n_f <1920 || n_f >= 2019){ //buscar funcion de año real
      //alert(n_f);
      document.getElementById('nameInfof').classList.add('error')
      document.getElementById('nameInfof').innerHTML="indique una fecha valida"

    }
    else if(!patron.test(n_f)){
      document.getElementById('nameInfof').classList.add('error')
      document.getElementById('nameInfof').innerHTML="indique solo numeros"
    }

    
    else{
      document.getElementById('nameInfof').classList.remove("error")
      document.getElementById('nameInfof').innerHTML=""
    }

}




