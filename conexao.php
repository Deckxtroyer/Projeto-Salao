<?php
/**
 * inicia uma conexao com o banco
 */
session_start();
    $conexao = mysqli_connect("localhost","root","","cadastro");
