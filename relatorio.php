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
    <a href="areaRestritaAdm.php">ADMINISTRADOR</a>
    <span>></span>
    <a href="relatorio.php">RELATORIO</a> <br/><br/>

  <table id="tableAdm" border="1" cellspacing="1" cellpadding="1" method="get">
          Veja o relatório abaixo: <br/><br/>
        
        <tr>
          <td>Tipo:</td>
          <td><output name="nome" for="nome"> Maior consumo </output></td>
        </tr>
        <tr>
          <td>Usuario:</td>
          <td><output name="nome" for="nome"> Miagui Sam </output></td>
        </tr>
        <tr>
            <td>Consumo total (mensal):</td>
            <td><output id="consumoMensalTotal" name="consumoMensalTotal" for="nome">122 KW/mês</output></td>
        </tr>
        <tr>
            <td>Valor da conta (mensal):</td>
            <td><output id="contaMensalTotal" name="contaMensalTotal" for="nome">R$ 13,00</output></td>
        </tr>
  </table>
  <br/><br/>
  <table id="tableAdm" border="1" cellspacing="1" cellpadding="1" method="get">
          Veja o relatório abaixo: <br/><br/>
        
        <tr>
          <td>Tipo:</td>
          <td><output name="nome" for="nome"> Produto </output></td>
        </tr>
        <tr>
          <td>Produto:</td>
          <td><output name="nome" for="nome"> Ferro a vapor - CCE </output></td>
        </tr>
        <tr>
            <td>Usuarios:</td>
            <td><output id="consumoMensalTotal" name="consumoMensalTotal" for="nome">Miagui Sam</output><br/>
            <output id="consumoMensalTotal" name="consumoMensalTotal" for="nome">Yoda Shirota</output><br/>
            <output id="consumoMensalTotal" name="consumoMensalTotal" for="nome">Sidnelson Dasmáscio</output></td>
        </tr>      
  </table>
  <br/><a href="areaRestritaAdm.php">Voltar</a>

</div>
</body>
</html>