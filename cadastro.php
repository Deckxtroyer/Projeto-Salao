</script>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                <i class="material-icons text-red ">person NOME:</i>
                <input type="text" name="nome" class="textbox" required>
              </div><br><br>
        <div id="div2">
			      <i class="material-icons text-red ">date_range IDADE:</i> <input type="date" name="idade" class="textbox" required><br>
        </div><br><br>
        <div id="div3">
            <i class="material-icons text-red ">location_on ENDEREÇO:</i> <input type="text" name="endereco" class="textbox" required>
        </div><br><br>
        <div id="div4">
            <i class="material-icons text-red ">phone TELEFONE:</i> <input type="text" name="fone" class="textbox" placeholder="000000-0000" maxlength="12" OnKeyPress="formatar('##-####-####', this)" required><br>
        </div><br><br>
        <div id="div5">
            <i class="material-icons text-red ">credit_card RG:</i> <input type="text" name="rg" class="textbox" placeholder="0000000000-0" maxlength="12" OnKeyPress="formatar('##########-#', this)" required>
        </div><br><br>
        <div id="div6">
		        <i class="material-icons text-red ">chrome_reader_mode CPF:</i> <input type="text" name="cpf" class="textbox" placeholder="000.000.000-00" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)"required><br>
        </div><br><br>
        <div id="div7">
            <i class="material-icons text-red ">email EMAIL:</i> <input type="email" name="email" class="textbox" placeholder="example@gmail.com" required>
        </div><br><br>
        <div id="div8">
            <i class="material-icons text-red ">lock SENHA:</i> <input type="password" name="senha" class="textbox" placeholder="Digite uma senha" required>
        </div><br><br>
       <div id="div10">
        <i class="fa fa-transgender" aria-hidden="true"></i>
        SEXO:<select name="select" class="slct">
        <option value="M" selected>Masculino</option> 
        <option value="F">Feminino</option>fa-transgender 
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
