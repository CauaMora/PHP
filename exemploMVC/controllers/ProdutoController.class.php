<?php
    class ProdutoController
    {
        public function listar()
        {
            
            //Banco de dados
            //abre conexão com banco
            $parametros = 
            "mysql:
            host=localhost;
            dbname=exemplomvc;
            charset=utf8mb4";
            $conn = new PDO($parametros, "root", "");

            //Buscar dados 
            $sql = "SELECT * FROM produtos";
            $stm = $conn->prepare($sql);
            $stm->execute();
            $conn = null;
            $resultado = $stm->fetchAll(PDO::FETCH_OBJ);

            //var_dump($resultado);
            //Mostrar Produtos
            require_once "views/produtos.php";
        }
    }