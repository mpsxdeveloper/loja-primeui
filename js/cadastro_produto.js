$(function() {
   $('#cadastro_produto_info').puidialog({
      showEffect: 'fade',
      hideEffect: 'shake',
      effectSpeed: 'slow',
      minimizable: false,
      maximizable: false,
      resizable: false,
      responsive: true,
      minWidth: 250,
      modal: true,
      buttons: [{
         text: 'Cadastrar',
         icon: 'fa-file-o',
         click: function() {  
            if($('#categoria').val() == "") {
               $('#mensagens').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Informe a categoria'});
               return;    
            }
            if($('#sub_categoria').val() == "") {
               $('#mensagens').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Informe a sub_categoria'});
               return;    
            }
            if($('#item').val() == "") {
               $('#mensagens').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Informe o item'});
               return;    
            }
            if($("#descricao").val().trim() == "") {
               $('#mensagens').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Informe a descrição'});    
               $("#descricao").focus();
               return;
            }
            if($('#preco').val().trim() == "") {
               $('#mensagens').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Informe o preço'});
               $('#preco').focus();
               return;
            }
            if($('#preco').val() > 1000) {
               $('#mensagens').puimessages('show', 'warn', {summary: 'Aviso', detail: 'Preço maior que R$ 1000'});
               return;
            }            
            else {
               $.ajax({
                  type: "POST",
                  url: "../dao/CadastroProduto.php",
                  data: { categoria: $("#categoria").val(), sub_categoria: $("#sub_categoria").val(), descricao: $("#descricao").val().trim(), item: $('#item').val(), preco: $('#preco').val().trim() },
                  success: function(data) {
                     if(data == "ok") {
                        $('#mensagens').puimessages('show', 'info', {summary: 'Informação', detail: 'Produto cadastrado com sucesso'});
                     }
                     else {
                        $('#mensagens').puimessages('show', 'error', {summary: 'Erro', detail: data});
                     }
                  },
                  error: function(error) {
                     alert('erro: ' + error);
                  },
                  dataType: "text"
            });
         }
      }
   },
   {
      text: 'Cancelar',
      icon: 'fa-close',
         click: function() {
            $('#cadastro_produto').puidialog('hide');
         }
      }]
   });
   $('#mensagens').puimessages();
});
