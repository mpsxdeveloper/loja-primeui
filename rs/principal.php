<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Principal</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/blitzer/theme.min.css" integrity="sha512-hZOcPNReWEUnOew9FRdj5KbItrLTrNix1oDe/h18Om/n+dmeszDZ8fV0jWCsFDOiZagIrrg0OORYYZSAv4Iu0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/primeui/4.1.15/primeui-all.css" integrity="sha512-rkuqTAfi1Xr2rbIFXWGE2W/mxZVtLeQa0mS2iQD9pDIRWXF2JIdEioa3h+mfB7RU10OgvD/vfNnXrN312sjMSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/primeui/4.1.15/primeui.min.js" integrity="sha512-p5EjY0keMShYvUjsdzlpwiQEk5vUwodnlIhsSk3Y22/Y9RSpH+3abpOzxWq1s4PuNPGdqtcp4uC7EuR2BfwG3A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="../js/produto.js"></script>
        <script type="text/javascript" src="../js/cadastro_produto.js"></script>
    </head>
    
    <body>

      <?php require_once('./header.php'); ?>
                
        <script>
        $(document).ready(function() { 
           $('#menubar').puimenubar();
           $('#email_convite').puiinputtext();
           $('#indicar').click(function() {
              $('#dlg').puidialog('show');
           });
           $('#cad_prod_info').click(function() {
              $('#cadastro_produto_info').puidialog('show');
           });
           $('#sair').click(function() {
              window.location.href = "Logout.php";     
           });
        });
        
      $(function() {
        $('#pesquisa').puiautocomplete({
              effect: 'fade',
              effectSpeed: 'slow',
              completeSource: function(request, response) {
                 $.ajax({
                    type: "GET",
                    url: '../dao/PesquisaSimplesProduto.php',
                    data: {query: request.query},
                    dataType: "json",
                    context: this,
                    success: function(data) {
                        var filtered = [];
                        for(var i = 0; i < data.length; i++) {
                           if(data[i].label.indexOf(request.query) === 0) {
                              filtered.push(data[i]);
                           }
                        }
                        response.call(this, filtered);
                    }
                 });
              }
           });
       });
        
        
        $(function() {
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
                text: 'Convidar',
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
       
       </script>
    
    <?php 
       require_once './menu.html';
    ?>     
 
<div id="dlg" title="Convidar alguém por e-mail">
    <form>
        <p>
           Digite o e-mail de alguém que você gostaria de convidar para utilizar este site.<br />
           Seu nome aparecerá como remetente do e-mail. 
        </p>
        <table>
            <tr>
                <td><label>E-mail:</label></td>
                <td><input type="text" id="email_convite" size="30" maxlength="45" /></td>
            </tr>
        </table>
    </form>    
</div>
 
<div id="cadastro_produto_info" title="Cadastrar Novo Produto">
   <form method="post" id="cad_prod">
        <p>
            Insira as informações necessárias para cadastrar o produto.<br />
            Faça uma descrição resumida. Insira uma foto real do produto.
        </p>
        <table>
            <tr>
                <td><label>Categoria:</label></td>
                <td>
                   <select id="categoria" name="categoria" required="">
                      <option value="">Escolha uma categoria:</option> 
                      <option value="1">Informática</option>
                      <option value="2">Vídeo-Game</option>
                   </select>
                </td>
            </tr>
            <tr>
                <td><label>Sub-categoria:</label></td>
                <td>
                   <select id="sub_categoria" name="sub_categoria" required="">
                      <option value="">Escolha uma sub-categoria:</option> 
                      <option value="1">Computador de mesa</option>
                      <option value="2">Vídeo-game - Acessórios</option>
                      <option value="2">Vídeo-game - Consoles</option>
                      <option value="2">Vídeo-game - Jogos</option>
                   </select>
                </td>
            </tr>
            <tr>
                <td><label>Item:</label></td>
                <td>
                   <select id="item" name="item" required="">
                      <option value="">Escolha o item:</option> 
                      <option value="1">Computador de mesa</option>
                      <option value="2">Jogos de Playstation 3</option>
                      <option value="2">Jogos de Playstation 4</option>
                      <option value="2">Jogos de Playstation Vita</option>
                   </select>
                </td>
            </tr>
            <tr>
                <td><label>Descrição:</label></td>
                <td>
                   <textarea id="descricao" name="descricao"></textarea>
                   <br /><span id="display"></span>
                </td>
            </tr>
            <tr>
                <td><label>Preço (R$):</label></td>
                <td><input type="text" id="preco" name="preco" value="" /></td>
            </tr>
            <tr>
                <td colspan="2"><div id="mensagens"></td>
            </tr>
        </table>
    </form>    
    
</div>
           
<div id="principal" style="margin: 0 auto;">
   <p style="text-align: center;">
      <img src="intro.jpg" alt="propaganda" />
   </p>
</div>                  
                    
<?php 
    require_once('./footer.php');
?>                    
 
</body>
    
</html>