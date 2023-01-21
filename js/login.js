$(document).ready(function() { 
   $('#header').puipanel();
   $('#footer').puipanel();
   $('#email_l').puiinputtext();
   $('#senha_l').puiinputtext();
   $('#acesso_l').puibutton({
      icon: 'fa-check',
      iconPos: 'right'
   });
   $('#mensagens').puimessages();
   $('#recuperar_senha').click(function() {
      $('#dlg').puidialog('show');
   });
   
   document.getElementById('email_l').focus();
   
   $("#acesso_l").click(function() {  
      if($("#email_l").val().trim() == "") {
         $('#mensagens').puimessages('show', 'warn', {summary: 'Aviso', detail: 'E-mail vazio!'});    
         return;
      }
      else if($("#senha_l").val() == "") {
         $('#mensagens').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Digite sua senha'});    
         return;
      }
      else {
         $.ajax({
            type: "POST",
            url: "dao/Login.php",
            data: { email_l: $("#email_l").val(), senha_l: $("#senha_l").val() },
            success: function(data) {
               if(data == "ok") {
                  window.location.href = "rs/principal.php";    
               } 
               else {
                  $('#mensagens').puimessages('show', 'error', {summary: 'Erro', detail: data});
               }
            },
            dataType: "text"
         });    
      }  
   });
   
           $('#dlg').puidialog({
              showEffect: 'fade',
              hideEffect: 'shake',
              effectSpeed: 'slow',
              minimizable: false,
              maximizable: false,
              resizable: false,
              responsive: true,
              minWidth: 150,
              modal: true,
              buttons: [{
                text: 'Enviar',
                icon: 'fa-envelope',
                click: function() {
                   $('#dlg').puidialog('hide');
                }
                },
                {
                text: 'Cancelar',
                icon: 'fa-close',
                click: function() {
                   $('#dlg').puidialog('hide');
                }
             }]
          });
          
});