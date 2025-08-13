<?php
 
class Usuario
{
    public function __construct(
        private string $nome = "",
        private string $email = "",
        private string $senha = ""
    ) {}
//Get
    public function getNome()
    {
        return $this -> nome;
    }
    public function getEmail()
    {
        return $this -> email;
    }
    public function getSenha()
    {
        return $this -> senha;
    }
//Set
    public function setNome($nome)
    {
        $this -> nome = $nome;
    }
    public function setEmail($email)
    {
        $this -> email = $email;
    }
    public function setSenha($senha)
    {
        $this -> senha = $senha;
    }
}
 
require_once "usuario.php";
//Criando objeto

$usuario1 = new Usuario("Cauã", "caua123@gmail.com", "caua123");
$usuario2 = new Usuario("Pedro", "Pedro321@gmail.com", "Pedro");
$usuario3 = new Usuario(nome:"Caua2", senha:"caua123", email:"caua123@gmail.com");

/*echo "<pre>";
var_dump ($usuario3);
echo "</pre>"; */
 
