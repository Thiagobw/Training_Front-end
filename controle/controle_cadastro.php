<?php

include "../model/Usuarios.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];

$al = new Usuarios();

$al -> setNome($nome);
$al -> setCpf($cpf);
$al -> setEmail($email);
$al -> setEndereco($endereco);

echo "nome: "+$al -> getNome();
echo "<br>"+"CPF: "+$al -> getCpf();
echo "<br>"+"RG: "+$al -> getEmail();
echo "<br>"+"Data de nascimento: "+$al -> getEndereco();
?>