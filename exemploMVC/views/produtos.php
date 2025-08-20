<!doctype html>
<html>
<head>
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <a href="index.php?controle=ProdutoController&metodo=inserir">Novo Produto</a>
    <table border="1">
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Ações</th>
        </tr>
        <?php
            foreach($resultado as $produto)
            {
                $preco = number_format($produto->preco,2,",",".");
                echo "
                <tr>
                    <td>{$produto->nome}</td>
                    <td>$preco</td>
                    <td>{$produto->estoque}</td>
                    <td>
                    <a href='index.php?controle=ProdutoController&metodo=alterar&id={$produto->id_produto}'>Alterar</a>
                    &nbsp;&nbsp;
                    <a href='index.php?controle=ProdutoController&metodo=excluir&id={$produto->id_produto}'>Excluir</a>
                    </td>
                </tr>";
            }
        ?>
    </table>    
</body>    
</html>