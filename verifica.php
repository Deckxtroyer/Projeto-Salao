<?php
/*
Verifica se a sessao do usuario foi iniciada
*/
session_start();
if (!$_SESSION['nome']) {
    header('Location: index1.php');
    exit ( );
}