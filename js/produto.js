$(document).ready(function() {
   $('#categoria').puidropdown();
   $('#sub_categoria').puidropdown();
   $('#item').puidropdown();
   $('#descricao').puiinputtextarea({
      counter: $('#display'),
      counterTemplate: '({0} caracteres restantes)', 
      maxlength: 45
   });
   $('#preco').puispinner({
      min: 1,
      max: 1000
   });
});