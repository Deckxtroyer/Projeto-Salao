</script>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="icone_sl2.png">
  <link rel="stylesheet" href="stylo.css">
    <title>CADASTRO DE CLIENTE</title>
    <script>
    function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
</head>
<body>

	<div id="box">
    <center>
			<h2 class="h22">Tela de cadastro</h2>
	<form method="POST" action="cadastrar.php">
    <font color="white" size="3px">
        <div id="div1">
			      NOME: <input type="text" name="nome" class="textbox">
              </div><br><br>
        <div id="div2">
			      IDADE: <input type="date" name="idade" class="textbox"><br>
        </div><br><br>
        <div id="div3">
            ENDEREÇO: <input type="text" name="endereco" class="textbox">
        </div><br><br>
        <div id="div4">
            TELEFONE: <input type="text" name="fone" class="textbox" placeholder="000000-0000" maxlength="12" OnKeyPress="formatar('##-####-####', this)"><br>
        </div><br><br>
        <div id="div5">
            RG: <input type="text" name="rg" class="textbox" placeholder="0000000000-0" maxlength="14" OnKeyPress="formatar('##########-#', this)">
        </div><br><br>
        <div id="div6">
		        CPF: <input type="text" name="cpf" class="textbox" placeholder="000.000.000-00" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)"><br>
        </div><br><br>
        <div id="div7">
            EMAIL: <input type="email" name="email" class="textbox" placeholder="example@gmail.com">
        </div><br><br>
        <div id="div8">
            SENHA: <input type="password" name="senha" class="textbox" placeholder="Digite uma senha">
        </div><br><br>
        <div id="div10">
            SEXO:<select name="sexo" class="slct">
        <option value="M" selected>Masculino</option> 
        <option value="F">Feminino</option>
        </select>
    </div>
    <div id="div11">
            <input type="submit" class="botao" value="Cadastrar"><br>
    </div>
            </center>
  </form>
</div>
</body>
</html>
