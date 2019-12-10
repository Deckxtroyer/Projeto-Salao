<?php
session_start();
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


if (isset($_POST['nome'])&&isset($_POST['senha'])&&isset($_POST['endereco'])
&&isset($_POST['fone']) &&isset($_POST['idade'])&&isset($_POST['rg'])&&isset($_POST['cpf']) &&isset($_POST['sexo'])
&&isset($_POST['email'])) {
	$cadastro = true;
}
$conexao = mysqli_connect("localhost","root","","cadastro");
$cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
$rg = mysqli_real_escape_string($conexao, $_POST['rg']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);

$querycpf = "SELECT * from tb_usuario where cpf = '{$cpf}'";
$queryrg = "SELECT * from tb_usuario where rg = '{$rg}'";
$queryemail = "SELECT * from tb_usuario where email = '{$email}'";

$resultcpf = mysqli_query($conexao, $querycpf);
$resultrg = mysqli_query($conexao, $queryrg);
$resultemail = mysqli_query($conexao, $queryemail);


$rowcpf = mysqli_num_rows($resultcpf);
$rowrg = mysqli_num_rows($resultrg);
$rowemail = mysqli_num_rows($resultemail);

if($rowcpf >=1 || $rowrg >=1 || $rowemail >=1) {
	$cadastro = mysqli_fetch_assoc($resultcpf && $resultemail && $resultrg);
	$_SESSION['nome'] = $cadastro['nome'];

		echo "<meta http-equiv='refresh' content='0 URL=cadastro.html'>
	<script type=\"text/javascript\">
	alert(\"Este CPF ou RG ou E-MAIL já existe\");
	</script>
	";
	exit();
}else{
		$conexao = mysqli_connect("localhost","root","","cadastro");
	$sql = "INSERT INTO tb_usuario(nome,senha,endereco,fone,idade,rg,cpf,sexo,email)
	VALUES ('$nome','$senha','$endereco','$fone','$idade','$rg','$cpf','$sexo','$email');";

	mysqli_query($conexao,$sql);
	mysqli_close($conexao);

	header('Location: index1.php');
}
?>