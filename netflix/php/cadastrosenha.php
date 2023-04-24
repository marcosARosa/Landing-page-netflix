<?php 
include_once("config/conexao.php");


if(($_POST)){       
$email = $_POST['email'];    
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$query = "INSERT INTO tbl_cadastros (email, senha, nome) VALUES  ('$email','$senha', '$nome')";
$inserir = mysqli_query($conexao, $query);

  header("Location: princindex.php");

}else{
    echo"Erro Tente Novamente mais Tarde!";
}
