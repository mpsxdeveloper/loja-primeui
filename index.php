<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/blitzer/theme.min.css" integrity="sha512-hZOcPNReWEUnOew9FRdj5KbItrLTrNix1oDe/h18Om/n+dmeszDZ8fV0jWCsFDOiZagIrrg0OORYYZSAv4Iu0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/primeui/4.1.15/primeui-all.css" integrity="sha512-rkuqTAfi1Xr2rbIFXWGE2W/mxZVtLeQa0mS2iQD9pDIRWXF2JIdEioa3h+mfB7RU10OgvD/vfNnXrN312sjMSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/primeui/4.1.15/primeui.min.js" integrity="sha512-p5EjY0keMShYvUjsdzlpwiQEk5vUwodnlIhsSk3Y22/Y9RSpH+3abpOzxWq1s4PuNPGdqtcp4uC7EuR2BfwG3A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="js/login.js"></script>
        <script type="text/javascript" src="js/cadastro_usuario.js"></script>
        <script type="text/javascript" src="js/utils.js"></script>
     </head>
    
     <body> 
         
        <div style="width: 90%; margin: 0 auto;">
         
            <div id="header" title="Digite suas informações para login">
                <form>
                    <table>
                        <tr>
                            <td> 
                            <label>E-mail:</label>
                            <input type="text" id="email_l" name="email_l" />
                            <label>Senha:&nbsp;&nbsp;</label>&nbsp;&nbsp;
                            <input type="password" id="senha_l" name="senha_l" />&nbsp;&nbsp;
                            <button id="acesso_l" name="acesso_l" type="button">Acessar</button>
                            <div id="mensagens"></div>
                            </td>
                            <td><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Esqueceu sua senha? Clique <a href="#" id="recuperar_senha">aqui</a></label></td>
                        </tr>
                    </table>
                </form>
            </div><br />

            <div id="left" style="width: 44%; min-height: 450px; float: left;">
                <img src="rs/intro.jpg" alt="splash" height="500" />
            </div>
            
            <div id="right" style="width: 55%; min-height: 450px; float: right;">
                <form>
                    <fieldset id="my_fieldset">
                    <legend>Não possui registro? Cadastre-se aqui <i class="fa fa-file-o"></i></legend>
                    <table>
                       <tr>
                           <td><label>Nome:</label></td>
                           <td><input type="text" id="nome_cad" name="nome_cad" maxlength="30" /></td>
                       </tr>
                       <tr>
                           <td colspan="2"><div id="nome_msg"></div></td>
                       </tr>
                       <tr>
                           <td><label>E-mail:</label></td>
                           <td><input type="text" id="email_cad" name="email_cad" maxlength="45" /></td>
                       </tr>
                       <tr>
                           <td colspan="2"><div id="email_cad_msg"></div></td>
                       </tr>
                       <tr>
                           <td><label>Confirmar e-mail:</label></td>
                           <td><input type="text" id="confirma_email_cad" name="confirma_email_cad" maxlength="45" /></td>
                       </tr>
                       <tr>
                           <td colspan="2"><div id="confirma_email_cad_msg"></div></td>
                       </tr>
                       <tr>
                           <td><label>Senha:</label></td>
                           <td><input type="password" id="senha_cad" maxlength="20" /></td>
                       </tr>
                       <tr>
                           <td colspan="2"><div id="senha_msg"></div></td>
                       </tr>
                       <tr>
                           <td><label>Nascimento:</label></td>
                           <td>
                              <select id="dia_cad" name="dia_cad">
                                  <option value="">Dia</option>
                                 <option value="01">1</option>
                                 <option value="02">2</option>
                                 <option value="03">3</option>
                                 <option value="04">4</option>
                                 <option value="05">5</option>
                                 <option value="06">6</option>
                                 <option value="07">7</option>
                                 <option value="08">8</option>
                                 <option value="09">9</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                                 <option value="13">13</option>
                                 <option value="14">14</option>
                                 <option value="15">15</option>
                                 <option value="16">16</option>
                                 <option value="17">17</option>
                                 <option value="18">18</option>
                                 <option value="19">19</option>
                                 <option value="20">20</option>
                                 <option value="21">21</option>
                                 <option value="22">22</option>
                                 <option value="23">23</option>
                                 <option value="24">24</option>
                                 <option value="25">25</option>
                                 <option value="26">26</option>
                                 <option value="27">27</option>
                                 <option value="28">28</option>
                                 <option value="29">29</option>
                                 <option value="30">30</option>
                                 <option value="31">31</option>
                              </select>
                              <select id="mes_cad" name="mes_cad">
                                 <option value="">Mês</option>
                                 <option value="01">Janeiro</option>
                                 <option value="02">Fevereiro</option>
                                 <option value="03">Março</option>
                                 <option value="04">Abril</option>
                                 <option value="05">Maio</option>
                                 <option value="06">Junho</option>
                                 <option value="07">Julho</option>
                                 <option value="08">Agosto</option>
                                 <option value="09">Setembro</option>
                                 <option value="10">Outubro</option>
                                 <option value="11">Novembro</option>
                                 <option value="12">Dezembro</option>
                              </select>
                              <select id="ano_cad" name="ano_cad">
                                 <option value="">Ano</option>
                                 <option value="1998">1998</option>
                                 <option value="1997">1997</option>
                                 <option value="1996">1996</option>
                                 <option value="1995">1995</option>
                                 <option value="1994">1994</option>
                                 <option value="1993">1993</option>
                                 <option value="1992">1992</option>
                                 <option value="1991">1991</option>
                                 <option value="1990">1990</option>
                                 <option value="1989">1989</option>
                                 <option value="1988">1988</option>
                                 <option value="1987">1987</option>
                                 <option value="1986">1986</option>
                                 <option value="1985">1985</option>
                                 <option value="1984">1984</option>
                                 <option value="1983">1983</option>
                                 <option value="1982">1982</option>
                                 <option value="1981">1981</option>
                                 <option value="1980">1980</option>
                                 <option value="1979">1979</option>
                                 <option value="1978">1978</option>
                                 <option value="1977">1977</option>
                                 <option value="1976">1976</option>
                                 <option value="1975">1975</option>
                                 <option value="1974">1974</option>
                                 <option value="1973">1973</option>
                                 <option value="1972">1972</option>
                                 <option value="1971">1971</option>
                                 <option value="1970">1970</option>
                                 <option value="1969">1969</option>
                                 <option value="1968">1968</option>
                                 <option value="1967">1967</option>
                                 <option value="1966">1966</option>
                                 <option value="1965">1965</option>
                                 <option value="1964">1964</option>
                                 <option value="1963">1963</option>
                                 <option value="1962">1962</option>
                                 <option value="1961">1961</option>
                                 <option value="1960">1960</option>
                                 <option value="1959">1959</option>
                                 <option value="1958">1958</option>
                                 <option value="1957">1957</option>
                                 <option value="1956">1956</option>
                                 <option value="1955">1955</option>
                                 <option value="1954">1954</option>
                                 <option value="1953">1953</option>
                                 <option value="1952">1952</option>
                                 <option value="1951">1951</option>
                                 <option value="1950">1950</option>
                              </select>
                        </tr>
                        <tr>
                           <td colspan="2"><div id="aniversario_msg"></div></td>
                        </tr>                              
                        <tr>
                            <td></td>
                            <td><button type="button" id="cadastro">Salvar</button></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p style="text-align: left; font-weight: bolder;">
                                    Ao se registrar, você está afirmando que concorda com as nossas
                                    Regras de Utilização do Site e com nossa Política de Utilização de Dados e Cookies.
                                    <br /><br />
                                    Clique <strong><a href="#">aqui</a></strong> e leia com atenção antes de prosseguir com o registro.
                                </p>
                            </td>
                        </tr>
                              <tr>
                                 <td colspan="2"><div id="cadastro_msg"></div></td>
                              </tr>
                           </table> 
                </fieldset>
            </form>
        </div>
        
    <div id="dlg" title="Recuperar minha senha">
        <form>
            <p>Digite o e-mail que você usou para se registrar nesse site. Enviaremos um link para você criar uma nova senha.</p>
            <table>
                <tr>
                    <td><label>E-mail:</label></td>
                    <td><input type="text" id="email_convite" size="30" maxlength="45" /></td>
                </tr>
            </table>
        </form>    
    </div>    
    
    <?php require_once("rs/footer.php"); ?>
        
</body>
    
</html>