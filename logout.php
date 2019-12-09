<?php
/*
Encerra a sessao criada
*/
session_start();
session_destroy();
header('Location: index1.php');
exit();