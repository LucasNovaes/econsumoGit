<!doctype html>
<html lang='pt-br'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Econsumo - Cadastro de clientes</title>
</head>

<body>

	<div id="cssmenu">
		<a href="index.html"><img src="logo.png" width="9%" align="center"></a>
		<a href='areaRestritaUsuario.php' >CADASTRAR PERFIL</a>
		<span>></span>
		<a href="gerarPerfil.php">PERFIL</a> <br/><br/>
      <table style="border-width: medium; border-radius: 10px; background:#3db2e1">
         Seu perfil de consumo, Miagui Sam<br/><br/>
         <tr>
            <td>Consumo total (mensal):</td>
               <td><output id="consumoMensalTotal" name="consumoMensalTotal" for="nome">122 KW/mês</output></td>
         </tr>
         <tr>
            <td>Valor da conta (mensal):</td>
               <td><output id="contaMensalTotal" name="contaMensalTotal" for="nome">R$ 13,00</output></td>
         </tr>
        
      <table/>
      <br/>Faça a sua meta de economia:
      <form  id="gerarMeta" name="gerarMeta" action="gerarMeta.php"><br/>
         <input type="radio" id="tipoMeta" name="tipoMeta" value="p">Em Porcentagem
         <input type="radio" id="tipoMeta" name="tipoMeta" value="k">Em kW/h
         <input type="number" id="valorMeta" name="valorMeta" placeholder="Valor">

         <br/><input type="submit" id="gerarMeta" nome="gerarMeta" value="Gerar meta">

      </form>     
   <div/>
</body>
<html/>