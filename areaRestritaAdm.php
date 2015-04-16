<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Econsumo</title>
</head>
<body>

<div id='cssmenu'>

    <a href="index.html"><img src="logo.png" width="9%" align="center"></a>
    <a href='index.html' action="index.html">HOME</a>
    <span>></span>
    <a href="areaRestritaAdm.php">ADMINISTRADOR</a> <br/><br/>

    Olá Administrador. Bem vindo! <br/>

  <table border="1" > <form name="form1" method="post" action="relatorio.php">
  <br/>  Informe os dados para gerar o relatório 
  <td COLSPAN=4> 
    <table id ="tableAdmDetalhe" cellspacing="2" cellpadding="2">
     
       
        <tr>
          <td> Filtrar usuário por:
            <input id="consumoUsuarioTipo" name="consumoUsuarioTipo" value="1" type="radio" onclick="habilitaRelatorio(this.value)" />Maior consumo
            <input id="consumoUsuarioTipo" name="consumoUsuarioTipo" value="2" onclick="habilitaRelatorio(this.value)" type="radio" checked/>Produto
          </td>
        </tr>
        <tr>
            <td>Eletrodoméstico:
            <select id="produtos" name="produtos" onchange="getProdutos(this);">
              <option value=""></option>
              <option value="1">Ferro a vapor - CCE</option>
              <option value="2">Chuveiro Elétrico - Lorenzetti</option>
              <option value="3">Vídeo Game - Xbox 360</option>
            </select></td>
          
        </tr>
     </table>

      <tr>
        <td align=center><input type="submit" value="Gerar relatório"></td>
      </tr>

</table>
<br/>

  <table id ="tableAdmCadastro" cellspacing="2" cellpadding="2" border="1" method="post" action="">
    <form id="form2" name="form2">
        
          <br/>Informe os dados para Cadastrar um novo produto
        
        <tr>
          <td> Nome:
            <input id="nomeProdutoCadastro" name="nomeProdutoCadastro" type="text" maxlength="30"/>
          
            Marca:
           <select id="produtos" name="produtos" onchange="getMarca(this);">
              <option value="" >Marca</option>
              <option value="1">CCE</option>
              <option value="2">Lorenzetti</option>
              <option value="3">Xingling</option>
              <option value="4">Sony</option>
              <option value="5">LG</option>
            </select></td>

        </tr>
        <tr>
          <td> Potência:
              <input id="kwhProdutoCadastroUso" name="kwhProdutoCadastroUso" type="number" maxlength="8"/> (Em uso)
              <br/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              <input id="kwhProdutoCadastroStandby" name="kwhProdutoCadastroStandby" type="number" maxlength="8"/> (Em standby)
          </td>
        </tr>
        <td> Voltagem:
            <input id="kwhProdutoCadastroUso" name="kwhProdutoCadastroUso" type="number" maxlength="8"/>
        </td>
        <tr>
        <td>
          <input type="button" value="Upload">
          <input type="text" placeholder="Caminho da imagem..."></td>
        </td>
        </tr>
        <tr>
          <td align=center><input type="button" value="Enviar"></td>
        </tr>
      </form>
     </table>
</table>

</form>

</div>
</body>
</html>