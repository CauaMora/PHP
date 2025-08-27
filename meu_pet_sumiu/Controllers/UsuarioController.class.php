<?php
	require_once "Models/Usuario.php";
	class UsuarioController
	{
		public function login()
		{
			//require views formulário
			if($_POST)
			{
				//verificar os dados
				//verificar no banco de dados se existe esse usuário
			}
		} //fim do login
		public function inserir()
		{
			$msg = array("","","","");
			$erro = false;
			if($_POST)
			{
				if(empty($_POST["nome"]))
				{
					$msg[0] = "Preencha com seu nome";
					$erro = true;
				}
				if(empty($_POST["email"]))
				{
					$msg[1] = "Preencha com seu email";
					$erro = true;
				}
				else
				{
					$usuario = new Usuarios(email:$_POST["email"]);
					//verificar se ja não existe o mesmo email cadastrado
				}
				if(empty($_POST["senha"]))
				{
					$msg[2] = "Preencha com seu senha";
					$erro = true;
				}
				if(empty($_POST["celular"]))
				{
					$msg[3] = "Preencha com seu celular";
					$erro = true;
				}
				if(!$erro)
				{
					$usuario = new Usuarios(0,
					$_POST["nome"], 
					$_POST["email"], 
					$_POST["senha"], 
					$_POST["celular"]);
					//cadastrar ele no banco
				}
			}
			require_once "Views/Form_usuario.php";
		}
	}// fim da classe
?>