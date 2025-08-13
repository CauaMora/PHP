<?php
 

 
require_once "usuario.php";
//Criando objeto


/*echo "<pre>";
var_dump ($usuario3);
echo "</pre>"; */

echo "Nome:{$usuario1->getNome()}<br>";

echo "Email:{$usuario1->getEmail()}<br>";

echo "Senha:{$usuario1->getSenha()}<br>";

$usuario1 -> setNome("Cauã de Moraes Callegari");

$usuario1 -> setEmail("cauamoraes@gmail.com");

$usuario1 -> setSenha("caua1234");

echo "Nome:{$usuario1->getNome()}<br>";

echo "Email:{$usuario1->getEmail()}<br>";

echo "Senha:{$usuario1->getSenha()}<br>";