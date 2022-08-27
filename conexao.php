<?php 
$username ="root";
$pass = "";
try {$PDO = new PDO('mysql:hos=localhost;dbname=projeto', $username, $pass);
    $PDO->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e){echo'ERRO::' . $e->getMessage();

}

$registros=$PDO->query("SELECT * FROM registros");
$linhas= $registros->fetchAll();
echo '<pre>';
var_dump($linhas);
echo '</pre>'
?>