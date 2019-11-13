<?php
/*
back-end do index.php  
*/
session_start();
include('conexao.php');
//verifica se nome e senha estao vazia
if(empty($_POST['nome']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
$conexao = mysqli_connect("localhost","root","","cadastro"); //abre uma conexao com o banco
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome from tb_usuario where nome = '{$nome}' and senha = '{$senha}' ";//busca as variaveis

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);
//verifica se os dados apresentados tem algum retorno
if($row == 1) {
	$cadastro = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $cadastro['nome'];
	header('Location: site.php'); //retornou 0, e entrou no site
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php'); //retornou 1, recarregou a pag
	exit();
}