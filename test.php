<?php
include_once('conexao.php');
$registros=$PDO->query("SELECT * FROM registros");
$linhas= $registros->fetchAll();
echo '<pre>';
var_dump($linhas);
echo '</pre>'
?>
<h1>teste2</h1>