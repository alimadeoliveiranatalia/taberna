<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: gold;
        }
        table{
            background-color: white;
            font-size: 25px;
            border: 3px;
        }
    </style>
    <title>MVC</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Db.php';
            require_once 'Produto.php';

            $chamada = new Produto;
            $result = $chamada->listarProduto();
            while($data = $result->fecth_assoc() ){
                $nome = $data['nome'];
                $categoria = $data['categoria'];
                $quantidade = $data['quantidade'];
                $vencimento = $data['vencimento'];
                $valor = $data['preco_venda'];
                print"<center>";
                print"<table><tr><td>";
                print$data['nome']."</td>
                <td>".$data['categoria']."</td>
                <td>".$data['vencimento']."</td>
                <td>".$data['preco_venda']."</td>
                </tr></table></center>";
            }
            
        
        ?>
    
    
    </pre>
</body>
</html>