<?php
//criando conexão com o banco Precisamos definir server localhost, usuario root senha '', e banco que deseja.
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "netflix";

$conexao = mysqli_connect( $host, $usuario, $senha, $banco);    

if($conexao){
   // echo "Conectado com Sucesso";
}else{
    echo "erro ao conectar com o banco";
}
?>