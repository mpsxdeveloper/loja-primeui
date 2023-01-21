function validarNascimento(dia, mes, ano) {

   if(mes == 02 && dia > 29) {      
      return false;
   }
   if(ano % 4 != 0 && mes == 02 && dia == 29) {      
      return false;
   }
   if((mes == 04 || mes == 06 || mes == 09 || mes == 11) && dia == 31) {      
      return false;
   }
   else {
      return true;
   }

}

function validarEmail(entrada) {

   var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   var email = entrada;
   
      if(!regex.test(email.toLowerCase())) {         
         return false;
      }
      else {
         return true;
      } 
      
}

function validarSenha(entrada) {
   
   var regex = /^\w{6,20}$/;   
         
   if(!regex.test(entrada)) {      
      return false;
   }
   else {
      return true;
   }
           
}