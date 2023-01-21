$(document).ready(function() { 
   
   $('#my_fieldset').puifieldset(); 
   $('#nome_cad').puiinputtext();
   $('#nome_msg').puimessages();
   $('#email_cad').puiinputtext();
   $('#email_cad_msg').puimessages();
   $('#confirma_email_cad').puiinputtext();
   $('#confirma_email_cad_msg').puimessages();
   $('#senha_cad').puipassword(
      {
         promptLabel: 'Escolha uma senha forte',
         weakLabel: 'Senha fraca',
         mediumLabel: 'Senha média',
         strongLabel: 'Senha forte'
      }
   );
   $('#senha_msg').puimessages();
   $('#dia_cad').puidropdown();
   $('#mes_cad').puidropdown();
   $('#ano_cad').puidropdown();
   $('#aniversario_msg').puimessages();  
   $('#cadastro_msg').puimessages();        
           
   $('#cadastro').puibutton({
      icon: 'fa-save',
      iconPos: 'right'
   });
   
   $("#cadastro").click(function() {
      
      var nascimento = $("#ano_cad").val() + '/' + $("#mes_cad").val() + '/' + $("#dia_cad").val(); 
      
      if($("#nome_cad").val().trim() == "") {
         $('#nome_msg').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Informe o nome'});    
         $("#nome_cad").focus();
         return;
      }
      if($("#email_cad").val().trim() == "") {
         $('#email_cad_msg').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Informe o e-mail'});    
         $("#email_cad").focus();
         return;
      }
      if($("#confirma_email_cad").val().trim() == "") {
         $('#confirma_email_cad_msg').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Confirme o e-mail'});    
         $("#confirma_email_cad_msg").focus();
         return;
      }
      if($("#email_cad").val().trim().toLowerCase() != $("#confirma_email_cad").val().trim().toLowerCase()) {
         $('#confirma_email_cad_msg').puimessages('show', 'warn', {summary: 'Aviso', detail: 'E-mail\'s não conferem'});    
         return; 
      }
      if(validarEmail($("#email_cad").val().trim().toLowerCase()) == false) {
         $('#email_cad_msg').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Formato de e-mail inválido'});    
         return; 
      }
      if(validarEmail($("#confirma_email_cad").val().trim().toLowerCase()) == false) {
         $('#confirma_email_cad_msg').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Formato de e-mail inválido'});    
         return;
      }
      if(validarSenha($("#senha_cad").val()) == false) {
         $('#senha_msg').puimessages('show', 'warn', {summary: 'Aviso', detail: 'A senha deve ter entre 6 e 20 caracteres'});    
         return;
      }
      if($("#dia_cad").val().trim() == "") {
         $('#aniversario_msg').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Informe o dia'});    
         return;
      }
      if($("#mes_cad").val().trim() == "") {
         $('#aniversario_msg').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Informe o mês'});    
         return;
      }
      if($("#ano_cad").val().trim() == "") {
         $('#aniversario_msg').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Informe o ano'});    
         return;
      }
      if(validarNascimento($("#dia_cad").val(), $("#mes_cad").val(), $("#ano_cad").val()) == false) {
         $('#aniversario_msg').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Informe uma data válida'});    
         return;
      }      
      else {
         $.ajax({
            type: "POST",
            url: "dao/CadastroUsuario.php",
            data: { nome: $("#nome_cad").val(), email: $("#email_cad").val(), senha: $("#senha_cad").val(), nascimento: nascimento },
            success: function(data) {
               if(data == "ok") {
                  $('#cadastro_msg').puimessages('show', 'info', {summary: 'Informação', detail: 'Cadastro realizado com sucesso'});                   
               }
               else {
                  $('#cadastro_msg').puimessages('show', 'error', {summary: 'Erro', detail: data});
               }
            },
            dataType: "text"
         });
      }
             
   });
           
});