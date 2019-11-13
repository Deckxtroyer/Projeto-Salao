<?php
/**
 * back-end do cadastro
 */
session_start();
//variaveis 
$cadastro = false;
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];
$fone = $_POST['fone'];
$idade = $_POST['idade'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];


//verifica se as variaveis existem, porem logo mais sera mudada para "empty" que verificará se a variavel e vazia
if (isset($_POST['nome'])&&isset($_POST['senha'])&&isset($_POST['endereco'])
&&isset($_POST['fone']) &&isset($_POST['idade'])&&isset($_POST['rg'])&&isset($_POST['cpf']) &&isset($_POST['sexo'])
&&isset($_POST['email'])) {
	$cadastro = true;
}
//com o retorno verdadeiro, agora esta mandadndo os paramentros ou o que o usuario passou nos campor do front-end para o banco 
if ($cadastro==true) {
	$conexao = mysqli_connect("localhost","root","","cadastro");
	$sql = "INSERT INTO tb_usuario(nome,senha,endereco,fone,idade,rg,cpf,sexo,email) 
	VALUES ('$nome','$senha','$endereco','$fone','$idade','$rg','$cpf','$sexo','$email');"; //blocos de variaveis

	mysqli_query($conexao,$sql);
	mysqli_close($conexao);

	header('Location: index.php');
}
?>