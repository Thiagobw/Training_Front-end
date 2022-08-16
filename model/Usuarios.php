<?php
class Usuarios{
    private $nome;
    private $cpf;
    private $email;
    private $endereco;

    public function setNome($nome){
        return $this -> nome = $nome;
    }

    public function getNome(){
        return $this -> nome;
    }

    public function setCpf($cpf){
        return $this -> cpf = $cpf;
    }

    public function getCpf(){
        return $this -> cpf;
    }

    public function setEmail($email){
        return $this -> email = $email;
    }

    public function getEmail(){
        return $this -> email;
    }

    public function setEndereco($endereco){
        return $this -> endereco = $endereco;
    }

    public function getEndereco(){
        return $this -> endereco;
    }
}
?>