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
    <a href="areaRestritaUsuario.php">CADASTRAR PERFIL</a> <br/><br/>
    Informe os campos abaixo para gerar seu perfil de consumo <br/><br/>
    <tr>
      <td><table border="1" > <form name="form1" method="post" action="gerarPerfil.php">
  <tr>
    <td>Usuario:</td>
    <td><output name="nome" for="nome"> Miagui Sam </output></td>
      <td><a href="cadastro.php">Atualizar dados cadastrais</a></td>
   </tr>
  <tr>

  <td COLSPAN=4> 
  <table id ="tableDiv" cellspacing="0" cellpadding="0">
      <tr>
        <td><br/>  Informe os produtos que você utiliza </td>
      </tr>
      <tr>
        <td>Eletrodoméstico: 
          <select name="produtos" onchange="getProdutos(this);">
            <option value=""></option>
            <option value="1">Ferro a vapor - CCE</option>
            <option value="2">Chuveiro Elétrico - Lorenzetti</option>
            <option value="3">Vídeo Game - Xbox 360</option>
          </select></td>
        <td> &nbsp; Horas de uso: <input type="number" name="horas" maxlength="3" onkeypress="" placeholder="Entre 0 a 168" onchange="setHoras(this);">
          <input id="horasTipo1" name="horasTipo1" value="d" type="radio" checked />Diária
          <input id="horasTipo1" name="horasTipo1" value="s" type="radio"/>Semanal
        </td>
      </tr>

      <tr>
        <td>Eletrodoméstico: 
          <select name="produtos" onchange="getProdutos(this);">
            <option value=""></option>
            <option value="1">Ferro a vapor - CCE</option>
            <option value="2">Chuveiro Elétrico - Lorenzetti</option>
            <option value="3">Vídeo Game - Xbox 360</option>
          </select></td>
        <td> &nbsp; Horas de uso: <input type="number" name="horas" maxlength="3" onkeypress="" placeholder="Entre 0 a 168" onchange="setHoras(this);">
          <input id="horasTipo2" name="horasTipo2" value="d" type="radio" checked />Diária
          <input id="horasTipo2" name="horasTipo2" value="s" type="radio"/>Semanal
        </td>
      </tr>

      <tr>
          <td>Eletrodoméstico:
          <select name="produtos" onchange="getProdutos(this);">
            <option value=""></option>
            <option value="1">Ferro a vapor - CCE</option>
            <option value="2">Chuveiro Elétrico - Lorenzetti</option>
            <option value="3">Vídeo Game - Xbox 360</option>
          </select></td>
        <td> &nbsp; Horas de uso: <input type="number" id="horas" maxlength="3" onkeypress="" placeholder="Entre 0 a 168" name="horas" onchange="setHoras(this);">
          <input id="horasTipo3" name="horasTipo3" value="d" type="radio" checked />Diária
          <input id="horasTipo3" name="horasTipo3" value="s" type="radio"/>Semanal
        </td>
      </tr>
   </table>

  <tr>
    <td COLSPAN=5 align=center><input type="submit" value="Gerar perfil"></td>
  </tr>

</table>
</form>

</div>
</body>
</html>