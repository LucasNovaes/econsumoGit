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
		<a href='index.html' action="index.html">HOME</a>
		<span>></span>
		<a href="cadastro.php">CADASTRO</a> <br/><br/>

		<form id="cadastro" name="cadastro" method="post" action="" onsubmit="return validaCampo(); return false;">
		  
			<table width="625">
			    <tr>
			      <td width="69">Nome:</td>
			      	<td width="546"><input name="nome" type="text" id="nome" placeholder="Nome/Login" size="60" maxlength="60">*</td>
			    </tr>

			     <tr>
			      <td width="69">CPF:</td>
			     	 <td width="546"> <input name="icpf" id="icpf" onkeypress="mascara(this,cpf)" maxlength="14">*</td>
			    </tr>

			    <tr>
			      <td>E-mail:</td>
			   	   <td><input name="email" type="text" id="email" size="60" maxlength="60">*</td>
			    </tr>

			     <tr>
			      <td>Senha:</td>
			   	   <td><input name="senha1" type="password" id="senha1" maxlength="10">*</td>
			    </tr>

			     <tr>
			      <td>Confirmar Senha:</td>
			      <td><input name="senha2" type="password" id="senha2" maxlength="10">*</td>
			    </tr>
			    
			    <tr>
			      <td>Endereco:</td>
			      <td><input name="endereco" type="text" id="endereco" placeholder="Rua, numero, cidade, estado(MG,ES,...)" size="60" maxlength="70">
			      </td>
			    </tr>

			    <tr>
			      <td>Data de Nascimento:</td>
			      <td><input name="nascUsuario" id="nascUsuario" type="date" maxlength="10"></td>
			    </tr>  

			    <tr>
			      <td colspan="2"><p>
			        <input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro">

			          <input name="limpar" type="reset" id="limpar" value="Limpar Campos Preenchidos">
			           * Campos com (*) sao obrigatorios!
			     </td>
			    </tr>
			</table>
		</form>
	</div>
</body>
</html>



