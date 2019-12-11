<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="icon" href="icone_salao.png">
        <link rel="stylesheet" href="style2.css">
        <title>Cadastro</title>
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
    <a href="index.html"><input type="submit" class="btn1"  value="Voltar!"></a><br>
    

        <div id="box">
            <center>
                    <h2 class="h22">Tela de Cadastro</h2>
                    <img style="width: 100px; height: 100px;border-radius:50%;position:static;
                                left: 350px;top: 10px;border: 1px solid #fff;" name="img" id='img'>

		<script>
			function previewImagem(){
				var arquivo = document.querySelector('input[name=arquivo]').files[0];
				var preview = document.querySelector('img[name=img]');
				
				var reader = new FileReader();
				
				reader.onloadend = function () {
					preview.src = reader.result;
				}
				
				if(arquivo){
					reader.readAsDataURL(arquivo);
				}else{
					preview.src = "";
				}
			}
		</script>

                <form method="POST" action="cadastrar.php">
                        <font color="white" size="3px">
                        <div id="div1">
                        
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
                                <img src="user-3.png" width="22px" height="22px" class="img1">
                                <input type="text" name="nome" class="textbox" required>
                        </div><br>


                        <div id="div2">
                                <img src="idade.png" width="22px" height="22px" class="img1">
                                <input type="date" name="idade" class="textbox" required>
                        </div><br>


                        <div id="div3">
                                <img src="local.png" width="22px" height="22px" class="img1">
                                <input type="text" name="endereco" class="textbox" required>
                        </div><br>


                        <div id="div4">
                                <img src="telefone.png" width="22px" height="22px" class="img1">
                                <input type="text" name="fone" class="textbox" placeholder="000000-0000" maxlength="12" OnKeyPress="formatar('##-####-####', this)" required><br>
                        </div><br>


                        <div id="div5">
                                <img src="rg.png" width="22px" height="22px" class="img1"> 
                                <input type="text" name="rg" class="textbox" placeholder="0000000000-0" maxlength="12" OnKeyPress="formatar('##########-#', this)" required>
                        </div><br>


                        <div id="div6">
                                <img src="cpf.png" width="22px" height="22px" class="img1"> 
                                <input type="text" name="cpf" class="textbox" placeholder="000.000.000-00" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required><br>
                        </div><br>


                        <div id="div7">
                                <img src="email.png" width="22px" height="22px" class="img1"> 
                                <input type="email" name="email" class="textbox" placeholder="example@gmail.com" required>
                        </div><br>


                        <div id="div8">
                            <img src="padlock.png" width="22px" height="22px" class="img1">
                            <input type="password" name="senha" class="textbox" placeholder="Digite uma senha" required>
                        </div><br>
                        


                        <div id="div10">
                            <img src="sexo.png" width="22px" height="22px" class="img1">
                            <select name="sexo" class="sltc">
                                <option value="M" selected>Masculino</option> 
                                <option value="F">Feminino</option>
                            </select>
                        </div><br>


                        <div id="div11">
                        <input type="file" name="arquivo" id="arquivo" onchange="previewImagem()"><br><br>
                                <input type="submit" class="btn" value="Cadastrar">
                        </div>
                </form>
            </center>
        
    </div>
    </body>
</html>
