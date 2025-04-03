<?php
$email = $_POST['usuario'];
$senha = $_POST['senha'];

if ($email == 'etec@volta.luz' && $senha == '1234') {
   $name = 'aluno';
   header("Location: privado.php?nome=".$name);
   exit(); 
} else {
   header("Location: erro.php");
   exit();
}
?>
